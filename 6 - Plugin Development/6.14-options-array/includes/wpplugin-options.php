<?php

// Function for learning how to add options
function wpplugin_options() {

  // $options = [
  //   'First Name',
  //   'Second Option',
  //   'Third Option'
  // ];

  $options = [];
  $options['name']      = 'Zac Gordon';
  $options['location']  = 'Washington, D.C.';
  $options['sponsor']   = 'Plugin Co.';

  if( !get_option( 'wpplugin_option' ) ) {
      add_option( 'wpplugin_option', $options );
  }
  update_option( 'wpplugin_option', $options );
  // delete_option( 'wpplugin_option' );

}
add_action( 'admin_init', 'wpplugin_options' );
