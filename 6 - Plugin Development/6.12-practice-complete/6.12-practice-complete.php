<?php
/*
Plugin Name: 6.12 - PRACTICE Setup - Complete
Plugin URI: https://github.com/zgordon/wp-dev-course
Description: Practice plugin for working with settings pages and enqueuing JS and CSS.
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

define( 'WPPLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Enqueue Plugin CSS
include( plugin_dir_path( __FILE__ ) . 'includes/wpplugin-styles.php');

// Enqueue Plugin JavaScript
include( plugin_dir_path( __FILE__ ) . 'includes/wpplugin-scripts.php');

// Create Plugin Admin Menus and Setting Pages
include( plugin_dir_path( __FILE__ ) . 'includes/wpplugin-menus.php');

function wpplugin_custom_admin_footer( $footer ) {

  return '<span id="footer-thankyou">' .  __( 'New Plugin Footer', 'wpplugin' ) . '</span>';

}
add_filter( 'admin_footer_text', 'wpplugin_custom_admin_footer', 10, 1 );


?>
