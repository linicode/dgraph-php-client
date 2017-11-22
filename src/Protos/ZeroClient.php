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
class ZeroClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param Member $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Connect(Member $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protos.Zero/Connect',
        $argument,
        ['ConnectionState', 'decode'],
        $metadata, $options);
    }

    /**
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Update($metadata = [], $options = []) {
        return $this->_bidiRequest('/protos.Zero/Update',
        ['MembershipState','decode'],
        $metadata, $options);
    }

    /**
     * @param Payload $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Oracle(Payload $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/protos.Zero/Oracle',
        $argument,
        ['OracleDelta', 'decode'],
        $metadata, $options);
    }

    /**
     * @param Tablet $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ShouldServe(Tablet $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protos.Zero/ShouldServe',
        $argument,
        ['Tablet', 'decode'],
        $metadata, $options);
    }

    /**
     * @param Num $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AssignUids(Num $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protos.Zero/AssignUids',
        $argument,
        ['AssignedIds', 'decode'],
        $metadata, $options);
    }

    /**
     * @param Num $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Timestamps(Num $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protos.Zero/Timestamps',
        $argument,
        ['AssignedIds', 'decode'],
        $metadata, $options);
    }

    /**
     * @param TxnContext $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CommitOrAbort(TxnContext $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protos.Zero/CommitOrAbort',
        $argument,
        ['TxnContext', 'decode'],
        $metadata, $options);
    }

    /**
     * @param TxnTimestamps $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function TryAbort(TxnTimestamps $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protos.Zero/TryAbort',
        $argument,
        ['TxnTimestamps', 'decode'],
        $metadata, $options);
    }

}
