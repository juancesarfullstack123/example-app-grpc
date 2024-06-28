<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Services\Roles;

/**
 */
class RolesServicesClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Services\Roles\RequestCode $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function FindByRolesCode(\Services\Roles\RequestCode $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/services.roles.RolesServices/FindByRolesCode',
        $argument,
        ['\Services\Roles\ResRoles', 'decode'],
        $metadata, $options);
    }

}
