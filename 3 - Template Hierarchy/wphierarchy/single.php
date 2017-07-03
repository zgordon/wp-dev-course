<?php get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

      <?php endwhile; else: ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

      <?php endif; ?>

      <?php posts_nav_link(); ?>

      <div class="prev-posts"><?php previous_post_link('%link', '&lt; Previous Post') ?></div>
      <div class="next-posts"><?php next_post_link('%link', 'Next Post &gt;') ?></div>


    </main>
  </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
