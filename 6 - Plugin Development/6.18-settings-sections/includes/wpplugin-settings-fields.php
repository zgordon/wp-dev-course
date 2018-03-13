<?php

function wpplugin_settings() {

  // Define (at least) one section for our fields
  add_settings_section(
    // Unique identifier for the section
    'wpplugin_settings_section',
    // Section Title
    __( 'A Plugin Settings Section', 'wpplugin' ),
    // Callback for an optional description
    'wpplugin_settings_section_callback',
    // Admin page to add section to
    'wpplugin'
  );

}
add_action( 'admin_init', 'wpplugin_settings' );

function wpplugin_settings_section_callback() {

  esc_html_e( 'Plugin settings section description', 'wpplugin' );

}
