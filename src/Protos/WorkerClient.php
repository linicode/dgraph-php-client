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
class WorkerClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Data serving RPCs.
     * @param Mutations $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Mutate(Mutations $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protos.Worker/Mutate',
        $argument,
        ['TxnContext', 'decode'],
        $metadata, $options);
    }

    /**
     * @param TxnContext $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CommitOrAbort(TxnContext $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protos.Worker/CommitOrAbort',
        $argument,
        ['Payload', 'decode'],
        $metadata, $options);
    }

    /**
     * @param Query $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ServeTask(Query $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protos.Worker/ServeTask',
        $argument,
        ['Result', 'decode'],
        $metadata, $options);
    }

    /**
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PredicateAndSchemaData($metadata = [], $options = []) {
        return $this->_bidiRequest('/protos.Worker/PredicateAndSchemaData',
        ['KV','decode'],
        $metadata, $options);
    }

    /**
     * @param SortMessage $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Sort(SortMessage $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protos.Worker/Sort',
        $argument,
        ['SortResult', 'decode'],
        $metadata, $options);
    }

    /**
     * @param SchemaRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Schema(SchemaRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protos.Worker/Schema',
        $argument,
        ['SchemaResult', 'decode'],
        $metadata, $options);
    }

    /**
     * @param Payload $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function MinTxnTs(Payload $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protos.Worker/MinTxnTs',
        $argument,
        ['Num', 'decode'],
        $metadata, $options);
    }

    /**
     * @param ExportPayload $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Export(ExportPayload $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protos.Worker/Export',
        $argument,
        ['ExportPayload', 'decode'],
        $metadata, $options);
    }

    /**
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ReceivePredicate($metadata = [], $options = []) {
        return $this->_clientStreamRequest('/protos.Worker/ReceivePredicate',
        ['Payload','decode'],
        $metadata, $options);
    }

    /**
     * @param MovePredicatePayload $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function MovePredicate(MovePredicatePayload $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protos.Worker/MovePredicate',
        $argument,
        ['Payload', 'decode'],
        $metadata, $options);
    }

}
