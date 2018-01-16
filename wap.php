<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              grmdgs.com
 * @since             1.0.0
 * @package           Wap
 *
 * @wordpress-plugin
 * Plugin Name:       Warn about privacy
 * Plugin URI:        https://www.gnu.org/licenses/gpl-2.0.html
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Graham Douglas
 * Author URI:        grmdgs.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wap
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently pligin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WAP_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wap-activator.php
 */
function activate_wap() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wap-activator.php';
	Wap_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wap-deactivator.php
 */
function deactivate_wap() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wap-deactivator.php';
	Wap_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wap' );
register_deactivation_hook( __FILE__, 'deactivate_wap' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wap.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wap() {

	$plugin = new Wap();
	$plugin->run();

}
run_wap();
