<?php
/**
 * Liquid DNS Management
 *
 * @copyright Copyright (c) 2013, Phillips Data, Inc.
 * @license http://opensource.org/licenses/mit-license.php MIT License
 * @package liquid.commands
 */
class LiquidDnsManage {

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
         * returve semua data dns
         * @param array $vars (fields, domain_id)
	 * @return LiquidResponse
         */
        public function retrieve(array $vars)
        {
            $vars["fields"] = "dns";
            return $this->api->submit("domains/" . $vars["domain_id"], $vars, "GET");
        }

	/**
	 * Adds an IPv4 Address (A) record.
	 *
	 * @param array $vars An array of input params including:
	 * 	- domain-name Domain name for which you want to add the A record
	 * 	- value An IPv4 address
	 * 	- host The host for which you need to add the A record. By default, IP address gets added for the domain name.
	 * 	- ttl Number of seconds the record needs to be cached by the DNS Resolvers. Default value is 14400.
	 * @return LiquidResponse
	 */
	public function addIpv4Record(array $vars) {
            if (!empty($vars["order-id"])) {
                $vars["domain_id"] = $vars["order-id"];
            }
            return $this->api->submit("domains/$vars[domain_id]/dns/ip", $vars, "POST");
	}

	/**
	 * Adds an IPv6 Address (AAAA) record.
	 *
	 * @param array $vars An array of input params including:
	 * 	- domain-name Domain name for which you want to add the AAAA record
	 * 	- value An IPv6 address
	 * 	- host The host for which you need to add the AAAA record. By default, IP address gets added for the domain name.
	 * 	- ttl Number of seconds the record needs to be cached by the DNS Resolvers. Default value is 14400.
	 * @return LiquidResponse
	 */
	public function addIpv6Record(array $vars) {
            if (!empty($vars["order-id"])) {
                $vars["domain_id"] = $vars["order-id"];
            }
            return $this->api->submit("domains/$vars[domain_id]/dns/ipv6", $vars, "POST");
	}

	/**
	 * Adds a Canonical (CNAME) record.
	 *
	 * @param array $vars An array of input params including:
	 * 	- domain-name Domain name for which you want to add the CNAME record
	 * 	- value A Fully Qualified Domain Name (FQDN) as the destination
	 * 	- host The host part of the domain-name for which you need to add a CNAME
	 * 	- ttl Number of seconds the record needs to be cached by the DNS Resolvers. Default value is 14400.
	 * @return LiquidResponse
	 */
	public function addCnameRecord(array $vars) {
            if (!empty($vars["order-id"])) {
                $vars["domain_id"] = $vars["order-id"];
            }
            return $this->api->submit("domains/$vars[domain_id]/dns/cname", $vars, "POST");
	}

	/**
	 * Adds a Mail Exchanger (MX) record.
	 *
	 * @param array $vars An array of input params including:
	 * 	- domain-name Domain name for which you want to add the MX record
	 * 	- value A Fully Qualified Domain Name (FQDN) as the destination
	 * 	- host The host part of the domain-name for which you need to add an MX. By default, MX record gets added for the domain name.
	 * 	- ttl Number of seconds the record needs to be cached by the DNS Resolvers. Default value is 14400.
	 * 	- priority The Priority of the MX record
	 * @return LiquidResponse
	 */
	public function addMxRecord(array $vars) {
            if (!empty($vars["order-id"])) {
                $vars["domain_id"] = $vars["order-id"];
            }
            return $this->api->submit("domains/$vars[domain_id]/dns/mx", $vars, "POST");
	}

	/**
	 * Adds a Name Server (NS) record.
	 *
	 * @param array $vars An array of input params including:
	 * 	- domain-name Domain name for which you want to add the NS record
	 * 	- value A Fully Qualified Domain Name (FQDN) as the authoritative Name Server
	 * 	- host The host part of the domain-name for which you need to add an NS record. By default, NS record gets added for the domain name.
	 * 	- ttl Number of seconds the record needs to be cached by the DNS Resolvers. Default value is 14400.
	 * @return LiquidResponse
	 */
	public function addNsRecord(array $vars) {
            if (!empty($vars["order-id"])) {
                $vars["domain_id"] = $vars["order-id"];
            }
            return $this->api->submit("domains/$vars[domain_id]/dns/ns", $vars, "POST");
	}

	/**
	 * Adds a Text (TXT) record.
	 *
	 * @param array $vars An array of input params including:
	 * 	- domain-name Domain name for which you want to add the TXT record
	 * 	- value Any text through which you wish to convey information about the zone
	 * 	- host The host part of the domain-name for which you need to add a TXT record
	 * 	- ttl Number of seconds the record needs to be cached by the DNS Resolvers. Default value is 14400.
	 * @return LiquidResponse
	 */
	public function addTxtRecord(array $vars) {
            if (!empty($vars["order-id"])) {
                $vars["domain_id"] = $vars["order-id"];
            }
            return $this->api->submit("domains/$vars[domain_id]/dns/txt", $vars, "POST");
	}

	/**
	 * Adds a Service (SRV) record.
	 *
	 * @param array $vars An array of input params including:
	 * 	- domain-name Domain name for which you want to add the SRV record
	 * 	- value The hostname of the machine providing the service
	 * 	- host A fully qualified Service name consisting of: _< service-name >._< protocol >.domain-name.com
	 * 	- ttl Number of seconds the record needs to be cached by the DNS Resolvers. Default value is 14400.
	 * 	- priority The Priority of the host. Value ranges from 0 to 65535.
	 * 	- port The port number of the service
	 * 	- weight A relative weight for records with the same priority
	 * @return LiquidResponse
	 */
	public function addSrvRecord(array $vars) {
            if (!empty($vars["order-id"])) {
                $vars["domain_id"] = $vars["order-id"];
            }
            return $this->api->submit("domains/$vars[domain_id]/dns/srv", $vars, "POST");
	}

	/**
	 * Modifies an IPv4 Address (A) record.
	 *
	 * @param array $vars An array of input params including:
	 * 	- domain-name Domain name for which you want to modify the A record
	 * 	- host The host for which you need to modify the A record
	 * 	- current-value Current IPv4 address
	 * 	- new-value New IPv4 address
	 * 	- ttl Number of seconds the record needs to be cached by the DNS Resolvers. Default value is 14400.
	 * @return LiquidResponse
	 */
	public function updateIpv4Record(array $vars) {
            if (!empty($vars["order-id"])) {
                $vars["domain_id"] = $vars["order-id"];
            }
            return $this->api->submit("domains/$vars[domain_id]/dns/ip/".$vars["old_hostname"]."/".$vars["old_value"], $vars, "PUT");
	}

	/**
	 * Modifies an IPv6 (AAAA) record.
	 *
	 * @param array $vars An array of input params including:
	 * 	- domain-name Domain name for which you want to modify the AAAA record
	 * 	- host The host for which you need to modify the AAAA record
	 * 	- current-value Current IPv6 address
	 * 	- new-value New IPv6 address
	 * 	- ttl Number of seconds the record needs to be cached by the DNS Resolvers. Default value is 14400.
	 * @return LiquidResponse
	 */
	public function updateIpv6Record(array $vars) {
            if (!empty($vars["order-id"])) {
                $vars["domain_id"] = $vars["order-id"];
            }
            return $this->api->submit("domains/$vars[domain_id]/dns/ipv6/".$vars["old_hostname"]."/".$vars["old_value"], $vars, "PUT");
	}

	/**
	 * Modifies a Canonical (CNAME) record.
	 *
	 * @param array $vars An array of input params including:
	 * 	- domain-name Domain name for which you want to modify the CNAME record
	 * 	- host The host part of the domain-name for which you need to modify a CNAME
	 * 	- current-value Current CNAME value
	 * 	- new-value New CNAME value
	 * 	- ttl Number of seconds the record needs to be cached by the DNS Resolvers. Default value is 14400.
	 * @return LiquidResponse
	 */
	public function updateCnameRecord(array $vars) {
            if (!empty($vars["order-id"])) {
                $vars["domain_id"] = $vars["order-id"];
            }
            return $this->api->submit("domains/$vars[domain_id]/dns/cname/".$vars["old_hostname"]."/".$vars["old_value"], $vars, "PUT");
	}

	/**
	 * Modifies a Mail Exchanger (MX) record.
	 *
	 * @param array $vars An array of input params including:
	 * 	- domain-name Domain name for which you want to modify the MX record
	 * 	- host The host part of the domain-name for which you need to modify an MX
	 * 	- current-value Current MX value
	 * 	- new-value New MX value
	 * 	- ttl Number of seconds the record needs to be cached by the DNS Resolvers. Default value is 14400.
	 * 	- priority The Priority of the MX record
	 * @return LiquidResponse
	 */
	public function updateMxRecord(array $vars) {
            if (!empty($vars["order-id"])) {
                $vars["domain_id"] = $vars["order-id"];
            }
            return $this->api->submit("domains/$vars[domain_id]/dns/mx/".$vars["old_hostname"]."/".$vars["old_value"], $vars, "PUT");
	}

	/**
	 * Modifies a Name Server (NS) record.
	 *
	 * @param array $vars An array of input params including:
	 * 	- domain-name Domain name for which you want to modify the NS record
	 * 	- host The host part of the domain-name for which you need to modify the NS record
	 * 	- current-value Current NS value
	 * 	- new-value New NS value
	 * 	- ttl Number of seconds the record needs to be cached by the DNS Resolvers. Default value is 14400.
	 * @return LiquidResponse
	 */
	public function updateNsRecord(array $vars) {
            if (!empty($vars["order-id"])) {
                $vars["domain_id"] = $vars["order-id"];
            }
            return $this->api->submit("domains/$vars[domain_id]/dns/ns/".$vars["old_hostname"]."/".$vars["old_value"], $vars, "PUT");
	}

	/**
	 * Modifies a Text (TXT) record.
	 *
	 * @param array $vars An array of input params including:
	 * 	- domain-name Domain name for which you want to modify the TXT record
	 * 	- host The host part of the domain-name for which you need to modify a TXT record
	 * 	- current-value Current TXTvalue
	 * 	- new-value New TXT value
	 * 	- ttl Number of seconds the record needs to be cached by the DNS Resolvers. Default value is 14400.
	 * @return LiquidResponse
	 */
	public function updateTxtRecord(array $vars) {
            if (!empty($vars["order-id"])) {
                $vars["domain_id"] = $vars["order-id"];
            }
            return $this->api->submit("domains/$vars[domain_id]/dns/txt/".$vars["old_hostname"]."/".$vars["old_value"], $vars, "PUT");
	}

	/**
	 * Modifies a Service (SRV) record.
	 *
	 * @param array $vars An array of input params including:
	 * 	- domain-name Domain name for which you want to modify the SRV record
	 * 	- host A fully qualified Service name consisting of: _< service-name >._< protocol >.domain-name.com
	 * 	- current-value Current hostname of the machine providing the service
	 * 	- new-value New hostname of the machine providing the service
	 * 	- ttl Number of seconds the record needs to be cached by the DNS Resolvers. Default value is 14400.
	 * 	- priority The Priority of the host. Value ranges from 0 to 65535.
	 * 	- port The Port number of the service
	 * 	- weight A relative weight for records with the same priority
	 * @return LiquidResponse
	 */
	public function updateSrvRecord(array $vars) {
            if (!empty($vars["order-id"])) {
                $vars["domain_id"] = $vars["order-id"];
            }
            return $this->api->submit("domains/$vars[domain_id]/dns/srv/".$vars["old_hostname"]."/".$vars["old_value"], $vars, "PUT");
	}

	/**
	 * Modifies a Start of Authority (SOA) record.
	 *
	 * @param array $vars An array of input params including:
	 * 	- domain-name Domain name for which you want to modify a SOA record
	 * 	- responsible-person The email address of the person responsible for maintenance of the Zone
	 * 	- refresh The number of seconds after which the Secondary DNS Server checks the Primary DNS Server to check if the Zone has changed. Value should not be less than 14400.
	 * 	- retry Number of seconds that should elapse before a failed refresh should be retried. Value should not be less than 14400.
	 * 	- expire Number of seconds that specifies the upper limit on the time interval that can elapse before the zone is no longer authoritative. Value should not be less than 14400.
	 * 	- ttl Number of seconds the record needs to be cached by the DNS Resolvers. Value should not be less than 14400.
	 * @return LiquidResponse
	 */
	public function updateSoaRecord(array $vars) {
		return $this->api->submit("domains/update-soa-record", $vars);
	}

	/**
	 * Searches records based on the specified criteria.
	 *
	 * @param array $vars An array of input params including:
	 * 	- domain-name The Domain name whose DNS record(s) you want to search
	 * 	- type Type of record. Values may be: A, MX, CNAME, TXT, NS, SRV, AAAA
	 * 	- no-of-records Number of Resource Records to be fetched
	 * 	- page-no Page number for which details are to be fetched
	 * 	- host Hostname of the record
	 * 	- value Value of the record
	 * @return LiquidResponse
	 */
//	public function searchRecords(array $vars) {
//		return $this->api->submit("domains/search-records", $vars);
//	}

	/**
	 * Deletes an IPv4 Address (A) record.
	 *
	 * @param array $vars An array of input params including:
	 * 	- domain-name Domain name for which you want to delete an IPv4 record
	 * 	- host Hostname of the record to be deleted
	 * 	- value An IPv4 address to be deleted
	 * @return LiquidResponse
	 */
	public function deleteIpv4Record(array $vars) {
            if (!empty($vars["order-id"])) {
                $vars["domain_id"] = $vars["order-id"];
            }
            return $this->api->submit("domains/$vars[domain_id]/dns/ip/".$vars["hostname"]."/".$vars["old-ip"], $vars, "DELETE");
	}

	/**
	 * Deletes an IPv6 Address (AAAA) record.
	 *
	 * @param array $vars An array of input params including:
	 * 	- domain-name Domain name for which you want to delete an IPv6 record
	 * 	- host Hostname of the record to be deleted
	 * 	- value An IPv6 address to be deleted
	 * @return LiquidResponse
	 */
	public function deleteIpv6Record(array $vars) {
            if (!empty($vars["order-id"])) {
                $vars["domain_id"] = $vars["order-id"];
            }
            return $this->api->submit("domains/$vars[domain_id]/dns/ipv6/".$vars["hostname"]."/".$vars["old-ip"], $vars, "DELETE");
	}

	/**
	 * Deletes a Canonical (CNAME) record.
	 *
	 * @param array $vars An array of input params including:
	 * 	- domain-name Domain name for which you want to delete a CNAME record
	 * 	- host Hostname of the record to be deleted
	 * 	- value A Fully Qualified Domain Name (FQDN)
	 * @return LiquidResponse
	 */
	public function deleteCnameRecord(array $vars) {
            if (!empty($vars["order-id"])) {
                $vars["domain_id"] = $vars["order-id"];
            }
            return $this->api->submit("domains/$vars[domain_id]/dns/cname/".$vars["hostname"]."/".$vars["old_value"], $vars, "DELETE");
	}

	/**
	 * Deletes a Mail Exchanger (MX) record.
	 *
	 * @param array $vars An array of input params including:
	 * 	- domain-name Domain name for which you want to delete a MX record
	 * 	- host Hostname of the record to be deleted
	 * 	- value A Fully Qualified Domain Name (FQDN)
	 * @return LiquidResponse
	 */
	public function deleteMxRecord(array $vars) {
            if (!empty($vars["order-id"])) {
                $vars["domain_id"] = $vars["order-id"];
            }
            return $this->api->submit("domains/$vars[domain_id]/dns/mx/".$vars["hostname"]."/".$vars["old_value"], $vars, "DELETE");
	}

	/**
	 * Deletes a Name Server (NS) record.
	 *
	 * @param array $vars An array of input params including:
	 * 	- domain-name Domain name for which you want to delete a NS record
	 * 	- host Hostname of the record to be deleted
	 * 	- value A Fully Qualified Domain Name (FQDN)
	 * @return LiquidResponse
	 */
	public function deleteNsRecord(array $vars) {
            if (!empty($vars["order-id"])) {
                $vars["domain_id"] = $vars["order-id"];
            }
            return $this->api->submit("domains/$vars[domain_id]/dns/ns/".$vars["hostname"]."/".$vars["value"], $vars, "DELETE");
	}

	/**
	 * Deletes a Text (TXT) record.
	 *
	 * @param array $vars An array of input params including:
	 * 	- domain-name Domain name for which you want to delete a TXT record
	 * 	- host Hostname of the record to be deleted
	 * 	- value A text value for which the record to be deleted
	 * @return LiquidResponse
	 */
	public function deleteTxtRecord(array $vars) {
            if (!empty($vars["order-id"])) {
                $vars["domain_id"] = $vars["order-id"];
            }
            return $this->api->submit("domains/$vars[domain_id]/dns/txt/".$vars["hostname"]."/".$vars["old_value"], $vars, "DELETE");
	}

	/**
	 * Deletes a Service (SRV) record.
	 *
	 * @param array $vars An array of input params including:
	 * 	- domain-name Domain name for which you want to delete a SRV record
	 * 	- host A fully qualified Service name consisting of: _< service-name >._< protocol >.domain-name.com
	 * 	- value The hostname of the machine providing the service
	 * 	- port The port number of the service
	 * 	- weight A relative weight for records with the same priority
	 * @return LiquidResponse
	 */
	public function deleteSrvRecord(array $vars) {
            if (!empty($vars["order-id"])) {
                $vars["domain_id"] = $vars["order-id"];
            }
            return $this->api->submit("domains/$vars[domain_id]/dns/srv/".$vars["hostname"]."/".$vars["value"], $vars, "DELETE");
	}
}
?>