<p class="byline">
  <?php esc_html_e( 'Categories: ', 'wptags' ); ?>
  <?php the_category( ', ', 'single' ); ?>
  <?php the_tags( 'Tags: ', ', ', ' |' ); ?>
</p>
