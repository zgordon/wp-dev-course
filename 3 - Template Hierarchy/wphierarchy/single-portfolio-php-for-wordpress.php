<?php get_header( 'simple' ); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <header class="entry-header">
            <h1><?php the_title(); ?></h1>
          </header>

          <div class="entry-content">
            <?php the_post_thumbnail( 'full' ) ?>
            <?php the_content(); ?>
            <p>
              <a class="button" target="_blank" href="<?php the_field( 'url' ); ?>">Visit the Site</a>
            </p>
          </div>

        </article>

      <?php endwhile; else: ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

      <?php endif; ?>

      <div class="prev-posts"><?php previous_post_link('%link', '&lt; Previous Project') ?></div>
      <div class="next-posts"><?php next_post_link('%link', 'Next Project &gt;') ?></div>

      <p>
        <?php posts_nav_link(); ?>
      </p>

    </main>
  </div>

<?php get_sidebar( 'portfolio' ); ?>
<?php get_footer( 'simple' ); ?>
