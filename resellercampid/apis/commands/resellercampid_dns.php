<?php

/**
 * Resellercampid DNS Activation
 *
 * @copyright Copyright (c) 2013, Phillips Data, Inc.
 * @license http://opensource.org/licenses/mit-license.php MIT License
 * @package resellercampid.commands
 */
class ResellercampidDns {

    /**
     * @var ResellercampidApi
     */
    private $api;

    /**
     * Sets the API to use for communication
     *
     * @param ResellercampidApi $api The API to use for communication
     */
    public function __construct (ResellercampidApi $api)
    {
        $this->api = $api;
    }

    /**
     * Activates the DNS service
     *
     * @param array $vars An array of input params including:
     * 	- order-id Order Id of the Order for which the DNS service is to be activated
     * @return ResellercampidResponse
     */
    public function activate (array $vars)
    {
        return $this->api->submit("dns/activate", $vars);
    }

}
