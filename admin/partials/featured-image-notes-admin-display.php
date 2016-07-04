<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://www.drewrawitz.com
 * @since      1.0.0
 *
 * @package    Featured_Image_Notes
 * @subpackage Featured_Image_Notes/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="wrap">
  <h2><?php echo esc_html(get_admin_page_title()); ?></h2>
  <h3>Add New</h3>

  <form method="post" name="featured_image_notes" action="options.php">

  <?php
    //Grab all options
    $options = get_option($this->plugin_name);

    settings_fields($this->plugin_name);
    do_settings_sections($this->plugin_name);
  ?>

  <table class="fit-table widefat">
    <thead>
    <tr>
      <th class="row-post"><?php esc_attr_e( 'Post Type', 'wp_admin_style' ); ?></th>
      <th><?php esc_attr_e( 'Note', 'wp_admin_style' ); ?></th>
      <th>&nbsp;</th>
    </tr>
    </thead>
    <tbody>
      <?php
        $post_types = get_post_types(array(
          'public' => true
        ), 'objects');

        foreach($post_types as $post_type) :
          if(post_type_supports($post_type->name, 'thumbnail')) :
            $value = ($options && isset($options[$post_type->name])) ? $options[$post_type->name] : '';
        ?>
          <tr class="alternative">
            <td class="row-title"><?php echo $post_type->labels->singular_name; ?></td>
            <td><input type="text" value="<?php echo $value; ?>" name="<?php echo $this->plugin_name; ?>[<?php echo $post_type->name;?>_note]" class="fit-table__input" /></td>
          </tr>
          <?php
          endif;
        endforeach;
      ?>
    </tbody>
  </table>
  <?php submit_button('Save', 'primary','submit', TRUE); ?>
  </form>
  <div class="fit-note">Is your Post Type not listed? Make sure it has <a href="http://codex.wordpress.org/Post_Thumbnails" target="_blank">Post Thumbnails</a> support for your Theme.</a>
