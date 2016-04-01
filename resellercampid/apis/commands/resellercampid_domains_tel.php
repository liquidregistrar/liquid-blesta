<?php

/**
 * Resellercampid Domain TEL Management
 *
 * @copyright Copyright (c) 2013, Phillips Data, Inc.
 * @license http://opensource.org/licenses/mit-license.php MIT License
 * @package resellercampid.commands
 */
class ResellercampidDomainsTel {

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
     * Gets the CTH Login Details for the specified .TEL Domain Registration Order.
     *
     * @param array $vars An array of input params including:
     * 	- order-id Order Id of the .TEL Domain Registration Order.
     * @return ResellercampidResponse
     */
    public function cthDetails (array $vars)
    {
        return $this->api->submit("domains/tel/cth-details", $vars, "GET");
    }

    /**
     * Modifies the Whois Preference of the .TEL Domain Registration Order.
     *
     * @param array $vars An array of input params including:
     * 	- order-id Order Id of the Domain Registration Order for which you need to modify the Whois Preference.
     * 	- whois-type It can be either Natural or Legal
     * 	- publish Whether Whois details are to be published or not: Y/N. This parameter is required if whois-type parameter is Natural, otherwise is it Optional.
     * @return ResellercampidResponse
     */
    public function modifyWhoisPref (array $vars)
    {
        return $this->api->submit("domains/tel/modify-whois-pref", $vars);
    }

}
