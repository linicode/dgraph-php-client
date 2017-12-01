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
namespace Api;

/**
 * Graph response.
 */
class DgraphClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Api\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Query(\Api\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Dgraph/Query',
        $argument,
        ['\Api\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Api\Mutation $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Mutate(\Api\Mutation $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Dgraph/Mutate',
        $argument,
        ['\Api\Assigned', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Api\Operation $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Alter(\Api\Operation $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Dgraph/Alter',
        $argument,
        ['\Api\Payload', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Api\TxnContext $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CommitOrAbort(\Api\TxnContext $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Dgraph/CommitOrAbort',
        $argument,
        ['\Api\TxnContext', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Api\Check $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CheckVersion(\Api\Check $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Dgraph/CheckVersion',
        $argument,
        ['\Api\Version', 'decode'],
        $metadata, $options);
    }

}
