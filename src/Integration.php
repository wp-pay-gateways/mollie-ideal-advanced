<?php

class Pronamic_WP_Pay_Gateways_Mollie_IDealAdvanced_Integration extends Pronamic_WP_Pay_Gateways_IDealAdvanced_AbstractIntegration {
	public function __construct() {
		$this->id            = 'mollie-ideal-advanced';
		$this->name          = 'Mollie - iDEAL Advanced';
		$this->dashboard_url = 'http://www.mollie.nl/';
		$this->provider      = 'mollie';
		$this->deprecated    = true;
	}
}
