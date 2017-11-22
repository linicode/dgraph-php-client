<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: task.proto

namespace Protos;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use GPBMetadata\Task;

/**
 * Protobuf type <code>protos.SrcFunction</code>
 */
class SrcFunction extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * <code>repeated string args = 3;</code>
     */
    private $args;
    /**
     * <code>bool isCount = 4;</code>
     */
    private $isCount = false;

    public function __construct() {
        Task::initOnce();
        parent::__construct();
    }

    /**
     * <code>string name = 1;</code>
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <code>string name = 1;</code>
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * <code>repeated string args = 3;</code>
     */
    public function getArgs()
    {
        return $this->args;
    }

    /**
     * <code>repeated string args = 3;</code>
     */
    public function setArgs(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->args = $arr;

        return $this;
    }

    /**
     * <code>bool isCount = 4;</code>
     */
    public function getIsCount()
    {
        return $this->isCount;
    }

    /**
     * <code>bool isCount = 4;</code>
     */
    public function setIsCount($var)
    {
        GPBUtil::checkBool($var);
        $this->isCount = $var;

        return $this;
    }

}

