<?php

// Conditionally load JS on plugin settings pages only
function wpplugin_admin_scripts( $hook ) {

  wp_register_script(
    'wpplugin-admin',
    WPPLUGIN_URL . 'admin/js/wpplugin-admin.js',
    ['jquery'],
    time()
  );

  if( 'toplevel_page_wpplugin' == $hook ) {
      wp_enqueue_script( 'wpplugin-admin' );
  }

}
add_action( 'admin_enqueue_scripts', 'wpplugin_admin_scripts' );
