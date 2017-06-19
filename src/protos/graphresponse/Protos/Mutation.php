<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: graphresponse.proto

namespace Protos;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>protos.Mutation</code>
 */
class Mutation extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>repeated .protos.NQuad set = 1;</code>
     */
    private $set;
    /**
     * <code>repeated .protos.NQuad del = 2;</code>
     */
    private $del;
    /**
     * <code>repeated .protos.SchemaUpdate schema = 3;</code>
     */
    private $schema;

    public function __construct() {
        \GPBMetadata\Graphresponse::initOnce();
        parent::__construct();
    }

    /**
     * <code>repeated .protos.NQuad set = 1;</code>
     */
    public function getSet()
    {
        return $this->set;
    }

    /**
     * <code>repeated .protos.NQuad set = 1;</code>
     */
    public function setSet(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Protos\NQuad::class);
        $this->set = $arr;

        return $this;
    }

    /**
     * <code>repeated .protos.NQuad del = 2;</code>
     */
    public function getDel()
    {
        return $this->del;
    }

    /**
     * <code>repeated .protos.NQuad del = 2;</code>
     */
    public function setDel(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Protos\NQuad::class);
        $this->del = $arr;

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

