<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP for WordPress</title>
    <?php wp_head(); ?>
  </head>
  <body class="<?php body_class(); ?>">

    <header id="masthead">
      <h1><a href="#">PHP for WordPress</a></h1>
    </header>

    <div id="content">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article class="<?php post_class(); ?>">

          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

          <?php the_excerpt(); ?>

          <footer>
            <p class="byline">
              Author:
              <a href="<?php the_author(); ?>"><?php the_author(); ?></a> |
              Date: <?php the_time( 'M. j, Y' ); ?> |
              Categories: <?php the_category( ',' ); ?> |
              Tags: <?php the_tags( '', ',', '' ); ?>
            </p>
          </footer>

        </article>

      <?php endwhile; else: ?>

        <h2><?php _e( '404 Error' ); ?></h2>
        <p><?php _e( 'Sorry, content not found.', 'phpforwp' ); ?></p>

      <?php endif; ?>

    </div>

    <?php wp_footer(); ?>

  </body>
</html>
