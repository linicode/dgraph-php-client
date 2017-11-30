<?php

namespace Linicode\DgraphPHP;

use Protos\LinRead;
use Protos\Operation;

class DgraphPHPClient {

  /**
   * @var \Protos\DgraphClient[]
   */
  public $dc;

  /**
   * @var \SyncMutex
   */
  public $mu;

  /**
   * @var \Protos\LinRead
   */
  public $linRead;

  /**
   * creates a new Dgraph for interacting with the Dgraph store connected to in conns.
   *
   * The client can be backed by multiple connections (to the same server, or
   * multiple servers in a cluster).
   *
   * @param \Protos\DgraphClient[] $clients
   */
  public function __construct(array $clients) {
    $this->dc = $clients;
    $this->mu = new \SyncMutex();
    $this->linRead = new LinRead();
  }

  /**
   * @param \Protos\LinRead $src
   */
  public function mergeLinRead(LinRead $src) {
    $this->mu->lock();
    self::mergeLinReads($this->linRead, $src);
    $this->mu->unlock();
  }

  /**
   * @return \Protos\LinRead
   */
  public function getLinRead() {
    $this->mu->lock();
    $lin_read = clone $this->linRead;
    $this->mu->unlock();
    return $lin_read;
  }

  /**
   * @param \Protos\Operation $argument
   * @param array $metadata
   * @param array $options
   *
   * @return \Grpc\UnaryCall
   */
  public function Alter(Operation $argument, $metadata = [], $options = []) {
    $any_client = $this->anyClient();
    return $any_client->Alter($argument, $metadata, $options);
  }

  /**
   * @return \Protos\DgraphClient
   */
  public function anyClient() {
    return $this->dc[array_rand($this->dc)];
  }

  /**
   * @param \Protos\LinRead $dst
   * @param \Protos\LinRead $src
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
      $dst_ids = $dst->getIds();
      if (!isset($dst_ids[$gid]) || $dst_ids[$gid] < $sid) {
        $dst_ids[$gid] = $sid;
        $dst->setIds($dst_ids);
      }
    }
  }

}