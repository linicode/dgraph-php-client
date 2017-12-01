<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>api.TxnContext</code>
 */
class TxnContext extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>uint64 start_ts = 1;</code>
     */
    private $start_ts = 0;
    /**
     * <code>uint64 commit_ts = 2;</code>
     */
    private $commit_ts = 0;
    /**
     * <code>bool aborted = 3;</code>
     */
    private $aborted = false;
    /**
     * <code>repeated string keys = 4;</code>
     */
    private $keys;
    /**
     * <code>.api.LinRead lin_read = 13;</code>
     */
    private $lin_read = null;

    public function __construct() {
        \GPBMetadata\Api::initOnce();
        parent::__construct();
    }

    /**
     * <code>uint64 start_ts = 1;</code>
     */
    public function getStartTs()
    {
        return $this->start_ts;
    }

    /**
     * <code>uint64 start_ts = 1;</code>
     */
    public function setStartTs($var)
    {
        GPBUtil::checkUint64($var);
        $this->start_ts = $var;

        return $this;
    }

    /**
     * <code>uint64 commit_ts = 2;</code>
     */
    public function getCommitTs()
    {
        return $this->commit_ts;
    }

    /**
     * <code>uint64 commit_ts = 2;</code>
     */
    public function setCommitTs($var)
    {
        GPBUtil::checkUint64($var);
        $this->commit_ts = $var;

        return $this;
    }

    /**
     * <code>bool aborted = 3;</code>
     */
    public function getAborted()
    {
        return $this->aborted;
    }

    /**
     * <code>bool aborted = 3;</code>
     */
    public function setAborted($var)
    {
        GPBUtil::checkBool($var);
        $this->aborted = $var;

        return $this;
    }

    /**
     * <code>repeated string keys = 4;</code>
     */
    public function getKeys()
    {
        return $this->keys;
    }

    /**
     * <code>repeated string keys = 4;</code>
     */
    public function setKeys(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->keys = $arr;

        return $this;
    }

    /**
     * <code>.api.LinRead lin_read = 13;</code>
     */
    public function getLinRead()
    {
        return $this->lin_read;
    }

    /**
     * <code>.api.LinRead lin_read = 13;</code>
     */
    public function setLinRead(&$var)
    {
        GPBUtil::checkMessage($var, \Api\LinRead::class);
        $this->lin_read = $var;

        return $this;
    }

}
