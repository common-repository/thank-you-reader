<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://vishalparit.com/
 * @since             1.0.0
 * @package           Thank_You_Reader
 *
 * @wordpress-plugin
 * Plugin Name:       Thank you reader
 * Plugin URI:        https://thankyou.vishalparit.com/
 * Description:       Simple plugin to appreciate the reader or to say thank you.
 * Version:           1.0.0
 * Author:            Vishal Parit
 * Author URI:        https://vishalparit.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       thank-you-reader
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'THANK_YOU_READER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-thank-you-reader-activator.php
 */
function activate_thank_you_reader() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-thank-you-reader-activator.php';
	Thank_You_Reader_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-thank-you-reader-deactivator.php
 */
function deactivate_thank_you_reader() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-thank-you-reader-deactivator.php';
	Thank_You_Reader_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_thank_you_reader' );
register_deactivation_hook( __FILE__, 'deactivate_thank_you_reader' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-thank-you-reader.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_thank_you_reader() {

	$plugin = new Thank_You_Reader();
	$plugin->run();

}
run_thank_you_reader();
/** here is main code **/

add_action( 'the_content', 'thank_you_text' );

function thank_you_text ( $content ) {
    return $content .= '<p><b>Thank you for reading :) </b></p>';
}