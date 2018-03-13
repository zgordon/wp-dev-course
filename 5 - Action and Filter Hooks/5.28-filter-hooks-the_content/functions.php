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


// Add an ad after middle paragraph in content
function wptags_content_ads( $content ) {

  if( !in_the_loop() ) {
    return;
  }

  $paragraphs;

  // Search for any text wrapped in paragraph tags
  $pattern = "/<p>.*?<\/p>/m";
  $p_count = preg_match_all( $pattern, $content, $paragraphs );
  $paragraphs = $paragraphs[0];

  // Find the middle paragraph
  $ad_p_number = floor( $p_count / 2 );
  if( 0 == $ad_p_number ) $ad_p_number = 1;
  $ad_p = $paragraphs[ $ad_p_number - 1 ];

  // Create the ad
  $post_ad = '<div class="post-ad"><h2>Post Add</h2></div>';
  $ad_p_w_ad = '<p>' . $ad_p . '</p>' . $post_ad;

  // Replace the original paragraph
  // With the paragraph with the ad
  $content_w_ad = str_replace( $ad_p, $ad_p_w_ad, $content );

  // Return new content with ad
  return $content_w_ad;
}
add_filter( 'the_content', 'wptags_content_ads', 10 );



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
