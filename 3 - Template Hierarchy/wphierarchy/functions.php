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


function wphierarchy_enqueue_styles() {
    wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', array(), time(), all );
}

add_action( 'wp_enqueue_scripts', 'wphierarchy_enqueue_styles' );

register_nav_menus( array(
  'main-menu' => esc_html__( 'Main Menu', 'wphierarchy' ),
) );

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
}
add_action( 'widgets_init', 'wphierarchy_widgets_init' );


?>
