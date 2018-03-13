<?php

// Function for learning how to add options
function wpplugin_options() {

  $option = 'Custom Option UPDATED Text';

  if( !get_option( 'wpplugin_options' ) ) {
      add_option( 'wpplugin_options', $option );
  }
  update_option( 'wpplugin_options', $option );
  // delete_option( 'wpplugin_options' );

}
add_action( 'admin_init', 'wpplugin_options' );
