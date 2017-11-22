<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: task.proto

namespace Protos;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use GPBMetadata\Task;

/**
 * Protobuf type <code>protos.Tablet</code>
 */
class Tablet extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Served by which group.
     * </pre>
     *
     * <code>uint32 group_id = 1;</code>
     */
    private $group_id = 0;
    /**
     * <code>string predicate = 2;</code>
     */
    private $predicate = '';
    /**
     * <pre>
     * Used while moving predicate.
     * </pre>
     *
     * <code>bool force = 3;</code>
     */
    private $force = false;
    /**
     * <pre>
     * Used to block mutations on this predicate.
     * </pre>
     *
     * <code>bool read_only = 4;</code>
     */
    private $read_only = false;
    /**
     * <code>int64 space = 7;</code>
     */
    private $space = 0;

    public function __construct() {
        Task::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Served by which group.
     * </pre>
     *
     * <code>uint32 group_id = 1;</code>
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * <pre>
     * Served by which group.
     * </pre>
     *
     * <code>uint32 group_id = 1;</code>
     */
    public function setGroupId($var)
    {
        GPBUtil::checkUint32($var);
        $this->group_id = $var;

        return $this;
    }

    /**
     * <code>string predicate = 2;</code>
     */
    public function getPredicate()
    {
        return $this->predicate;
    }

    /**
     * <code>string predicate = 2;</code>
     */
    public function setPredicate($var)
    {
        GPBUtil::checkString($var, True);
        $this->predicate = $var;

        return $this;
    }

    /**
     * <pre>
     * Used while moving predicate.
     * </pre>
     *
     * <code>bool force = 3;</code>
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * <pre>
     * Used while moving predicate.
     * </pre>
     *
     * <code>bool force = 3;</code>
     */
    public function setForce($var)
    {
        GPBUtil::checkBool($var);
        $this->force = $var;

        return $this;
    }

    /**
     * <pre>
     * Used to block mutations on this predicate.
     * </pre>
     *
     * <code>bool read_only = 4;</code>
     */
    public function getReadOnly()
    {
        return $this->read_only;
    }

    /**
     * <pre>
     * Used to block mutations on this predicate.
     * </pre>
     *
     * <code>bool read_only = 4;</code>
     */
    public function setReadOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->read_only = $var;

        return $this;
    }

    /**
     * <code>int64 space = 7;</code>
     */
    public function getSpace()
    {
        return $this->space;
    }

    /**
     * <code>int64 space = 7;</code>
     */
    public function setSpace($var)
    {
        GPBUtil::checkInt64($var);
        $this->space = $var;

        return $this;
    }

}

