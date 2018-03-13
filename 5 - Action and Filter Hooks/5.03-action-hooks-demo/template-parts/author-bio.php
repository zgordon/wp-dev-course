<div class="author-bio">

  <h2>
    <?php the_author_posts_link(); ?>
  </h2>

  <?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?>

  <p><?php the_author_meta( 'description' ) ?></p>

  <?php if( current_user_can( 'edit_users' ) ): ?>
    <p>
      <a href="<?php echo get_edit_user_link( get_the_author_meta( 'ID' ) ); ?>">
        <?php _e( 'Edit User', 'wptags' ); ?>
      </a>
    </p>
  <?php endif; ?>

</div>
