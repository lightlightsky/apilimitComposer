<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: apiratelimit.proto

namespace Pb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>pb.ResReply</code>
 */
class ResReply extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>bool res = 1;</code>
     */
    private $res = false;

    public function __construct() {
        \GPBMetadata\Apiratelimit::initOnce();
        parent::__construct();
    }

    /**
     * <code>bool res = 1;</code>
     */
    public function getRes()
    {
        return $this->res;
    }

    /**
     * <code>bool res = 1;</code>
     */
    public function setRes($var)
    {
        GPBUtil::checkBool($var);
        $this->res = $var;
    }

}

