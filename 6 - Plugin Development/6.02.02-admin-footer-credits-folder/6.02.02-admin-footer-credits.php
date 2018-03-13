<?php
/*
Plugin Name: 6.02.02 - Simple Plugin (with Directory)
Description: Displays a message in the admin footer using multiple files.
Version: 1.0.0
Contributors: zgordon
Author: Zac Gordon
Author URI: https://zacgordon.com
License: GPLv2 or later
Text Domain: wpplugin
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

include( plugin_dir_path( __FILE__ ) . 'includes/admin-footer-text.php');

?>
