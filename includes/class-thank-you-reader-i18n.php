<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://vishalparit.com/
 * @since      1.0.0
 *
 * @package    Thank_You_Reader
 * @subpackage Thank_You_Reader/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Thank_You_Reader
 * @subpackage Thank_You_Reader/includes
 * @author     Vishal Parit <vishalparit10@gmail.com>
 */
class Thank_You_Reader_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'thank-you-reader',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
