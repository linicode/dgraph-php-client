<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: task.proto

namespace Protos;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use GPBMetadata\Task;

/**
 * Protobuf type <code>protos.TxnTimestamps</code>
 */
class TxnTimestamps extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>repeated uint64 ts = 1;</code>
     */
    private $ts;

    public function __construct() {
        Task::initOnce();
        parent::__construct();
    }

    /**
     * <code>repeated uint64 ts = 1;</code>
     */
    public function getTs()
    {
        return $this->ts;
    }

    /**
     * <code>repeated uint64 ts = 1;</code>
     */
    public function setTs(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT64);
        $this->ts = $arr;

        return $this;
    }

}

