<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>api.LinRead</code>
 */
class LinRead extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>map&lt;uint32, uint64&gt; ids = 1;</code>
     */
    private $ids;

    public function __construct() {
        \GPBMetadata\Api::initOnce();
        parent::__construct();
    }

    /**
     * <code>map&lt;uint32, uint64&gt; ids = 1;</code>
     */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * <code>map&lt;uint32, uint64&gt; ids = 1;</code>
     */
    public function setIds(&$var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::UINT32, \Google\Protobuf\Internal\GPBType::UINT64);
        $this->ids = $arr;

        return $this;
    }

}
