<?php

// Add Theme Support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails', [ 'post', 'page' ] );
add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'customize-selective-refresh-widgets' );

// Load in our CSS
function wphooks_enqueue_styles() {

  wp_enqueue_style( 'varela-font-css', 'https://fonts.googleapis.com/css?family=Varela+Round', [], '', 'all' );
  wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', ['varela-font-css'], time(), 'all' );
  wp_enqueue_style( 'custom-css', get_stylesheet_directory_uri() . '/assets/css/custom.css', [ 'main-css' ], time(), 'all' );

}
add_action( 'wp_enqueue_scripts', 'wphooks_enqueue_styles' );

// Load in our JS
function wphooks_enqueue_scripts() {

  // wp_enqueue_script( 'theme-js', get_stylesheet_directory_uri() . '/assets/js/theme.js', [], time(), true );
  wp_enqueue_script( 'jquery-theme-js', get_stylesheet_directory_uri() . '/assets/js/jquery.theme.js', [ 'jquery' ], time(), true );

  if ( is_singular() && comments_open() ) {
    wp_enqueue_script( 'comment-reply' );
  }

}
add_action( 'wp_enqueue_scripts', 'wphooks_enqueue_scripts' );


// PRACTICE 1 - Change the length of post excerpts
function wphooks_excerpt_length( $length_in_words ) {

  $new_length_in_words = 20;
  return $new_length_in_words;

}
add_filter( 'excerpt_length', 'wphooks_excerpt_length', 20 );


// PRACTICE 2 - Login Redirect
function wphooks_members_login_redirect( $redirect_to, $request, $user ) {


    if ( isset( $user->roles ) && is_array( $user->roles ) ) {

        if ( !in_array( 'administrator', $user->roles ) ) {

            return home_url( '/members' );

        } else {

            return $redirect_to;
        }

    }

    return;
}
add_filter( 'login_redirect', 'wphooks_members_login_redirect', 10, 3 );

// Template Redirect for Members Page
function wphooks_members_logged_out_redirect() {

  if( is_page( 'members' ) && ! is_user_logged_in() )
  {
      wp_redirect( home_url( '/sign-up/' ) );
      die;
  }
  if( is_page( 'sign-up' ) && is_user_logged_in() )
  {
      wp_redirect( home_url( '/members/' ) );
      die;
  }

}
add_action( 'template_redirect', 'wphooks_members_logged_out_redirect', 10 );


// PRACTICE 3 - caldera_forms_render_field_type
function wphooks_change_caldera_button_class( $field_html ) {

    $new_field_html = str_replace( 'btn', 'button', $field_html  );
    return $new_field_html;

};

// add the filter
add_filter( 'caldera_forms_render_field_type-button', 'wphooks_change_caldera_button_class', 10, 1 );



// Comment Custom callback
function wphooks_comment() {

  get_template_part( 'comment' );

}


// Register Menu Locations
register_nav_menus( [
  'main-menu' => esc_html__( 'Main Menu', 'wphooks' ),
  'footer-menu' => esc_html__( 'Footer Menu', 'wphooks' )
]);


// Setup Widget Areas
function wphooks_widgets_init() {
  register_sidebar([
    'name'          => esc_html__( 'Main Sidebar', 'wphooks' ),
    'id'            => 'main-sidebar',
    'description'   => esc_html__( 'Add widgets for main sidebar here', 'wphooks' ),
    'before_widget' => '<section class="widget">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ]);
}
add_action( 'widgets_init', 'wphooks_widgets_init' );


?>
