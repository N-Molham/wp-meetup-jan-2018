<?php

// Plugin/Theme naming prefix
// name slug or prefix, 
// slug: WooCmmerce => woocmmerce
// prefix: Measurement Price Calculator => mpc

// plugin version
$my_plugin_version = '1.0.2';
$wocommerce_version = '1.0.2';
$mpc_version = '1.0.2';

functin my_plugin_get_options() {
	// get plugin options
}

class My_Plugin_Options {

	public function __consruct() {
		// entry point
	}

	/**
	 * @var string
	 */
	protected $my_plugin_version = '1.0.2';

	/**
	 * @return array
	 */
	public functin get_options() {
		// get plugin options
	}

}

$GLOBALS['my_pluign_options'] = new My_Plugin_Options();