<?php
/*
Plugin Name: 6.05 - Settings Sub Pages
Plugin URI: https://github.com/zgordon/wp-dev-course
Description: Demo plugin for learning about plugin settings pages.
Version: 1.0.0
Contributors: zgordon
Author: Zac Gordon
Author URI: https://zacgordon.com
License: GPLv2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wpplugin
Domain Path:  /languages
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
  die;
}

function wpplugin_settings_pages()
{

  add_menu_page(
    __( 'Plugin Name', 'wpplugin' ),
    __( 'Plugin Menu', 'wpplugin' ),
    'manage_options',
    'wpplugin',
    'wpplugin_settings_page_markup',
    'dashicons-wordpress-alt',
    100
  );

  add_submenu_page(
    'wpplugin',
    __( 'Plugin Feature 1', 'wpplugin' ),
    __( 'Feature 1', 'wpplugin' ),
    'manage_options',
    'wpplugin-feature-1',
    'wpplugin_settings_subpage_markup'
  );

  add_submenu_page(
    'wpplugin',
    __( 'Plugin Feature 2', 'wpplugin' ),
    __( 'Feature 2', 'wpplugin' ),
    'manage_options',
    'wpplugin-feature-2',
    'wpplugin_settings_subpage_markup'
  );

}
add_action( 'admin_menu', 'wpplugin_settings_pages' );


function wpplugin_settings_page_markup()
{
  // Double check user capabilities
  if ( !current_user_can('manage_options') ) {
      return;
  }
  ?>
  <div class="wrap">
    <h1><?php esc_html_e( get_admin_page_title() ); ?></h1>
    <p><?php esc_html_e( 'Some content.', 'wpplugin' ); ?></p>
  </div>
  <?php
}

function wpplugin_settings_subpage_markup()
{
  // Double check user capabilities
  if ( !current_user_can('manage_options') ) {
      return;
  }
  ?>
  <div class="wrap">
    <h1><?php esc_html_e( get_admin_page_title() ); ?></h1>
    <p><?php esc_html_e( 'Some content.', 'wpplugin' ); ?></p>
  </div>
  <?php
}


function wpplugin_default_sub_pages() {

  // Can add page as a submenu using the following:
  // add_dashboard_page()
  // add_posts_page()
  // add_media_page()
  // add_pages_page()
  // add_comments_page()
  // add_theme_page()
  // add_plugins_page()
  // add_users_page()
  // add_management_page()
  // add_options_page()

  add_dashboard_page(
    __( 'Cool Default Sub Page', 'wpplugin' ),
    __( 'Custom Sub Page', 'wpplugin' ),
    'manage_options',
    'wpplugin-subpage',
    'wpplugin_settings_page_markup'
  );

}
add_action( 'admin_menu', 'wpplugin_default_sub_pages' );

?>
