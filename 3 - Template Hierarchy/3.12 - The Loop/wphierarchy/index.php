<?php get_header(); ?>

  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

          <header class="entry-header">

            <?php the_title( '<h1>', '</h1>' ); ?>

          </header>

          <div class="entry-content">

            <?php the_content(); ?>

          </div>

        </article>

      <?php endwhile; else : ?>

        <article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

          <header class="entry-header">

            <h1><?php esc_html_e( '404', 'wphierarchy' ); ?></h1>

          </header>

          <div class="entry-content">

            <p><?php esc_html_e( 'Sorry! No content found.', 'wphierarchy' ); ?></p>

          </div>

        </article>

      <?php endif; ?>

    </main>

  </div>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
