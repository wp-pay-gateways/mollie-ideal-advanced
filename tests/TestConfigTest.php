<?php

/**
 * Title: Mollie - iDEAL Advanced - Config test test
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_Mollie_IDealAdvanced_TestConfigTest extends PHPUnit_Framework_TestCase {
	public function test_config() {
		$config = new Pronamic_WP_Pay_Gateways_Mollie_IDealAdvanced_TestConfig();

		$expected = 'https://secure.mollie.nl/xml/idealAcquirer/testmode/';

		$url = $config->get_payment_server_url();

		$this->assertEquals( $expected, $url );
	}
}
