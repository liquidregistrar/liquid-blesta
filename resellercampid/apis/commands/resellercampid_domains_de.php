<?php

/**
 * Resellercampid Domain DE Management
 *
 * @copyright Copyright (c) 2013, Phillips Data, Inc.
 * @license http://opensource.org/licenses/mit-license.php MIT License
 * @package resellercampid.commands
 */
class ResellercampidDomainsDe {

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
     * Recheck zone configuration with .DE Registry of the expired .DE Domain Registration order.
     *
     * @param array $vars An array of input params including:
     * 	- order-id Order Id of the .DE Domain Registration Order whose zone configuration needs to be rechecked.
     * @return ResellercampidResponse
     */
    public function recheckNs (array $vars)
    {
        return $this->api->submit("domains/de/recheck-ns", $vars);
    }

}
