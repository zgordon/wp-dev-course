<?php

function wpplugin_settings() {

  // If plugin settings don't exist, then create them
  if( false == get_option( 'wpplugin_settings' ) ) {
      add_option( 'wpplugin_settings' );
  }

  // Define (at least) one section for our fields
  add_settings_section(
    // Unique identifier for the section
    'wpplugin_settings_section',
    // Section Title
    __( 'Plugin Settings Section', 'wpplugin' ),
    // Callback for an optional description
    'wpplugin_settings_section_callback',
    // Admin page to add section to
    'wpplugin'
  );

  // Input Text Field
  add_settings_field(
    // Unique identifier for field
    'wpplugin_settings_input_text',
    // Field Title
    __( 'Text Input', 'wpplugin'),
    // Callback for field markup
    'wpplugin_settings_text_input_callback',
    // Page to go on
    'wpplugin',
    // Section to go in
    'wpplugin_settings_section'
  );

  // Textarea Field
  add_settings_field(
    'wpplugin_settings_textarea',
    __( 'Text Area', 'wpplugin'),
    'wpplugin_settings_textarea_callback',
    'wpplugin',
    'wpplugin_settings_section'
  );

  // Checkbox Field
  add_settings_field(
    'wpplugin_settings_checkbox',
    __( 'Checkbox', 'wpplugin'),
    'wpplugin_settings_checkbox_callback',
    'wpplugin',
    'wpplugin_settings_section',
    [
      'label' => 'Checkbox Label'
    ]
  );

  // Radio Field
  add_settings_field(
    'wpplugin_settings_radio',
    __( 'Radio', 'wpplugin'),
    'wpplugin_settings_radio_callback',
    'wpplugin',
    'wpplugin_settings_section',
    [
      'option_one' => 'Radio 1',
      'option_two' => 'Radio 2'
    ]
  );

  // Dropdown
  add_settings_field(
    'wpplugin_settings_select',
    __( 'Select', 'wpplugin'),
    'wpplugin_settings_select_callback',
    'wpplugin',
    'wpplugin_settings_section',
    [
      'option_one' => 'Select Option 1',
      'option_two' => 'Select Option 2',
      'option_three' => 'Select Option 3'
    ]
  );


  register_setting(
    'wpplugin_settings',
    'wpplugin_settings'
  );

}
add_action( 'admin_init', 'wpplugin_settings' );

function wpplugin_settings_section_callback() {

  esc_html_e( 'Plugin settings section description', 'wpplugin' );

}

function wpplugin_settings_text_input_callback() {

  $options = get_option( 'wpplugin_settings' );

	$text_input = '';
	if( isset( $options[ 'text_input' ] ) ) {
		$text_input = esc_html( $options['text_input'] );
	}

  echo '<input type="text" id="wpplugin_customtext" name="wpplugin_settings[text_input]" value="' . $text_input . '" />';

}

function wpplugin_settings_textarea_callback() {

  $options = get_option( 'wpplugin_settings' );

	$textarea = '';
	if( isset( $options[ 'textarea' ] ) ) {
		$textarea = esc_html( $options['textarea'] );
	}

  echo '<textarea id="wpplugin_settings_textarea" name="wpplugin_settings[textarea]" rows="5" cols="50">' . $textarea . '</textarea>';

}

function wpplugin_settings_checkbox_callback( $args ) {

  $options = get_option( 'wpplugin_settings' );

  $checkbox = '';
	if( isset( $options[ 'checkbox' ] ) ) {
		$checkbox = esc_html( $options['checkbox'] );
	}

	$html = '<input type="checkbox" id="wpplugin_settings_checkbox" name="wpplugin_settings[checkbox]" value="1"' . checked( 1, $checkbox, false ) . '/>';
	$html .= '&nbsp;';
	$html .= '<label for="wpplugin_settings_checkbox">' . $args['label'] . '</label>';

	echo $html;

}

function wpplugin_settings_radio_callback( $args ) {

  $options = get_option( 'wpplugin_settings' );

  $radio = '';
	if( isset( $options[ 'radio' ] ) ) {
		$radio = esc_html( $options['radio'] );
	}

	$html = '<input type="radio" id="wpplugin_settings_radio_one" name="wpplugin_settings[radio]" value="1"' . checked( 1, $radio, false ) . '/>';
	$html .= ' <label for="wpplugin_settings_radio_one">'. $args['option_one'] .'</label> &nbsp;';
	$html .= '<input type="radio" id="wpplugin_settings_radio_two" name="wpplugin_settings[radio]" value="2"' . checked( 2, $radio, false ) . '/>';
	$html .= ' <label for="wpplugin_settings_radio_two">'. $args['option_two'] .'</label>';

	echo $html;

}

function wpplugin_settings_select_callback( $args ) {

  $options = get_option( 'wpplugin_settings' );

  $select = '';
	if( isset( $options[ 'select' ] ) ) {
		$select = esc_html( $options['select'] );
	}

  $html = '<select id="wpplugin_settings_options" name="wpplugin_settings[select]">';

	$html .= '<option value="option_one"' . selected( $select, 'option_one', false) . '>' . $args['option_one'] . '</option>';
	$html .= '<option value="option_two"' . selected( $select, 'option_two', false) . '>' . $args['option_two'] . '</option>';
	$html .= '<option value="option_three"' . selected( $select, 'option_three', false) . '>' . $args['option_three'] . '</option>';

	$html .= '</select>';

	echo $html;

}
