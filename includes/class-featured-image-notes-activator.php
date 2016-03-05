<?php

/**
 * Fired during plugin activation
 *
 * @link       http://www.drewrawitz.com
 * @since      1.0.0
 *
 * @package    Featured_Image_Notes
 * @subpackage Featured_Image_Notes/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Featured_Image_Notes
 * @subpackage Featured_Image_Notes/includes
 * @author     Drew Rawitz <email@drewrawitz.com>
 */
class Featured_Image_Notes_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
    add_option('featured-image-notes', '');
	}

}
