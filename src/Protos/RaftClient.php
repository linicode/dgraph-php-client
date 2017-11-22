<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
//
// Copyright (C) 2017 Dgraph Labs, Inc. and Contributors
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//    http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
// Use protos/gen.sh to generate .pb.go files.
namespace Protos;

/**
 */
class RaftClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param Payload $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Echo(Payload $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protos.Raft/Echo',
        $argument,
        ['Payload', 'decode'],
        $metadata, $options);
    }

    /**
     * @param Payload $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RaftMessage(Payload $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protos.Raft/RaftMessage',
        $argument,
        ['Payload', 'decode'],
        $metadata, $options);
    }

    /**
     * @param RaftContext $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function JoinCluster(RaftContext $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protos.Raft/JoinCluster',
        $argument,
        ['Payload', 'decode'],
        $metadata, $options);
    }

}
