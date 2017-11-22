<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: task.proto

namespace Protos;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use GPBMetadata\Task;

/**
 * Protobuf type <code>protos.Param</code>
 */
class Param extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>bool all_keys = 1;</code>
     */
    private $all_keys = false;
    /**
     * <code>repeated string keys = 2;</code>
     */
    private $keys;

    public function __construct() {
        Task::initOnce();
        parent::__construct();
    }

    /**
     * <code>bool all_keys = 1;</code>
     */
    public function getAllKeys()
    {
        return $this->all_keys;
    }

    /**
     * <code>bool all_keys = 1;</code>
     */
    public function setAllKeys($var)
    {
        GPBUtil::checkBool($var);
        $this->all_keys = $var;

        return $this;
    }

    /**
     * <code>repeated string keys = 2;</code>
     */
    public function getKeys()
    {
        return $this->keys;
    }

    /**
     * <code>repeated string keys = 2;</code>
     */
    public function setKeys(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->keys = $arr;

        return $this;
    }

}
