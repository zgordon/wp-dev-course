<?php
/*
Plugin Name: 6.XX - Simple Members Only Plugin
Description: Demo plugin for Zac Gordon's WordPress Development Course.
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

if( is_admin() ) {

  // echo __FILE__;
  // exit;

  // require_once( __FILE__ ) . './includes/metabox.php' ;

}

function smo_is_members_only( $post_id = 0 ) {

  $is_members_only = get_post_meta( $post_id, 'smo_members_only', true );

  if( ! empty( $is_members_only ) ) {

    if( true == $is_members_only ) {

      return true;

    }

  } else {

    return false;

  }

}

/*

  On Post Page
  - Show Checkbox in Publish box

  On Settings Page
  - Show members
  - Show / rename "Member" role

  On User Page
  - Show checkbox to grant Members Only access

  Widget
  - Member sign up Widget

  Shortcode
  - Member sign up shortcode
  - Latest member's only posts

  General
  - Create new user role for Member
  - Hook into sign up form and add member checkbox?

*/

?>
