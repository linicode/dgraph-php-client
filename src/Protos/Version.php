<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: task.proto

namespace Protos;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use GPBMetadata\Task;

/**
 * Protobuf type <code>protos.Version</code>
 */
class Version extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string tag = 1;</code>
     */
    private $tag = '';

    public function __construct() {
        Task::initOnce();
        parent::__construct();
    }

    /**
     * <code>string tag = 1;</code>
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * <code>string tag = 1;</code>
     */
    public function setTag($var)
    {
        GPBUtil::checkString($var, True);
        $this->tag = $var;

        return $this;
    }

}
