<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: task.proto

namespace Protos;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use GPBMetadata\Task;

/**
 * Protobuf type <code>protos.KeyValues</code>
 */
class KeyValues extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>repeated .protos.KV kv = 1;</code>
     */
    private $kv;

    public function __construct() {
        Task::initOnce();
        parent::__construct();
    }

    /**
     * <code>repeated .protos.KV kv = 1;</code>
     */
    public function getKv()
    {
        return $this->kv;
    }

    /**
     * <code>repeated .protos.KV kv = 1;</code>
     */
    public function setKv(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, KV::class);
        $this->kv = $arr;

        return $this;
    }

}
