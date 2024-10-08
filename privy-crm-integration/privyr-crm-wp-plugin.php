<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.privyr.com
 * @since             0.1.0
 * @package           Privyr_Crm
 *
 * @wordpress-plugin
 * Plugin Name:       Privyr CRM - Instant Lead Alerts for Contact Forms
 * Plugin URI:        https://wordpress.org/plugins/privyr-crm
 * Description:       Get instant new lead alerts on your phone and via email, combined with easy lead management and one-touch calls, WhatsApp, SMS, iMessage, and emails.
 * Version:           1.0.1
 * Author:            Privyr
 * Author URI:        https://www.privyr.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       privyr-crm
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 0.1.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PRIVYR_CRM_VERSION', '1.0.1' );
define( 'PRIVYR_CRM_PLUGIN_ID', 'privyr-crm' );

global $wpdb;

/**
 * This is where all configuration, constants and static value being stored 
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/class-privyr-crm-constants.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/class-privyr-crm-integration-status.php';

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-privyr-crm.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    0.1.0
 */
function run_privyr_crm() {

	$plugin = new Privyr_Crm();
	$plugin->run();

}
run_privyr_crm();
