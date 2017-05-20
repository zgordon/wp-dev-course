<?php get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <div class="author-bio">
        <?php
          echo get_avatar( get_the_author_meta( 'user_email' ), '100', $default, $alt, array( 'class' => array( 'alignleft') ) );
        ?>
        <h1>
          <?php the_author(); ?>
          <?php
            $paged = ( get_query_var('paged') ) ? get_query_var( 'paged' ) : 1;
            if ( $paged > 1 ) {
              echo ' - Page ' . $paged;
            }
          ?>
        </h1>
        <p>
          <?php
            echo the_author_meta( 'description', $post->post_author );
          ?>
        </p>
      </div>

      <h2><?php echo esc_html( 'Posts from Author:', 'wpheirarchy' ); ?></h2>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', 'simple' ); ?>


      <?php endwhile; else: ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

      <?php endif; ?>

      <?php echo paginate_links(); ?>


    </main>
  </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
