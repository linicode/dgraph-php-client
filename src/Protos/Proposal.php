<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: task.proto

namespace Protos;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use GPBMetadata\Task;

/**
 * Protobuf type <code>protos.Proposal</code>
 */
class Proposal extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>uint32 id = 1;</code>
     */
    private $id = 0;
    /**
     * <code>.protos.Mutations mutations = 2;</code>
     */
    private $mutations = null;
    /**
     * <code>.protos.TxnContext txn_context = 3;</code>
     */
    private $txn_context = null;
    /**
     * <code>repeated .protos.KV kv = 4;</code>
     */
    private $kv;
    /**
     * <code>.protos.MembershipState state = 5;</code>
     */
    private $state = null;
    /**
     * <pre>
     * Delete the predicate which was moved to other group.
     * </pre>
     *
     * <code>string clean_predicate = 6;</code>
     */
    private $clean_predicate = '';

    public function __construct() {
        Task::initOnce();
        parent::__construct();
    }

    /**
     * <code>uint32 id = 1;</code>
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <code>uint32 id = 1;</code>
     */
    public function setId($var)
    {
        GPBUtil::checkUint32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * <code>.protos.Mutations mutations = 2;</code>
     */
    public function getMutations()
    {
        return $this->mutations;
    }

    /**
     * <code>.protos.Mutations mutations = 2;</code>
     */
    public function setMutations(&$var)
    {
        GPBUtil::checkMessage($var, Mutations::class);
        $this->mutations = $var;

        return $this;
    }

    /**
     * <code>.protos.TxnContext txn_context = 3;</code>
     */
    public function getTxnContext()
    {
        return $this->txn_context;
    }

    /**
     * <code>.protos.TxnContext txn_context = 3;</code>
     */
    public function setTxnContext(&$var)
    {
        GPBUtil::checkMessage($var, TxnContext::class);
        $this->txn_context = $var;

        return $this;
    }

    /**
     * <code>repeated .protos.KV kv = 4;</code>
     */
    public function getKv()
    {
        return $this->kv;
    }

    /**
     * <code>repeated .protos.KV kv = 4;</code>
     */
    public function setKv(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, KV::class);
        $this->kv = $arr;

        return $this;
    }

    /**
     * <code>.protos.MembershipState state = 5;</code>
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * <code>.protos.MembershipState state = 5;</code>
     */
    public function setState(&$var)
    {
        GPBUtil::checkMessage($var, MembershipState::class);
        $this->state = $var;

        return $this;
    }

    /**
     * <pre>
     * Delete the predicate which was moved to other group.
     * </pre>
     *
     * <code>string clean_predicate = 6;</code>
     */
    public function getCleanPredicate()
    {
        return $this->clean_predicate;
    }

    /**
     * <pre>
     * Delete the predicate which was moved to other group.
     * </pre>
     *
     * <code>string clean_predicate = 6;</code>
     */
    public function setCleanPredicate($var)
    {
        GPBUtil::checkString($var, True);
        $this->clean_predicate = $var;

        return $this;
    }

}

