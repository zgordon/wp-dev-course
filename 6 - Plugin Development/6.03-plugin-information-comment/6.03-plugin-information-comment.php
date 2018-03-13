<?php
/*
Plugin Name: 6.03 - Information Comment
Plugin URI: https://github.com/zgordon/wp-dev-course
Description: Demo plugin for learning about the plugin information comment.
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


function wpplugin_custom_admin_footer( $footer ) {

  $new_footer = str_replace( '.</span>', __(' and <a href="https://zacgordon.com">Zac Gordon</a>.</span>', 'wpplugin' ), $footer);
  return $new_footer;

}
add_filter( 'admin_footer_text', 'wpplugin_custom_admin_footer', 10, 1 );


?>
