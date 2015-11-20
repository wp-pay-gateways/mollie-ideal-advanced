<?php

/**
 * Title: Mollie - iDEAL Advanced config
 * Description:
 * Copyright: Copyright (c) 2005 - 2015
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_Mollie_IDealAdvanced_Config extends Pronamic_WP_Pay_Gateways_IDealAdvanced_Config {
	public function get_payment_server_url() {
		return 'https://secure.mollie.nl/xml/idealAcquirer/';
	}
}
