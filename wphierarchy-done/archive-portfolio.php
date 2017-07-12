<?php get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <h1>
        <?php
          echo post_type_archive_title();
          echo get_post_type_object( 'description' );          
          $paged = ( get_query_var('paged') ) ? get_query_var( 'paged' ) : 1;
          if ( $paged > 1 ) {
            echo ' - Page ' . $paged;
          }
        ?>
      </h1>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', 'portfolio' ); ?>


      <?php endwhile; else: ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

      <?php endif; ?>

      <?php echo paginate_links(); ?>


    </main>
  </div>

<?php get_sidebar( 'portfolio' ); ?>
<?php get_footer(); ?>
