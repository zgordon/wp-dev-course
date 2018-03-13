<?php

function wpplugin_settings() {

  // If plugin settings don't exist, then create them
  if( false == get_option( 'wpplugin_settings' ) ) {
      add_option( 'wpplugin_settings' );
  }

  add_settings_field(
    // Unique identifier for field
    'wpplugin_settings_custom_text',
    // Field Title
    __( 'Custom Text', 'wpplugin'),
    // Callback for field markup
    'wpplugin_settings_custom_text_callback',
    // Page to go on
    'general',
    // Section to go in
    'default',
    // Array to pass to callback
    [
      __( 'Custom Text', 'wpplugin' )
    ]
  );

  register_setting(
    'general',
    'wpplugin_settings'
  );

}
add_action( 'admin_init', 'wpplugin_settings' );

function wpplugin_settings_section_callback() {

  esc_html_e( 'Plugin settings section description', 'wpplugin' );

}

function wpplugin_settings_custom_text_callback() {

  $options = get_option( 'wpplugin_settings' );

	$custom_text = '';
	if( isset( $options[ 'custom_text' ] ) ) {
		$custom_text = esc_html( $options['custom_text'] );
	}

  echo '<input type="text" id="wpplugin_customtext" name="wpplugin_settings[custom_text]" value="' . $custom_text . '" />';

}
