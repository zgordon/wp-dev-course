<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page">
  <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wphierarchy' ); ?></a>

  <header id="masthead" class="site-header" role="banner">

    <div class="site-branding">
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
    </div><!-- .site-branding -->


  </header><!-- .site-header -->

  <div id="content" class="site-content">
