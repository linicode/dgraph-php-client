<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: task.proto

namespace Protos;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use GPBMetadata\Task;

/**
 * Protobuf type <code>protos.Response</code>
 */
class Response extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>bytes json = 1;</code>
     */
    private $json = '';
    /**
     * <code>repeated .protos.SchemaNode schema = 2;</code>
     */
    private $schema;
    /**
     * <code>.protos.TxnContext txn = 3;</code>
     */
    private $txn = null;
    /**
     * <code>.protos.Latency latency = 12;</code>
     */
    private $latency = null;

    public function __construct() {
        Task::initOnce();
        parent::__construct();
    }

    /**
     * <code>bytes json = 1;</code>
     */
    public function getJson()
    {
        return $this->json;
    }

    /**
     * <code>bytes json = 1;</code>
     */
    public function setJson($var)
    {
        GPBUtil::checkString($var, False);
        $this->json = $var;

        return $this;
    }

    /**
     * <code>repeated .protos.SchemaNode schema = 2;</code>
     */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * <code>repeated .protos.SchemaNode schema = 2;</code>
     */
    public function setSchema(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, SchemaNode::class);
        $this->schema = $arr;

        return $this;
    }

    /**
     * <code>.protos.TxnContext txn = 3;</code>
     */
    public function getTxn()
    {
        return $this->txn;
    }

    /**
     * <code>.protos.TxnContext txn = 3;</code>
     */
    public function setTxn(&$var)
    {
        GPBUtil::checkMessage($var, TxnContext::class);
        $this->txn = $var;

        return $this;
    }

    /**
     * <code>.protos.Latency latency = 12;</code>
     */
    public function getLatency()
    {
        return $this->latency;
    }

    /**
     * <code>.protos.Latency latency = 12;</code>
     */
    public function setLatency(&$var)
    {
        GPBUtil::checkMessage($var, Latency::class);
        $this->latency = $var;

        return $this;
    }

}
