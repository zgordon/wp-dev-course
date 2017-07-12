<?php get_header(); ?>

  <div id="primary" class="content-area extended">
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
              <a class="button" href="<?php the_field( 'url' ); ?>">Visit the Site</a>
            </p>
          </div>

        </article>

      <?php endwhile; else: ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

      <?php endif; ?>

      <div class="prev-posts"><?php previous_post_link('%link', '&lt; Previous Project') ?></div>
      <div class="next-posts"><?php next_post_link('%link', 'Next Project &gt;') ?></div>


    </main>
  </div>

<?php get_footer(); ?>
