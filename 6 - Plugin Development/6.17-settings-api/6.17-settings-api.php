<?php
/*
Plugin Name: 6.17 - Settings API
Plugin URI: https://github.com/zgordon/wp-dev-course
Description: Demo plugin for learning how to work the Settings API in WordPress.
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

// Define plugin paths and URLs
define( 'WPPLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'WPPLUGIN_DIR', plugin_dir_path( __FILE__ ) );


// Create Settings Fields
include( plugin_dir_path( __FILE__ ) . 'includes/wpplugin-settings-fields.php');

// Create Plugin Admin Menus and Setting Pages
include( plugin_dir_path( __FILE__ ) . 'includes/wpplugin-menus.php');

// Add the wpplugin_options to the footer
function wpplugin_custom_admin_footer( $footer ) {

  $options = get_option( 'wpplugin_settings' );

  if( $options['custom_text'] ) {

    $footer_text = esc_html( $options['custom_text'] );
    return $footer_text;

  } else {

    return $footer;

  }


}
add_filter( 'admin_footer_text', 'wpplugin_custom_admin_footer', 10, 1 );



?>
