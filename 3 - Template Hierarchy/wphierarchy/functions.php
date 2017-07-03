<?php

// Add theme support
add_theme_support( 'title-tag' );
add_theme_support( 'starter-content' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-background' );
add_theme_support( 'post-formats', array(
  'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'
));
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'html5' );
add_theme_support( 'customize-selective-refresh-widgets' );

function jsforwp_load_theme_textdomain() {
  load_theme_textdomain( 'wpheirarchy', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'jsforwp_load_theme_textdomain' );

function wphierarchy_enqueue_styles() {
    wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', array(), time(), all );
}
add_action( 'wp_enqueue_scripts', 'wphierarchy_enqueue_styles' );

register_nav_menus( array(
  'main-menu' => esc_html__( 'Main Menu', 'wphierarchy' ),
) );

add_action( 'widgets_init', 'wphierarchy_widgets_init' );
function wphierarchy_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wphierarchy' ),
		'id'            => 'main-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'wphierarchy' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
  register_sidebar( array(
		'name'          => esc_html__( 'Page Sidebar', 'wphierarchy' ),
		'id'            => 'page-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'wphierarchy' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
  register_sidebar( array(
		'name'          => esc_html__( 'Front Sidebar', 'wphierarchy' ),
		'id'            => 'front-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'wphierarchy' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
  register_sidebar( array(
		'name'          => esc_html__( 'Portfolio Sidebar', 'wphierarchy' ),
		'id'            => 'portfolio-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'wphierarchy' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

function add_current_nav_class($classes, $item) {

  // Getting the current post details
  global $post;

  // Getting the post type of the current post
  $current_post_type = get_post_type_object(get_post_type($post->ID));
  $current_post_type_slug = $current_post_type->rewrite[slug];

  // Getting the URL of the menu item
  $menu_slug = strtolower(trim($item->url));

  // If the menu item URL contains the current post types slug add the current-menu-item class
  if (strpos($menu_slug,$current_post_type_slug) !== false) {

     $classes[] = 'current-menu-item';

  }

  // Return the corrected set of classes to be added to the menu item
  return $classes;

}
add_action('nav_menu_css_class', 'add_current_nav_class', 10, 2 );


?>
