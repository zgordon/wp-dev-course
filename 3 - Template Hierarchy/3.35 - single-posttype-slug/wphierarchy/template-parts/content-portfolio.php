<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

  <header class="entry-header">

    <?php the_title( '<h2><a href="' . get_the_permalink() .'">', '</a></h2>' ); ?>

    <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail( 'full' ); ?>
    </a>

  </header>

  <div class="entry-content">

    <?php the_excerpt(); ?>

  </div>

</article>
