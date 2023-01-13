<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           Plugin_Name
 *
 * @wordpress-plugin
 * Plugin Name:       WordPress Plugin Boilerplate
 * Plugin URI:        http://example.com/plugin-name-uri/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Your Name or Your Company
 * Author URI:        http://example.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       plugin-name
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
define( 'UPREFIX_VERSION', '1.0.0' );

/**
 * Define plugin path and plugin url.
 */
define( 'UPREFIX_PATH', plugin_dir_path( __FILE__ ) );
define( 'UPREFIX_URL', plugin_dir_url( __FILE__ ) );
define( 'UPREFIX_ASSETS_URL', plugin_dir_url( __FILE__ ) . 'assets/' );
define( 'UPREFIX_ASSETS_VERSION', time() );

/**
 * The code that runs during plugin activation.
 */
function uprefix_activate() {
	
}

/**
 * The code that runs during plugin deactivation.
 */
function uprefix_deactivate() {
	
}

register_activation_hook( __FILE__, 'uprefix_activate' );
register_deactivation_hook( __FILE__, 'uprefix_deactivate' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-plugin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function uprefix_run() {

	$plugin = new Uprefix_Plugin();

}
uprefix_run();
