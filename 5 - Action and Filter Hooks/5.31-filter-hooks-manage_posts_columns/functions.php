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

  wp_enqueue_script( 'jquery-theme-js', get_stylesheet_directory_uri() . '/assets/js/jquery.theme.js', [ 'jquery' ], time(), true );

  if ( is_singular() && comments_open() ) {
    wp_enqueue_script( 'comment-reply' );
  }

}
add_action( 'wp_enqueue_scripts', 'wphooks_enqueue_scripts' );

// Remove unwanted columns from post listing
function wphooks_customize_post_columns( $columns ) {

  unset( $columns['author'] );
  unset( $columns['categories'] );
  unset( $columns['tags'] );
  unset( $columns['comments'] );
  return $columns;

}
add_filter( 'manage_posts_columns', 'wphooks_customize_post_columns', 100 );

// // Post ID Column Header
// function wphooks_post_id_columns_head( $defaults ) {
//
//     $defaults['ID'] = esc_html__( 'POST ID', 'wphooks' );
//     return $defaults;
//
// }
//
// // Add Post ID to Column Content
// function wphooks_post_id_columns_content( $column_name, $post_id ) {
//
//     if ( $column_name == 'ID' ) {
//
//       echo $post_id;
//
//     }
//
// }
//
// add_filter('manage_posts_columns', 'wphooks_post_id_columns_head');
// add_action('manage_posts_custom_column', 'wphooks_post_id_columns_content', 10, 2);



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
