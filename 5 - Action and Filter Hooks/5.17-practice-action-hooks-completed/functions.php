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


// PRACTICE 1 - Load Admin Stylesheet
function wphooks_draft_mode_styles() {

  global $post;

  if( ! $post ) return;

  if( 'draft' === $post->post_status ) {

    wp_enqueue_style( 'wphooks-admin-css', get_stylesheet_directory_uri() . '/assets/css/admin.css', [], time(), 'all' );
    add_editor_style( 'assets/css/visual-editor.css' );

  }


}
add_action( 'admin_enqueue_scripts', 'wphooks_draft_mode_styles' );


// PRACTICE 2 - Show Banner Before Comments
function wphooks_comments_cta() {


  // Only load tempalte if in the loop
  if( in_the_loop() ) {

    locate_template( 'template-parts/comment-cta.php', true );

  }

}
add_action( 'pre_get_comments', 'wphooks_comments_cta' );


// PRACTICE 3 - Show Message Before Caldera Forms Contact Form
function wphooks_support_message_for_caldera_forms( $form ) {

  if( 'CF59fb1eaf58620' === $form['ID'] ) {
    locate_template( 'template-parts/contact-form-support-message.php', true );
  }

}
add_action( 'caldera_forms_render_start', 'wphooks_support_message_for_caldera_forms' );



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
