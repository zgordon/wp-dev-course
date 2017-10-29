<aside id="secondary" class="widget-area" role="complementary">

  <?php if( !is_user_logged_in() ): ?>

    <?php wp_login_form(); ?>

  <?php else: ?>

    <p>
      <a class="button" href="<?php echo wp_logout_url( get_the_permalink() ); ?>">
        <?php _e( 'Logout', 'wptags' ) ?>
      </a>
    </p>

  <?php endif; ?>

  <h3><?php _e( 'Site Authors', 'wptags' ); ?></h3>
  <?php wp_list_authors(); ?>

  <?php dynamic_sidebar( 'main-sidebar' ); ?>

</aside>
