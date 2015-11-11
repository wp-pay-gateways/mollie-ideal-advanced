<?php

class Pronamic_WP_Pay_Gateways_Mollie_IDealAdvanced_Integration {
	public function __construct() {
		$this->id            = 'mollie-ideal-advanced';
		$this->name          = 'Mollie - iDEAL Advanced';
		$this->dashboard_url = 'http://www.mollie.nl/';
		$this->provider      = 'mollie';
		$this->deprecated    = true;
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealAdvanced_ConfigFactory';
	}

	public function get_config_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealAdvanced_Config';
	}

	public function get_gateway_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealAdvanced_Gateway';
	}
}
