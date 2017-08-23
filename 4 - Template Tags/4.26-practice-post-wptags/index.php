<?php get_header(); ?>

  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <header class="entry-header">

            <h2>
              <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
            </h2>

            <?php get_template_part( 'template-parts/byline' ); ?>

          </header>

          <div class="entry-content">

            <?php the_excerpt(); ?>

          </div>

        </article>

      <?php endwhile; endif; ?>

      <p class="prev-posts"><?php previous_posts_link(); ?></p>
      <p class="next-posts"><?php next_posts_link(); ?></p>

    </main>

  </div>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
