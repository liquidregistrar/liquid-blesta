<?php
/**
 * Resellercampid Product Management
 *
 * @copyright Copyright (c) 2013, Phillips Data, Inc.
 * @license http://opensource.org/licenses/mit-license.php MIT License
 * @package resellercampid.commands
 */
class ResellercampidProducts
{
    /**
     * @var ResellercampidApi
     */
    private $api;

    /**
     * Sets the API to use for communication
     *
     * @param ResellercampidApi $api The API to use for communication
     */
    public function __construct(ResellercampidApi $api)
    {
        $this->api = $api;
    }

    /**
     * Gets a list of product mappings
     *
     * @return ResellercampidResponse
     */
    public function getMappings()
    {
        return $this->api->submit('tlds', [], 'GET');
    }

    /**
     * Gets a list of reseller product pricings
     *
     * @param array $vars An array of input params including:
     *  - reseller-id Reseller ID of the Reseller whose Cost Price has to be retrieved.
     *   By default, Cost Price of the current user will be retrieved.
     * @return ResellercampidResponse
     */
    public function getPricing()
    {
        return $this->api->submit('resellers/prices', [], 'GET');
    }
}
