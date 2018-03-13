<?php

// Conditionally load CSS on plugin settings pages only
function wpplugin_admin_styles( $hook ) {

  wp_register_style(
    'wpplugin-admin',
    WPPLUGIN_URL . 'admin/css/wpplugin-admin-style.css',
    [],
    time()
  );

  if( 'toplevel_page_wpplugin' == $hook ) {
    wp_enqueue_style( 'wpplugin-admin' );
  }

}
add_action( 'admin_enqueue_scripts', 'wpplugin_admin_styles' );


// Load CSS on the frontend
function wpplugin_frontend_styles() {

  wp_register_style(
    'wpplugin-frontend',
    WPPLUGIN_URL . 'frontend/css/wpplugin-frontend-style.css',
    [],
    time()
  );

  if( is_single() ) {
      wp_enqueue_style( 'wpplugin-frontend' );
  }

}
add_action( 'wp_enqueue_scripts', 'wpplugin_frontend_styles', 100 );
