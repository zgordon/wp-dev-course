<?php get_header(); ?>

  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article <?php post_class( [ 'single', 'blog' ] ); ?>>


          <header class="entry-header">

            <h1><?php the_title(); ?></h1>

          </header>

          <div class="entry-content">

            <?php the_content(); ?>

          </div>

        </article>

      <?php endwhile; endif; ?>

    </main>

  </div>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
