<p class="byline">
  From: <?php the_author_posts_link(); ?> |
  Date: <?php the_time('F j, Y |'); ?>
  <?php esc_html_e( 'Categories: ', 'wptags' ); ?>
  <?php the_category( ', ' ); ?>
  <?php the_tags( 'Tags: ', ', ' ); ?>
</p>
