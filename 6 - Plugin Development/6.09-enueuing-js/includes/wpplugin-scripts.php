<?php

// Load JS on all admin pages
function wpplugin_admin_scripts() {

  wp_enqueue_script(
    'wpplugin-admin',
    WPPLUGIN_URL . 'admin/js/wpplugin-admin.js',
    ['jquery'],
    time()
  );

}
add_action( 'admin_enqueue_scripts', 'wpplugin_admin_scripts', 100 );


// Load JS on the frontend
function wpplugin_frontend_scripts() {

  wp_enqueue_script(
    'wpplugin-frontend',
    WPPLUGIN_URL . 'frontend/js/wpplugin-frontend.js',
    [],
    time()
  );
}
add_action( 'wp_enqueue_scripts', 'wpplugin_frontend_scripts', 100 );
