<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Services\Users;

/**
 */
class UsersServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Services\Users\UserById $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function FindOne(\Services\Users\UserById $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/services.users.UsersService/FindOne',
        $argument,
        ['\Services\Users\RESUSERS', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Services\Users\QueryUsers $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Find(\Services\Users\QueryUsers $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/services.users.UsersService/Find',
        $argument,
        ['\Services\Users\Resdata', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Services\Users\RequestUsers $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateUser(\Services\Users\RequestUsers $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/services.users.UsersService/CreateUser',
        $argument,
        ['\Services\Users\InsertResult', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Services\Users\LoginRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Login(\Services\Users\LoginRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/services.users.UsersService/Login',
        $argument,
        ['\Services\Users\RESUSERS', 'decode'],
        $metadata, $options);
    }

}
