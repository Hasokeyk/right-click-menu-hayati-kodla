<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://hayatikodla.net/hasan-yuksektepe-kimdir/
 * @since      1.0.0
 *
 * @package    Right_Click_Menu_Hayatikodla
 * @subpackage Right_Click_Menu_Hayatikodla/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Right_Click_Menu_Hayatikodla
 * @subpackage Right_Click_Menu_Hayatikodla/includes
 * @author     Hasan Yüksektepe <hasanhasokeyk@hotmail.com>
 */
class Right_Click_Menu_Hayatikodla_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'right-click-menu-hayatikodla',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
