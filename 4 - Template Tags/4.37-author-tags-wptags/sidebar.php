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

  <h3><?php _e( 'List Authors', 'wptags' ); ?></h3>
  <?php wp_list_authors(); ?>


  <h3><?php _e( 'Dropdown Authors', 'wptags' ); ?></h3>
  <form action="<?php bloginfo( 'url' ); ?>" method="get">
    <?php wp_dropdown_users( [ 'name' => 'author' ] ); ?>
    <input type="submit" name="submit" value="View" />
  </form>

  <?php dynamic_sidebar( 'main-sidebar' ); ?>

</aside>
