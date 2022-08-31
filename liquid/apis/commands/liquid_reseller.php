<?php
/**
 * Liquid Reseller Management
 *
 * @copyright Copyright (c) 2022, Phillips Data, Inc.
 * @license http://opensource.org/licenses/mit-license.php MIT License
 * @package liquid.commands
 */
class LiquidReseller
{
    /**
     * @var LiquidApi
     */
    private $api;

    /**
     * Sets the API to use for communication
     *
     * @param LiquidApi $api The API to use for communication
     */
    public function __construct(LiquidApi $api)
    {
        $this->api = $api;
    }

    /**
     * Returns Reseller-specific details such as Branding, Personal Details, etc..
     *
     * @param array $vars An array of input params including:
     *  - reseller-id Reseller ID of the Reseller to be retrieved.
     * @return LiquidResponse
     */
    public function details($reseller_id)
    {
        return $this->api->submit('resellers/' . $reseller_id, [], 'GET');
    }
}
