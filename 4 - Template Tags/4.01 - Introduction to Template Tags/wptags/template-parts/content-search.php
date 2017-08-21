<article id="post-<?php the_ID(); ?>" class="post">

  <header class="entry-header">

    <h2 class="search-title">
      <a href="<?php the_permalink(); ?>">
        <?php echo get_post_type( $post ); ?>:
        <?php the_title(); ?>
      </a>
    </h2>

  </header>

  <div class="entry-content">

    <?php the_excerpt(); ?>

  </div>

</article>
