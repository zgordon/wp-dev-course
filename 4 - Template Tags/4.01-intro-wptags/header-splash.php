<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <div id="page">

      <a href="#content" class="skip-link screen-reader-text">
        <?php esc_html_e( 'Skip to content', 'wptags' ); ?>
      </a>

      <header id="masthead" class="site-header" role="banner">

        <div class="notice">
          <p>NEW - Lorem to the sell thisum!</p>
        </div>

        <div class="site-branding">
          <p class="site-title">
            <?php bloginfo( 'name' ); ?>
          </p>
          <p class="site-description" >
            <?php bloginfo( 'description' ); ?>
          </p>
        </div>

      </header>

      <div id="content" class="site-content">
