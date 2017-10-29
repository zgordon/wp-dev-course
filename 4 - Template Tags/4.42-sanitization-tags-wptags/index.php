<?php get_header(); ?>

  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">
      <h2><?php _e( 'Sanitization Tags', 'wptags' ); ?></h2>
      <ul>
        <li>
          sanitize_text_field
          <?php echo sanitize_text_field( "<h1>Header</h1>" ); ?>
        </li>
        <li>
          sanitize_title
          <?php echo sanitize_title( "<h1>Post Title</h1>" ); ?>
        </li>
        <li>
          sanitize_email
          <?php echo sanitize_email( "edu c<tion>@zacgordon.com" ); ?>
        </li>
        <li>
          sanitize_html_class
          <?php echo sanitize_html_class( "new## class*%" ); ?>
        </li>
        <li>
          esc_url_raw
          <?php echo esc_url_raw( "https;//`javascript<forwp>.com" ); ?>
        </li>
      </ul>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <header class="entry-header">

            <?php if( has_post_thumbnail() ): ?>

              <a href="<?php the_permalink(); ?>">
                <?php

                  $attr = [
                    'class' => 'alignleft',
                    'title' => get_the_title()
                  ];
                  the_post_thumbnail( 'thumbnail', $attr );

                ?>
              </a>

            <?php endif; ?>

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
