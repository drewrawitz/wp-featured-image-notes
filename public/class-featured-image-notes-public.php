<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://www.drewrawitz.com
 * @since      1.0.2
 *
 * @package    Featured_Image_Notes
 * @subpackage Featured_Image_Notes/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Featured_Image_Notes
 * @subpackage Featured_Image_Notes/public
 * @author     Drew Rawitz <email@drewrawitz.com>
 */
class Featured_Image_Notes_Public {

  /**
   * The ID of this plugin.
   *
   * @since    1.0.0
   * @access   private
   * @var      string    $plugin_name    The ID of this plugin.
   */
  private $plugin_name;

  /**
   * The version of this plugin.
   *
   * @since    1.0.0
   * @access   private
   * @var      string    $version    The current version of this plugin.
   */
  private $version;

  /**
   * Initialize the class and set its properties.
   *
   * @since    1.0.0
   * @param      string    $plugin_name       The name of the plugin.
   * @param      string    $version    The version of this plugin.
   */
  public function __construct( $plugin_name, $version ) {

    $this->plugin_name = $plugin_name;
    $this->version = $version;

  }

  /**
   * Register the hooks
   *
   * @since    1.0.2
   */
  public function add_hooks() {
    add_filter('admin_post_thumbnail_html', 'featured_image_notes');

    function featured_image_notes($content) {
      global $post;
      $data = null;
      $options = get_option('featured-image-notes');

      if($options && isset($options[$post->post_type]) && $options[$post->post_type]) {
        $data .= "<p style=\"font-size: 12px;\"><strong>Note:</strong> ".$options[$post->post_type]."</p>";
      }

      $data .= $content;

      return $data;
    }
  }
}

