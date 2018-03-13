<?php

function wpplugin_custom_admin_footer( $footer ) {

  $new_footer = str_replace( '.</span>', __(' and <a href="https://zacgordon.com">Zac Gordon</a>.</span>', 'wpplugin' ), $footer);
  return $new_footer;

}
add_filter( 'admin_footer_text', 'wpplugin_custom_admin_footer', 10, 1 );
