<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="entry-header">

    <?php the_title( '<p class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></p>' ); ?>

    <div class="byline">
      <p>
        <?php esc_html_e( 'An Aside from', 'wphierarchy' ); ?>
        <a href="<?php echo get_author_posts_url( $post->post_author ); ?>"><?php the_author(); ?></a>
        <?php esc_html_e( 'posted on', 'wphierarchy' ); ?>
        <?php the_time( 'M. j, Y' ); ?>
      </p>
    </div>

  </header>

  <div class="entry-content">

    <?php the_content(); ?>

  </div>

</article>
