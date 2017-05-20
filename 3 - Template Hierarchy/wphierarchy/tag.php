<?php get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <h1>
        <?php
          echo esc_html__( 'Tag: ', 'wphierarchy' );
          echo single_tag_title();
          $paged = ( get_query_var('paged') ) ? get_query_var( 'paged' ) : 1;
          if ( $paged > 1 ) {
            echo ' - Page ' . $paged;
          }
        ?>
      </h1>
      <p>
        <?php echo tag_description(); ?>
      </p>

      <hr>


      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', get_post_format() ); ?>


      <?php endwhile; else: ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

      <?php endif; ?>

      <?php echo paginate_links(); ?>


    </main>
  </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
