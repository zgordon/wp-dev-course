<?php get_header(); ?>

  <div id="primary" class="content-area wordpress">
    <main id="main" class="site-main" role="main">

      <h1>
        <?php
          echo single_tag_title();
          echo esc_html__( ' Posts Yayyyy!!!', 'wphierarchy' );
          $paged = ( get_query_var('paged') ) ? get_query_var( 'paged' ) : 1;
          if ( $paged > 1 ) {
            echo ' - Page ' . $paged;
          }
        ?>
      </h1>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', get_post_format() ); ?>


      <?php endwhile; else: ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

      <?php endif; ?>

      <?php echo paginate_links(); ?>


    </main>
  </div>

<?php get_footer(); ?>
