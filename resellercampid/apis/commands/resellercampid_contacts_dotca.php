<?php

/**
 * Resellercampid Contact CA Management
 *
 * @copyright Copyright (c) 2013, Phillips Data, Inc.
 * @license http://opensource.org/licenses/mit-license.php MIT License
 * @package resellercampid.commands
 */
class ResellercampidContactsDotca {

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
     * Gets the Registrant Agreement mandated by the Canadian Internet Registration Authority (CIRA).
     *
     * @return ResellercampidResponse
     */
    public function registrantagreement (array $vars)
    {
        return $this->api->submit("contacts/dotca/registrantagreement", $vars, "GET");
    }

}
