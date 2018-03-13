<?php

function wpplugin_settings_page_markup()
{
  // Double check user capabilities
  if ( !current_user_can('manage_options') ) {
      return;
  }
  include( WPPLUGIN_DIR . 'templates/admin/settings-page.php');
}

function wpplugin_settings_pages()
{
  add_menu_page(
    __( 'Practice Plugin', 'wpplugin' ),
    __( 'Practice', 'wpplugin' ),
    'manage_options',
    'wpplugin',
    'wpplugin_settings_page_markup',
    'dashicons-screenoptions',
    100
  );

}
add_action( 'admin_menu', 'wpplugin_settings_pages' );

// Add a link to your settings page in your plugin
function wpplugin_add_settings_link( $links ) {
    $settings_link = '<a href="admin.php?page=wpplugin">' . __( 'Settings' ) . '</a>';
    array_push( $links, $settings_link );
  	return $links;
}
$filter_name = "plugin_action_links_" . plugin_basename( __FILE__ );
add_filter( $filter_name, 'wpplugin_add_settings_link' );
