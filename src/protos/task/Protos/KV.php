<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: task.proto

namespace Protos;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>protos.KV</code>
 */
class KV extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>bytes key = 1;</code>
     */
    private $key = '';
    /**
     * <code>bytes val = 2;</code>
     */
    private $val = '';

    public function __construct() {
        \GPBMetadata\Task::initOnce();
        parent::__construct();
    }

    /**
     * <code>bytes key = 1;</code>
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <code>bytes key = 1;</code>
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->key = $var;

        return $this;
    }

    /**
     * <code>bytes val = 2;</code>
     */
    public function getVal()
    {
        return $this->val;
    }

    /**
     * <code>bytes val = 2;</code>
     */
    public function setVal($var)
    {
        GPBUtil::checkString($var, False);
        $this->val = $var;

        return $this;
    }

}

