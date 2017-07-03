<?php get_header( 'simple' ); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" class="post">

          <header class="entry-header">

              <h2 class="search-title">
                <a href="<?php esc_url( get_permalink() ); ?>'" rel="bookmark">
                  <?php the_title(); ?>
                </a>
              </h2>

          </header>

          <div class="entry-content">

            <video src="<?php echo $post->guid; ?>" controls>
            </video>
            <?php the_content(); ?>

          </div>

        </article>

      <?php endwhile; else: ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

      <?php endif; ?>

      <?php echo paginate_links(); ?>


    </main>
  </div>

<?php get_sidebar( 'page' ); ?>
<?php get_footer( 'simple' ); ?>
