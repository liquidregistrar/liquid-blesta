<?php
/**
 * Liquid Domain .XXX Management
 *
 * @copyright Copyright (c) 2013, Phillips Data, Inc.
 * @license http://opensource.org/licenses/mit-license.php MIT License
 * @package liquid.commands
 */
class LiquidDomainsDotxxx {
	
	/**
	 * @var LiquidApi
	 */
	private $api;
	
	/**
	 * Sets the API to use for communication
	 *
	 * @param LiquidApi $api The API to use for communication
	 */
	public function __construct(LiquidApi $api) {
		$this->api = $api;
	}
	
	/**
	 * Allows associating/dissociating the Membership Token/ID provided by the .XXX Registry, to a Domain Registration Order.
	 *
	 * @param array $vars An array of input params including:
	 * 	- order-id Order Id of the .XXX Domain Registration Order, to which you want to associate/dissociate a Membership Token/ID.
	 * 	- association-id A Membership Token/ID allocated by the .XXX Registry needs to be associated with the domain name, only if the Registrant wants it to resolve.
	 * @return LiquidResponse
	 */
	public function associationDetails(array $vars) {
		return $this->api->submit("domains/dotxxx/association-details", $vars);
	}
}
?>