<?php

/**
 * Resellercampid Order Management
 *
 * @copyright Copyright (c) 2013, Phillips Data, Inc.
 * @license http://opensource.org/licenses/mit-license.php MIT License
 * @package resellercampid.commands
 */
class ResellercampidOrders {

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
     * Applies the Suspension on the specified Order.
     *
     * @param array $vars An array of input params including:
     * 	- order-id Order Id of the Order on which the Suspension is to be applied
     * 	- reason The reason for the suspension.
     * @return ResellercampidResponse
     */
    public function suspend (array $vars)
    {
        return $this->api->submit("orders/" . $vars["order-id"] . "/suspend", $vars, "PUT");
    }

    /**
     * Removes the Suspension on the specified Order.
     *
     * @param array $vars An array of input params including:
     * 	- order-id Order Id of the Order for which the Suspension is to be removed
     * @return ResellercampidResponse
     */
    public function unsuspend (array $vars)
    {
        return $this->api->submit("orders/" . $vars["order-id"] . "/suspend", $vars, "DELETE");
    }

}
