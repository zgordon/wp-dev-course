<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="entry-header">

    <?php if( is_singular() ): ?>

      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

    <?php else: ?>

      <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>

    <?php endif; ?>

    <div class="byline">
      <p>
        <?php if( is_singular() ): ?>
          Blog Post from 
        <?php endif; ?>
        Author:
        <a href="<?php echo get_author_posts_url( $post->post_author ); ?>"><?php the_author(); ?></a> |
        Date: <?php the_time( 'M. j, Y' ); ?>
      </p>
    </div>

    <?php the_post_thumbnail( 'full' ) ?>

  </header>

  <div class="entry-content">

    <?php if( is_singular() ): ?>

      <?php the_content(); ?>

      <div class="byline">
        <p>
          Categories: <?php the_category( ',' ); ?> |
          Tags: <?php the_tags( '', ',', '' ); ?>
        </p>
      </div>

      <?php if( comments_open ): ?>

        <?php comments_template(); ?>

      <?php endif; ?>

    <?php else: ?>

      <?php the_excerpt(); ?>
      <div class="byline">
        <p>
          Categories: <?php the_category( ',' ); ?> |
          Tags: <?php the_tags( '', ',', '' ); ?>
        </p>
      </div>

    <?php endif; ?>



  </div>

</article>
