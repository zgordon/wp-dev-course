<?php get_header(); ?>

  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article <?php post_class(); ?>>

            <header class="entry-header">

              <h1><?php the_title(); ?></h1>

              <p class="byline">
                <?php the_shortlink( 'Shortlink'); ?> -
                <?php echo wp_get_shortlink(); ?>
              </p>

              <?php get_template_part( 'template-parts/byline' ); ?>

            </header>

          <div class="entry-content">

            <?php the_content(); ?>

            <?php if ( !empty( get_post_meta( $post->ID, 'Location' ) ) ) : ?>

              <hr>

              <p>
                <?php esc_html_e( 'Post Meta: ', 'wptags' ); ?>
                <?php the_meta(); ?>
                <?php esc_html_e( 'Location: ', 'wptags' ); ?>
                <?php echo get_post_meta( $post->ID, 'Location', true ); ?>
              </p>

            <?php endif; ?>


          </div>

        </article>

      <?php endwhile; endif; ?>

      <p class="prev-posts"><?php previous_post_link(); ?></p>
      <p class="next-posts"><?php next_post_link(); ?></p>

    </main>

  </div>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
