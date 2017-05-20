<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="entry-header">

    <?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>
    <div class="byline">
      <p>
        Date: <?php the_time( 'M. j, Y' ); ?>
      </p>
    </div>

  </header>

</article>
