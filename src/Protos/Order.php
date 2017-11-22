<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: task.proto

namespace Protos;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use GPBMetadata\Task;

/**
 * Protobuf type <code>protos.Order</code>
 */
class Order extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string attr = 1;</code>
     */
    private $attr = '';
    /**
     * <code>bool desc = 2;</code>
     */
    private $desc = false;
    /**
     * <code>repeated string langs = 3;</code>
     */
    private $langs;

    public function __construct() {
        Task::initOnce();
        parent::__construct();
    }

    /**
     * <code>string attr = 1;</code>
     */
    public function getAttr()
    {
        return $this->attr;
    }

    /**
     * <code>string attr = 1;</code>
     */
    public function setAttr($var)
    {
        GPBUtil::checkString($var, True);
        $this->attr = $var;

        return $this;
    }

    /**
     * <code>bool desc = 2;</code>
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * <code>bool desc = 2;</code>
     */
    public function setDesc($var)
    {
        GPBUtil::checkBool($var);
        $this->desc = $var;

        return $this;
    }

    /**
     * <code>repeated string langs = 3;</code>
     */
    public function getLangs()
    {
        return $this->langs;
    }

    /**
     * <code>repeated string langs = 3;</code>
     */
    public function setLangs(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->langs = $arr;

        return $this;
    }

}

