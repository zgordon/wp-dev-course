<?php

if ( post_password_required() ) {
	return;
}

?>

<div id="comments">

  <?php if( have_comments() ): ?>

    <?php
      $comments_total = get_comments_number( $post->ID );
      if( 1 == $comments_total ):
    ?>

      <h2><?php esc_html_e( '1 Comment', 'wptags' ); ?></h2>

    <?php else: ?>

      <h2><?php esc_html_e( $comments_total . ' Comments', 'wptags' ); ?></h2>

    <?php endif; ?>

    <?php
      $args = [
        'callback' => 'wptags_comment'
      ];
      wp_list_comments( $args );
      paginate_comments_links();
    ?>


  <?php endif; ?>

  <?php comment_form(); ?>

</div>
