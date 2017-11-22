<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: task.proto

namespace Protos;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use GPBMetadata\Task;

/**
 * Protobuf type <code>protos.TaskValue</code>
 */
class TaskValue extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>bytes val = 1;</code>
     */
    private $val = '';
    /**
     * <code>int32 val_type = 2;</code>
     */
    private $val_type = 0;

    public function __construct() {
        Task::initOnce();
        parent::__construct();
    }

    /**
     * <code>bytes val = 1;</code>
     */
    public function getVal()
    {
        return $this->val;
    }

    /**
     * <code>bytes val = 1;</code>
     */
    public function setVal($var)
    {
        GPBUtil::checkString($var, False);
        $this->val = $var;

        return $this;
    }

    /**
     * <code>int32 val_type = 2;</code>
     */
    public function getValType()
    {
        return $this->val_type;
    }

    /**
     * <code>int32 val_type = 2;</code>
     */
    public function setValType($var)
    {
        GPBUtil::checkInt32($var);
        $this->val_type = $var;

        return $this;
    }

}
