<?php

/**
 * Liquid Order Management
 *
 * @copyright Copyright (c) 2013, Phillips Data, Inc.
 * @license http://opensource.org/licenses/mit-license.php MIT License
 * @package liquid.commands
 */
class LiquidOrders {

    /**
     * @var LiquidApi
     */
    private $api;

    /**
     * Sets the API to use for communication
     *
     * @param LiquidApi $api The API to use for communication
     */
    public function __construct (LiquidApi $api)
    {
        $this->api = $api;
    }

    /**
     * Applies the Suspension on the specified Order.
     *
     * @param array $vars An array of input params including:
     * 	- order-id Order Id of the Order on which the Suspension is to be applied
     * 	- reason The reason for the suspension.
     * @return LiquidResponse
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
     * @return LiquidResponse
     */
    public function unsuspend (array $vars)
    {
        return $this->api->submit("orders/" . $vars["order-id"] . "/suspend", $vars, "DELETE");
    }

}
