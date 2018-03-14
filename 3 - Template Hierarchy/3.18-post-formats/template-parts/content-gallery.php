<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

  <header class="entry-header">

    <span class="dashicons dashicons-format-<?php echo get_post_format( $post->ID ); ?>"></span>
    <p><?php esc_html_e( 'Enjoy this gallery post!!!', 'wphierarchy' ); ?></p>

    <?php the_title( '<h1>', '</h1>' ); ?>

  </header>

  <div class="entry-content">

    <?php the_content(); ?>

  </div>

  <?php if( comments_open() ) : ?>

    <?php comments_template(); ?>

  <?php endif; ?>




</article>
