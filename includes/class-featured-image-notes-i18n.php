<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://www.drewrawitz.com
 * @since      1.0.0
 *
 * @package    Featured_Image_Notes
 * @subpackage Featured_Image_Notes/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Featured_Image_Notes
 * @subpackage Featured_Image_Notes/includes
 * @author     Drew Rawitz <email@drewrawitz.com>
 */
class Featured_Image_Notes_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'featured-image-notes',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
