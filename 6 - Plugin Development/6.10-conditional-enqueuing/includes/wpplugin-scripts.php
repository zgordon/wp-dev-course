<?php

// Conditionally load JS on plugin settings pages only
function wpplugin_admin_scripts( $hook ) {

  wp_register_script(
    'wpplugin-admin',
    WPPLUGIN_URL . 'admin/js/wpplugin-admin.js',
    ['jquery'],
    time()
  );

  wp_localize_script( 'wpplugin-admin', 'wpplugin', [
      'hook' => $hook
  ]);

  if( 'toplevel_page_wpplugin' == $hook ) {
      wp_enqueue_script( 'wpplugin-admin' );
  }

}
add_action( 'admin_enqueue_scripts', 'wpplugin_admin_scripts' );


// Conditionally load JS on single post pages
function wpplugin_frontend_scripts() {

  wp_register_script(
    'wpplugin-frontend',
    WPPLUGIN_URL . 'frontend/js/wpplugin-frontend.js',
    [],
    time()
  );

  if( is_single() ) {
      wp_enqueue_script( 'wpplugin-frontend' );
  }

}
add_action( 'wp_enqueue_scripts', 'wpplugin_frontend_scripts', 100 );
