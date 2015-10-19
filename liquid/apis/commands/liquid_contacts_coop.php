<?php
/**
 * Liquid Contact COOP Management
 *
 * @copyright Copyright (c) 2013, Phillips Data, Inc.
 * @license http://opensource.org/licenses/mit-license.php MIT License
 * @package liquid.commands
 */
class LiquidContactsCoop {
	
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
	 * Adds a Sponsor (Co-operative Reference) for a specified Customer.
	 *
	 * @param array $vars An array of input params including:
	 * 	- name Name of the contact
	 * 	- company Name of the company
	 * 	- email Email address of the contact
	 * 	- address-line-1 First line of address of the contact
	 * 	- city Name of the City
	 * 	- country Country Code as per ISO 3166-1 alpha-2
	 * 	- zipcode ZIP code
	 * 	- phone-cc Telephone number country code
	 * 	- phone Telephone number
	 * 	- customer-id The Customer under whom your are creating the Sponsor
	 * 	- address-line-2 Second line of address of the contact
	 * 	- address-line-3 Third line of address of the contact
	 * 	- state Name of the state
	 * 	- fax-cc Fax number country code
	 * 	- fax Fax number
	 * @return LiquidResponse
	 */
	public function addSponsor(array $vars) {
		return $this->api->submit("contacts/coop/add-sponsor", $vars);
	}
}
?>