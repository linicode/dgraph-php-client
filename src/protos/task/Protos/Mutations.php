<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: task.proto

namespace Protos;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>protos.Mutations</code>
 */
class Mutations extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>uint32 group_id = 1;</code>
     */
    private $group_id = 0;
    /**
     * <code>repeated .protos.DirectedEdge edges = 2;</code>
     */
    private $edges;
    /**
     * <code>repeated .protos.SchemaUpdate schema = 3;</code>
     */
    private $schema;

    public function __construct() {
        \GPBMetadata\Task::initOnce();
        parent::__construct();
    }

    /**
     * <code>uint32 group_id = 1;</code>
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * <code>uint32 group_id = 1;</code>
     */
    public function setGroupId($var)
    {
        GPBUtil::checkUint32($var);
        $this->group_id = $var;

        return $this;
    }

    /**
     * <code>repeated .protos.DirectedEdge edges = 2;</code>
     */
    public function getEdges()
    {
        return $this->edges;
    }

    /**
     * <code>repeated .protos.DirectedEdge edges = 2;</code>
     */
    public function setEdges(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Protos\DirectedEdge::class);
        $this->edges = $arr;

        return $this;
    }

    /**
     * <code>repeated .protos.SchemaUpdate schema = 3;</code>
     */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * <code>repeated .protos.SchemaUpdate schema = 3;</code>
     */
    public function setSchema(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Protos\SchemaUpdate::class);
        $this->schema = $arr;

        return $this;
    }

}

