<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Use gen.sh to generate .pb.go files.
//
namespace Protos {

  class WorkerClient extends \Grpc\BaseStub {

     // @param string $hostname hostname
     // @param array $opts channel options
     // @param \Grpc\Channel $channel (optional) re-use channel object
    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }

     // Connection testing RPC.
     // @param \Protos\Payload $argument input argument
     // @param array $metadata metadata
     // @param array $options call options
    public function Echo(\Protos\Payload $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/protos.Worker/Echo',
      $argument,
      ['\Protos\Payload', 'decode'],
      $metadata, $options);
    }

     // Data serving RPCs.
     // @param \Protos\Num $argument input argument
     // @param array $metadata metadata
     // @param array $options call options
    public function AssignUids(\Protos\Num $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/protos.Worker/AssignUids',
      $argument,
      ['\Protos\AssignedIds', 'decode'],
      $metadata, $options);
    }

     // @param \Protos\Mutations $argument input argument
     // @param array $metadata metadata
     // @param array $options call options
    public function Mutate(\Protos\Mutations $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/protos.Worker/Mutate',
      $argument,
      ['\Protos\Payload', 'decode'],
      $metadata, $options);
    }

     // @param \Protos\Query $argument input argument
     // @param array $metadata metadata
     // @param array $options call options
    public function ServeTask(\Protos\Query $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/protos.Worker/ServeTask',
      $argument,
      ['\Protos\Result', 'decode'],
      $metadata, $options);
    }

     // @param array $metadata metadata
     // @param array $options call options
    public function PredicateAndSchemaData($metadata = [], $options = []) {
      return $this->_bidiRequest('/protos.Worker/PredicateAndSchemaData',
      ['\Protos\KV','decode'],
      $metadata, $options);
    }

     // @param \Protos\SortMessage $argument input argument
     // @param array $metadata metadata
     // @param array $options call options
    public function Sort(\Protos\SortMessage $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/protos.Worker/Sort',
      $argument,
      ['\Protos\SortResult', 'decode'],
      $metadata, $options);
    }

     // @param \Protos\RebuildIndexMessage $argument input argument
     // @param array $metadata metadata
     // @param array $options call options
    public function RebuildIndex(\Protos\RebuildIndexMessage $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/protos.Worker/RebuildIndex',
      $argument,
      ['\Protos\Payload', 'decode'],
      $metadata, $options);
    }

     // @param \Protos\SchemaRequest $argument input argument
     // @param array $metadata metadata
     // @param array $options call options
    public function Schema(\Protos\SchemaRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/protos.Worker/Schema',
      $argument,
      ['\Protos\SchemaResult', 'decode'],
      $metadata, $options);
    }

     // RAFT serving RPCs.
     // @param \Protos\Payload $argument input argument
     // @param array $metadata metadata
     // @param array $options call options
    public function RaftMessage(\Protos\Payload $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/protos.Worker/RaftMessage',
      $argument,
      ['\Protos\Payload', 'decode'],
      $metadata, $options);
    }

     // @param \Protos\RaftContext $argument input argument
     // @param array $metadata metadata
     // @param array $options call options
    public function JoinCluster(\Protos\RaftContext $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/protos.Worker/JoinCluster',
      $argument,
      ['\Protos\Payload', 'decode'],
      $metadata, $options);
    }

     // @param \Protos\MembershipUpdate $argument input argument
     // @param array $metadata metadata
     // @param array $options call options
    public function UpdateMembership(\Protos\MembershipUpdate $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/protos.Worker/UpdateMembership',
      $argument,
      ['\Protos\MembershipUpdate', 'decode'],
      $metadata, $options);
    }

     // @param \Protos\BackupPayload $argument input argument
     // @param array $metadata metadata
     // @param array $options call options
    public function Backup(\Protos\BackupPayload $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/protos.Worker/Backup',
      $argument,
      ['\Protos\BackupPayload', 'decode'],
      $metadata, $options);
    }

  }

}
