<?php
/**
 * Liquid Customer Management
 *
 * @copyright Copyright (c) 2013, Phillips Data, Inc.
 * @license http://opensource.org/licenses/mit-license.php MIT License
 * @package liquid.commands
 */
class LiquidCustomers {

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
         * Creates a Customer Account using the details provided.
         *
         * @param array $vars An array of input params including:
         * 	- username Username for the Customer Account. Username should be an email address.
         * 	- passwd Password for the Customer Account. Password should be alphanumeric with a minimum of 8 and maximum of 16 characters.
         * 	- name Name of the Customer
         * 	- company Name of the Customer's company
         * 	- address-line-1 Address line 1 of the Customer's address
         * 	- city City
         * 	- state State. In case the State information is not available, you need to pass the value for this parameter as Not Applicable.
         * 	- other-state This parameter needs to be included if the State information is not available.
         * 	- country Country Code as per ISO 3166-1 alpha-2
         * 	- zipcode ZIP code
         * 	- phone-cc Telephone number country code
         * 	- phone Phone number
         * 	- lang-pref Language Code as per ISO
         * 	- address-line-2 Second line of address of the contact
         * 	- address-line-3 Third line of address of the contact
         * 	- alt-phone-cc Alternate phone country code
         * 	- alt-phone Alternate phone number
         * 	- fax-cc Fax number country code
         * 	- fax Fax number
         * 	- mobile-cc Mobile country code
         * 	- mobile Mobile number
         * @return LiquidResponse
         */
        public function signup(array $vars) {
                return $this->api->submit("customers", $vars, "POST");
        }

        /**
         * Modifies the Account details of the specified Customer.
         *
         * @param array $vars An array of input params including:
         * 	- customer-id Customer Id of the Customer whose details need to be modified
         * 	- username Username for the Customer Account. Username should be an email address.
         * 	- name Name of the Customer
         * 	- company Name of the Customer's company
         * 	- address-line-1 Address line 1 of the Customer's address
         * 	- city City
         * 	- state State. In case the State information is not available, you need to pass the value for this parameter as Not Applicable.
         * 	- other-state This parameter needs to be included if the State information is not available.
         * 	- country Country Code as per ISO 3166-1 alpha-2
         * 	- zipcode ZIP code
         * 	- phone-cc Telephone number country code
         * 	- phone Phone number
         * 	- lang-pref Language Code as per ISO
         * 	- address-line-2 Second line of address of the contact
         * 	- address-line-3 Third line of address of the contact
         * 	- alt-phone-cc Alternate phone country code
         * 	- alt-phone Alternate phone number
         * 	- fax-cc Fax number country code
         * 	- fax Fax number
         * 	- mobile-cc Mobile country code
         * 	- mobile Mobile number
         * @return LiquidResponse
         */
        public function modify(array $vars) {
                return $this->api->submit("customers", $vars, "PUT");
        }

        /**
         * Gets the Customer details for the specified Customer Username.
         *
         * @param array $vars An array of input params including:
         * 	- username Username of the Customer
         * @return LiquidResponse
         */
        public function details(array $vars) {
                return $this->api->submit("customers", $vars, "GET");
        }

        /**
         * Gets the Customer details for the specified Customer Id.
         *
         * @param array $vars An array of input params including:
         * 	- customer-id Customer Id of the Customer
         * @return LiquidResponse
         */
        public function detailsById(array $vars) {
                return $this->api->submit("customers/".$vars["customer-id"], $vars, "GET");
        }

        /**
         * Authenticates a Customer by returning an authentication token on successful authentication.
         *
         * @param array $vars An array of input params including:
         * 	- username Username of the Customer
         * 	- passwd Password of the Customer
         * 	- ip IP address of the Customer
         * @return LiquidResponse
         */
        public function generateToken(array $vars) {
                return $this->api->submit("customers/generate-token", $vars, "GET");
        }

        /**
         * Authenticates the token generated by the Generate Token method and returns the Customer details, if authenticated.
         *
         * @param array $vars An array of input params including:
         * 	- token Authentication Token.
         * @return LiquidResponse
         */
        public function authenticateToken(array $vars) {
                return $this->api->submit("customers/authenticate-token", $vars, "GET");
        }

        /**
         * Changes the password for the specified Customer.
         *
         * @param array $vars An array of input params including:
         * 	- customer-id Customer Id of the Customer whose password needs to be changed
         * 	- new-passwd New password
         * @return LiquidResponse
         */
        public function changePassword(array $vars) {
                return $this->api->submit("customers/changePassword", $vars);
        }

        /**
         * Generates a temporary password for the specified Customer. The generated password is valid only for 3 days.
         *
         * @param array $vars An array of input params including:
         * 	- no-of-records Number of records to be fetched. This should be a value between 10 to 500.
         * 	- page-no Page number for which details are to be fetched
         * 	- customer-id Customer Id(s)
         * 	- reseller-id Reseller Id of sub-reseller(s) for whom Customer accounts need to be searched
         * 	- username Username of Customer. Username should be an email address.
         * 	- name Name of Customer
         * 	- company Company name of Customer
         * 	- city City
         * 	- state State
         * 	- status Status of Customer. Values can be Active, Suspended and Deleted.
         * 	- creation-date-start UNIX TimeStamp for listing of Customer accounts whose Creation Date is greater than creation-date-start
         * 	- creation-date-end UNIX TimeStamp for listing of Customer accounts whose Creation Date is less than creation-date-end
         * 	- total-receipt-start Total receipts of Customer which is greater than total-receipt-start
         * 	- total-receipt-end Total receipts of Customer which is less than total-receipt-end
         * @return LiquidResponse
         */
        public function tempPassword(array $vars) {
                return $this->api->submit("customers/temp_password", $vars, "GET");
        }

        /**
         * Gets details of the Customers that match the Search criteria.
         *
         * @param array $vars An array of input params including:
         * 	- customer-id Customer Id of the Customer for whom a temporary password needs to be generated
         * @return LiquidResponse
         */
        public function search(array $vars) {
                return $this->api->submit("customers", $vars, "GET");
        }

        /**
         * Deletes the specified Customer, if the Customer does not have any Active Order(s).
         *
         * @param array $vars An array of input params including:
         * 	- customer-id Customer Id of the Customer that you want to delete
         * @return LiquidResponse
         */
        public function delete(array $vars) {
                return $this->api->submit("customers/".$vars["customer-id"], $vars, "DELETE");
        }
}
?>