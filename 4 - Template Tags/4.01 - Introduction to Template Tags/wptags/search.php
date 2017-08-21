<?php get_header(); ?>

  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

      <h1>
        <?php esc_html_e( 'Searching For:', 'wptags'); ?>
        "<?php echo get_search_query(); ?>"
      </h1>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', 'search' ); ?>

      <?php endwhile; else : ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

      <?php endif; ?>

      <p>Template: search.php</p>

    </main>

  </div>

  <?php get_sidebar( 'page' ); ?>

<?php get_footer(); ?>
