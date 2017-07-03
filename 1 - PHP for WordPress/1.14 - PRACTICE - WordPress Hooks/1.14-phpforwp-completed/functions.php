<?php

/**
 * Enqueue the theme stylesheets
 */
function phpforwp_theme_styles() {

  wp_enqueue_script( 'font-css', 'https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round' );

  wp_enqueue_style( 'main-css', get_stylesheet_uri(), 'fonts-css', get_the_time() );

}
add_action( 'wp_enqueue_scripts', 'phpforwp_theme_styles' );


/**
 * Add read more text to post excerpt
 *
 * @param string $excerpt The post excerpt
 * @return string $extended_excerpt Post excerpt with read more link
 */
function phpforwp_read_more_link( $excerpt ) {

  $extended_excerpt = $excerpt;

  $extended_excerpt .= ' <a class="more-link" href="' . get_permalink() . '">Read more &raquo;</a>';

  return $extended_excerpt;

}
add_filter( 'get_the_excerpt', 'phpforwp_read_more_link', 10 );


?>
