<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Pb {

  class ApiratelimitServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Pb\CheckRateLimitRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CheckRateLimit(\Pb\CheckRateLimitRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/pb.ApiratelimitService/CheckRateLimit',
      $argument,
      ['\Pb\ResReply', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Pb\SetRateLimitRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetRateLimit(\Pb\SetRateLimitRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/pb.ApiratelimitService/SetRateLimit',
      $argument,
      ['\Pb\ResReply', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Pb\DelRateLimitRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DelRateLimit(\Pb\DelRateLimitRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/pb.ApiratelimitService/DelRateLimit',
      $argument,
      ['\Pb\ResReply', 'decode'],
      $metadata, $options);
    }

  }

}
