<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://hayatikodla.net/hasan-yuksektepe-kimdir/
 * @since             1.0.0
 * @package           Right_Click_Menu_Hayatikodla
 *
 * @wordpress-plugin
 * Plugin Name:       Right Click Menu (Hayatı Kodla)
 * Plugin URI:        https://hayatikodla.net
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Hasan Yüksektepe
 * Author URI:        https://hayatikodla.net/hasan-yuksektepe-kimdir/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       right-click-menu-hayatikodla
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
define( 'RIGHT_CLICK_MENU_HAYATIKODLA_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-right-click-menu-hayatikodla-activator.php
 */
function activate_right_click_menu_hayatikodla() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-right-click-menu-hayatikodla-activator.php';
	Right_Click_Menu_Hayatikodla_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-right-click-menu-hayatikodla-deactivator.php
 */
function deactivate_right_click_menu_hayatikodla() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-right-click-menu-hayatikodla-deactivator.php';
	Right_Click_Menu_Hayatikodla_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_right_click_menu_hayatikodla' );
register_deactivation_hook( __FILE__, 'deactivate_right_click_menu_hayatikodla' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-right-click-menu-hayatikodla.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_right_click_menu_hayatikodla() {

	$plugin = new Right_Click_Menu_Hayatikodla();
	$plugin->run();

}
run_right_click_menu_hayatikodla();
