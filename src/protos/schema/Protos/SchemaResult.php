<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: schema.proto

namespace Protos;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>protos.SchemaResult</code>
 */
class SchemaResult extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>repeated .protos.SchemaNode schema = 1;</code>
     */
    private $schema;

    public function __construct() {
        \GPBMetadata\Schema::initOnce();
        parent::__construct();
    }

    /**
     * <code>repeated .protos.SchemaNode schema = 1;</code>
     */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * <code>repeated .protos.SchemaNode schema = 1;</code>
     */
    public function setSchema(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Protos\SchemaNode::class);
        $this->schema = $arr;

        return $this;
    }

}

