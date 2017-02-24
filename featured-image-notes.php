<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Featured Image Notes
 * Plugin URI:        http://www.drewrawitz.com
 * Description:       This plugin allows you to add notes to the Featured Image box for certain posts / pages
 * Version:           1.0.2
 * Author:            Drew Rawitz
 * Author URI:        http://www.drewrawitz.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       featured-image-notes
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-featured-image-notes-activator.php
 */
function activate_featured_image_notes() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-featured-image-notes-activator.php';
	Featured_Image_Notes_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-featured-image-notes-deactivator.php
 */
function deactivate_featured_image_notes() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-featured-image-notes-deactivator.php';
	Featured_Image_Notes_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_featured_image_notes' );
register_deactivation_hook( __FILE__, 'deactivate_featured_image_notes' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-featured-image-notes.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_featured_image_notes() {

	$plugin = new Featured_Image_Notes();
	$plugin->run();

}
run_featured_image_notes();
