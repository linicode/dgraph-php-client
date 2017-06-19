<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Use protos/gen.sh to generate .pb.go files.
//
namespace Protos {

  class DgraphClient extends \Grpc\BaseStub {

     // @param string $hostname hostname
     // @param array $opts channel options
     // @param \Grpc\Channel $channel (optional) re-use channel object
    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }

     // @param \Protos\Request $argument input argument
     // @param array $metadata metadata
     // @param array $options call options
    public function Run(\Protos\Request $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/protos.Dgraph/Run',
      $argument,
      ['\Protos\Response', 'decode'],
      $metadata, $options);
    }

     // @param \Protos\Check $argument input argument
     // @param array $metadata metadata
     // @param array $options call options
    public function CheckVersion(\Protos\Check $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/protos.Dgraph/CheckVersion',
      $argument,
      ['\Protos\Version', 'decode'],
      $metadata, $options);
    }

     // @param \Protos\Num $argument input argument
     // @param array $metadata metadata
     // @param array $options call options
    public function AssignUids(\Protos\Num $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/protos.Dgraph/AssignUids',
      $argument,
      ['\Protos\AssignedIds', 'decode'],
      $metadata, $options);
    }

  }

}
