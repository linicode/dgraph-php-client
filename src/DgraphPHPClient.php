<?php

namespace Linicode\DgraphPHP;

use Api\Check;
use Api\LinRead;
use Api\Operation;

class DgraphPHPClient {

  /**
   * @var \Api\DgraphClient[]
   */
  public $dc;

  /**
   * @var \SyncMutex
   */
  public $mu;

  /**
   * @var \Api\LinRead
   */
  public $linRead;

  /**
   * creates a new Dgraph for interacting with the Dgraph store connected to in conns.
   *
   * The client can be backed by multiple connections (to the same server, or
   * multiple servers in a cluster).
   *
   * @param \Api\DgraphClient[] $clients
   */
  public function __construct(array $clients) {
    $this->dc = $clients;
    $this->mu = new \SyncMutex();
    $this->linRead = new LinRead();
  }

  /**
   * @param \Api\LinRead $src
   */
  public function mergeLinRead(LinRead $src) {
    $this->mu->lock();
    self::mergeLinReads($this->linRead, $src);
    $this->mu->unlock();
  }

  /**
   * @return \Api\LinRead
   */
  public function getLinRead() {
    $this->mu->lock();
    $linRead = clone $this->linRead;
    $this->mu->unlock();
    return $linRead;
  }

  /**
   * @param \Api\Operation $argument
   * @param array $metadata
   * @param array $options
   *
   * @return \Api\Payload
   *
   * @throws \Linicode\DgraphPHP\DgraphCallException
   */
  public function Alter(Operation $argument, $metadata = [], $options = []) {
    $anyClient = $this->anyClient();
    $alterCall = $anyClient->Alter($argument, $metadata, $options);
    return self::handleResponse($alterCall);
  }

  /**
   * @param \Api\Check $argument input argument
   * @param array $metadata metadata
   * @param array $options call options
   *
   * @return \Api\Version
   *
   * @throws \Linicode\DgraphPHP\DgraphCallException
   */
  public function CheckVersion(Check $argument, $metadata = [], $options = []) {
    $anyClient = $this->anyClient();
    $checkVersionCall = $anyClient->CheckVersion($argument, $metadata, $options);
    return self::handleResponse($checkVersionCall);
  }

  /**
   * @return \Api\DgraphClient
   */
  public function anyClient() {
    return $this->dc[array_rand($this->dc)];
  }

  /**
   * @param \Api\LinRead $dst
   * @param \Api\LinRead $src
   */
  public static function mergeLinReads(LinRead $dst, LinRead $src) {
    if ($src == null || !$src->getIds()) {
      return;
    }
    if (!$dst->getIds()) {
      $ids = [];
      $dst->setIds($ids);
    }

    foreach ($src->getIds() as $gid => $sid) {
      $dstIds = $dst->getIds();
      if (!isset($dstIds[$gid]) || $dstIds[$gid] < $sid) {
        $dstIds[$gid] = $sid;
        $dst->setIds($dstIds);
      }
    }
  }

  /**
   * @param \Grpc\UnaryCall $call
   *
   * @return mixed
   *
   * @throws \Linicode\DgraphPHP\DgraphCallException
   */
  protected static function handleResponse(\Grpc\UnaryCall $call) {
    $response = $call->wait();
    if (empty($response[0])) {
      throw new DgraphCallException(!empty($response[1]->details) ? $response[1]->details : 'Dgraph call error');
    }
    return $response[0];
  }

}