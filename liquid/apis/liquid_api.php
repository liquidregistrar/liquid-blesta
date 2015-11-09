<?php
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . "liquid_response.php";

/**
 * Liquid API processor
 *
 * Documentation on the Liquid API
 *
 * @copyright Copyright (c) 2013, Phillips Data, Inc.
 * @license http://opensource.org/licenses/mit-license.php MIT License
 * @package liquid
 */
class LiquidApi {

	const SANDBOX_URL = "https://api.domainsas.com/";
	const LIVE_URL = "https://api.liqu.id/";
	const RESPONSE_FORMAT = "json";

	/**
	 * @var string The reseller ID to connect as
	 */
	private $reseller_id;
	/**
	 * @var string The key to use when connecting
	 */
	private $key;
	/**
	 * @var boolean Whether or not to process in sandbox mode (for testing)
	 */
	private $sandbox;
	/**
	 * @var array An array representing the last request made
	 */
	private $last_request = array('url' => null, 'args' => null);

        /**
         * @var string versi api
         */
        private $api_version = "v1";

	/**
	 * Sets the connection details
	 *
	 * @param string $reseller_id The reseller ID to connect as
	 * @param string $key The key to use when connecting
	 * @param boolean $sandbox Whether or not to process in sandbox mode (for testing)
	 */
	public function __construct($reseller_id, $key, $sandbox = false) {
		$this->reseller_id = $reseller_id;
		$this->key = $key;
		$this->sandbox = $sandbox;
	}

	/**
	 * Submits a request to the API
	 *
	 * @param string $command The command to submit (e.g. domains/available)
	 * @param array $args An array of key/value pair arguments to submit to the given API command
	 * @param string $method The request method (GET, POST, PUT, DELETE, etc.)
	 * @return LiquidResponse The response object
	 */
	public function submit($command, array $args = array(), $method = "POST") {

                $url = self::LIVE_URL . $this->api_version . "/" ;
		if ($this->sandbox)
			$url = self::SANDBOX_URL. $this->api_version . "/" ;

		$url .= $command;

		$user = $this->reseller_id;
		$pass = $this->key;

		$this->last_request = array(
			'url' => $url,
			'args' => $args
		);

                $request_url = $url;
                if ($method == "GET") {
                    $request_url = $url. "?" . $this->buildQuery($args);
                }

                if (($ch = curl_init($request_url)) === false) {
                    throw new LiquidRegistrarApiException("PHP extension curl must be loaded.");
                }

                curl_setopt($ch, CURLOPT_HEADER, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                // kalau ke sandbox di false, kalau ke live di true
		if ($this->sandbox) {
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
                } else {
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true);
                }
                $method = strtolower($method);
                switch ($method) {
                    case 'get':
//			curl_setopt($ch, CURLOPT_URL, $url . "?" . $this->buildQuery($args));
                        curl_setopt($ch, CURLOPT_HTTPGET, 1);
                        break;
                    case 'post':
//			curl_setopt($ch, CURLOPT_URL, $url);
                        curl_setopt($ch, CURLOPT_POST, true);
                        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($args));
                        break;
                    case 'put':
//			curl_setopt($ch, CURLOPT_URL, $url);
                        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
                        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($args));
                        break;
                    case 'delete':
//			curl_setopt($ch, CURLOPT_URL, $url);
                        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
                        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($args));
                        break;
                }

                curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
                curl_setopt($ch, CURLOPT_USERPWD, "$user:$pass");

		$response = curl_exec($ch);
                $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
                $header      = substr($response, 0, $header_size);
                $body        = substr($response, $header_size);
                $code        = curl_getinfo($ch, CURLINFO_HTTP_CODE);

                # langsung cek respon
                if (!$response) {
                    $emp["type"] = "";
                    $emp["code"] = "";
                    $emp["message"] = "Unable to request data from liquid server";
                    $response = json_encode($emp);
                }

                if (strpos($header, "404 Not Found")) {
                    $emp["type"] = "";
                    $emp["header"] = $header;
                    $emp["code"] = $code;
                    $emp["message"] = "Unable to request data from liquid server, Maybe URL is not valid";
                    $response = json_encode($emp);
                }

		curl_close($ch);
		return new LiquidResponse($body);
	}

	/**
	 * Returns the details of the last request made
	 *
	 * @return array An array containg:
	 * 	- url The URL of the last request
	 * 	- args The paramters passed to the URL
	 */
	public function lastRequest() {
		return $this->last_request;
	}

	/**
	 * Loads a command class
	 *
	 * @param string $command The command class filename to load
	 */
	public function loadCommand($command) {
		require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . "commands" . DIRECTORY_SEPARATOR . $command . ".php";
	}

	/**
	 * Implementation of http_build_query() that treats numerical arrays as duplicate key values
	 *
	 * @param array An array of data
	 * @return string A string of parameters encoded per RFC 3986
	 */
	private function buildQuery(array $args) {
		$query = array();
		foreach ($args as $key => $value) {
			if (is_array($value)) {
				foreach ($value as $subkey => $subvalue) {
					if (is_numeric($subkey))
						$query[] = rawurlencode($key) . "=" . rawurlencode($subvalue);
					else
						$query[] = rawurlencode($key . "[" . $subkey . "]") . "=" . rawurlencode($subvalue);
				}
			}
			else
				$query[] = rawurlencode($key) . "=" . rawurlencode($value);
		}
		return implode("&", $query);
	}
}
?>