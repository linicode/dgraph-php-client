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
     * @param Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Query(Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protos.Dgraph/Query',
        $argument,
        ['Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param Mutation $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Mutate(Mutation $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protos.Dgraph/Mutate',
        $argument,
        ['Assigned', 'decode'],
        $metadata, $options);
    }

    /**
     * @param Operation $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Alter(Operation $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protos.Dgraph/Alter',
        $argument,
        ['Payload', 'decode'],
        $metadata, $options);
    }

    /**
     * @param TxnContext $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CommitOrAbort(TxnContext $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protos.Dgraph/CommitOrAbort',
        $argument,
        ['TxnContext', 'decode'],
        $metadata, $options);
    }

    /**
     * @param Check $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CheckVersion(Check $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protos.Dgraph/CheckVersion',
        $argument,
        ['Version', 'decode'],
        $metadata, $options);
    }

}
