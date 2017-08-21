<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="entry-header">

    <?php if( is_singular() ): ?>

      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

    <?php else: ?>

      <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>

    <?php endif; ?>
    
  </header>

  <div class="entry-content">

    <?php if( is_singular() ): ?>

      <?php the_content(); ?>

    <?php else: ?>

      <?php the_excerpt(); ?>

    <?php endif; ?>



  </div>

</article>
