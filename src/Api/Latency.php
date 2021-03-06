<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>api.Latency</code>
 */
class Latency extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>uint64 parsing_ns = 1;</code>
     */
    private $parsing_ns = 0;
    /**
     * <code>uint64 processing_ns = 2;</code>
     */
    private $processing_ns = 0;
    /**
     * <code>uint64 encoding_ns = 3;</code>
     */
    private $encoding_ns = 0;

    public function __construct() {
        \GPBMetadata\Api::initOnce();
        parent::__construct();
    }

    /**
     * <code>uint64 parsing_ns = 1;</code>
     */
    public function getParsingNs()
    {
        return $this->parsing_ns;
    }

    /**
     * <code>uint64 parsing_ns = 1;</code>
     */
    public function setParsingNs($var)
    {
        GPBUtil::checkUint64($var);
        $this->parsing_ns = $var;

        return $this;
    }

    /**
     * <code>uint64 processing_ns = 2;</code>
     */
    public function getProcessingNs()
    {
        return $this->processing_ns;
    }

    /**
     * <code>uint64 processing_ns = 2;</code>
     */
    public function setProcessingNs($var)
    {
        GPBUtil::checkUint64($var);
        $this->processing_ns = $var;

        return $this;
    }

    /**
     * <code>uint64 encoding_ns = 3;</code>
     */
    public function getEncodingNs()
    {
        return $this->encoding_ns;
    }

    /**
     * <code>uint64 encoding_ns = 3;</code>
     */
    public function setEncodingNs($var)
    {
        GPBUtil::checkUint64($var);
        $this->encoding_ns = $var;

        return $this;
    }

}

