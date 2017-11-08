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


function wphooks_add_draft_to_titles( $post_id, $post ) {

  // If post revision do not proceed
  if ( wp_is_post_revision( $post_id ) ) {
    return;
  }


  // Add or remove "DRAFT: " from title depending on status
  if( 'draft' === $post->post_status &&
      'DRAFT: ' !== substr( $post->post_title, 0, 7 ) ) {

      // Add 'DRAFT: ' to the title
      $post->post_title = 'DRAFT: ' . $post->post_title;

  } elseif ( 'publish' === $post->post_status &&
             'DRAFT: ' === substr( $post->post_title, 0, 7 ) ) {

      // Remove 'DRAFT: ' from the title
      $post->post_title = substr( $post->post_title, 7 );

  }


  // If slug starts with 'draft-' remove it
  if( 'draft-' === substr( $post->post_name, 0, 6 ) ) {

      $post->post_name = substr( $post->post_name, 6 );

  }

  // Unhook wphooks_add_draft_to_titles so it doesn't loop infinitely
  remove_action('save_post', 'wphooks_add_draft_to_titles');

  // Update the post
  wp_update_post( $post );

  // Re-hook wphooks_add_draft_to_titles
  add_action('save_post', 'wphooks_add_draft_to_titles');


}
add_action( 'save_post', 'wphooks_add_draft_to_titles' );


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
