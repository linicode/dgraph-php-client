<?php

namespace Linicode\DgraphPHP;

use Api\Mutation;
use Api\Request;
use Api\TxnContext;

/**
 * Class Txn is a single atomic transaction.
 *
 * A transaction lifecycle is as follows:
 * 1. Created using NewTxn.
 * 2. Various Query and Mutate calls made.
 * 3. Commit or Discard used. If any mutations have been made, It's important
 *    that at least one of these methods is called to clean up resources. Discard
 *    is a no-op if Commit has already been called, so it's safe to defer a call
 *    to Discard immediately after NewTxn.
 */
class Txn
{

    const ERR_FINISHED = "Transaction has already been committed or discarded";

    /***
     * @var \Api\TxnContext
     */
    private $context;

    /**
     * @var bool
     */
    private $finished;

    /**
     * @var $bool
     */
    private $mutated;

    /**
     * @var \Linicode\DgraphPHP\Dgraph
     */
    private $dg;

    public function __construct(\Linicode\DgraphPHP\Dgraph $dg)
    {
        $this->dg = $dg;
        $this->context = new TxnContext();
        $dgLinRead = $dg->getLinRead();
        $this->context->setLinRead($dgLinRead);
    }

    /**
     * Query sends a query to one of the connected dgraph instances.
     *
     * @param string $q
     *   The query to run.
     *
     * @return \Api\Response
     *   The response from the server.
     */
    public function query($q)
    {
        return $this->queryWithVars($q);
    }

    /**
     * QueryWithVars is like Query, but allows a variable map to be used.
     *
     * This can provide safety against injection attacks.
     *
     * @param $q
     *   The query to run.
     * @param array|NULL $vars
     *   A params array.
     *
     * @return \Api\Response
     *   The response from the server.
     */
    public function queryWithVars($q, array $vars = null)
    {
        if ($this->finished) {
            throw new CallException(self::ERR_FINISHED);
        }
        $req = new Request();
        $req->setQuery($q);
        if ($vars) {
            $req->setVars($vars);
        }
        $req->setStartTs($this->context->getStartTs());
        $req->setLinRead($this->context->getLinRead());

        $dc = $this->dg->anyClient();
        $queryCall = $dc->Query($req);
        /* @var \Api\Response $resp */
        $resp = Y::handleResponse($queryCall);
        $this->mergeContext($resp->getTxn());
        return $resp;
    }

    protected function mergeContext(TxnContext $src)
    {
        if (!$src) {
            return;
        }

        Y::mergeLinReads($this->context->getLinRead(), $src->getLinRead());
        $this->dg->mergeLinRead($src->getLinRead()); // Also merge it with client.

        if ($this->context->getStartTs() == 0) {
            $this->context->setStartTs($src->getStartTs());
        }
        if ($this->context->getStartTs() != $src->getStartTs()) {
            throw new CallException("StartTs mismatch");
        }
        $merged_keys = array_merge(iterator_to_array($this->context->getKeys()), iterator_to_array($src->getKeys()));
        $this->context->setKeys($merged_keys);
        return;
    }


    /**
     * Mutate allows data stored on dgraph instances to be modified. The fields in
     * api.Mutation come in pairs, set and delete. Mutations can either be
     * encoded as JSON or as RDFs.
     *
     * If CommitNow is set, then this call will result in the transaction
     * being committed. In this case, an explicit call to Commit doesn't need to
     * subsequently be made.
     *
     * If the mutation fails, then the transaction is discarded and all future
     * operations on it will fail.
     *
     * @param \Api\Mutation $mu
     *   A mutation.
     *
     * @return \Api\Assigned
     */
    public function mutate(Mutation $mu)
    {
        if ($this->finished) {
            throw new CallException(self::ERR_FINISHED);
        }
        $this->mutated = true;
        $mu->setStartTs($this->context->getStartTs());
        $dc = $this->dg->anyClient();
        $muCall = $dc->Mutate($mu);
        try {
            /* @var \Api\Assigned $ag */
            $ag = Y::handleResponse($muCall);
        } catch (CallException $e) {
            try {
                $this->discard();
            } catch (\Exception $discardException) {
                throw $e;
            }
            // TODO: see https://github.com/dgraph-io/dgraph/blob/master/client/txn.go#L142
            throw $e;
        }
        if ($mu->getCommitNow()) {
            $this->finished = true;
        }
        $this->mergeContext($ag->getContext());
        return $ag;
    }

    /**
     * Commit commits any mutations that have been made in the transaction.
     * Once Commit has been called, the lifespan of the transaction is complete.
     *
     * Errors could be returned for various reasons. Notably, ErrAborted could
     * be returned if transactions that modify the same data are being run
     * concurrently. It's up to the user to decide if they wish to retry. In
     * this case, the user should create a new transaction.
     *
     * @return \Api\TxnContext|void
     */
    public function commit()
    {
        if ($this->finished) {
            throw new CallException(self::ERR_FINISHED);
        }
        $this->finished = true;

        if (!$this->mutated) {
            return;
        }
        $dc = $this->dg->anyClient();
        $commitOrAbortCall = $dc->CommitOrAbort($this->context);
        return Y::handleResponse($commitOrAbortCall);
    }

    /**
     * Discard cleans up the resources associated with an uncommitted transaction
     * that contains mutations. It is a no-op on transactions that have already
     * been committed or don't contain mutations. Therefore it is safe (and
     * recommended) to call as a deferred function immediately after a new
     * transaction is created.
     *
     * In some cases, the transaction can't be discarded, e.g. the grpc connection
     * is unavailable. In these cases, the server will eventually do the
     * transaction clean up.
     *
     * @return \Api\TxnContext|void
     */
    protected function discard()
    {
        if ($this->finished) {
            return;
        }
        $this->finished = true;

        if (!$this->mutated) {
            return;
        }
        $this->context->setAborted(true);
        $dc = $this->dg->anyClient();
        $commitOrAbortCall = $dc->CommitOrAbort($this->context);
        return Y::handleResponse($commitOrAbortCall);
    }

}