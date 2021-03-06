<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: apiratelimit.proto

namespace Pb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>pb.SetRateLimitRequest</code>
 */
class SetRateLimitRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string keyid = 1;</code>
     */
    private $keyid = '';
    /**
     * <code>int32 keytype = 2;</code>
     */
    private $keytype = 0;
    /**
     * <code>string url = 3;</code>
     */
    private $url = '';
    /**
     * <code>int64 limit = 4;</code>
     */
    private $limit = 0;
    /**
     * <code>int32 limittype = 5;</code>
     */
    private $limittype = 0;

    public function __construct() {
        \GPBMetadata\Apiratelimit::initOnce();
        parent::__construct();
    }

    /**
     * <code>string keyid = 1;</code>
     */
    public function getKeyid()
    {
        return $this->keyid;
    }

    /**
     * <code>string keyid = 1;</code>
     */
    public function setKeyid($var)
    {
        GPBUtil::checkString($var, True);
        $this->keyid = $var;
    }

    /**
     * <code>int32 keytype = 2;</code>
     */
    public function getKeytype()
    {
        return $this->keytype;
    }

    /**
     * <code>int32 keytype = 2;</code>
     */
    public function setKeytype($var)
    {
        GPBUtil::checkInt32($var);
        $this->keytype = $var;
    }

    /**
     * <code>string url = 3;</code>
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * <code>string url = 3;</code>
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;
    }

    /**
     * <code>int64 limit = 4;</code>
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * <code>int64 limit = 4;</code>
     */
    public function setLimit($var)
    {
        GPBUtil::checkInt64($var);
        $this->limit = $var;
    }

    /**
     * <code>int32 limittype = 5;</code>
     */
    public function getLimittype()
    {
        return $this->limittype;
    }

    /**
     * <code>int32 limittype = 5;</code>
     */
    public function setLimittype($var)
    {
        GPBUtil::checkInt32($var);
        $this->limittype = $var;
    }

}

