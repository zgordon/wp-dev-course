<div id="<?php comment_ID(); ?>" <?php comment_class(); ?>>

  <?php echo get_avatar( get_comment_author_email() ); ?>

  <?php comment_author_link(); ?>

  <?php
    esc_html_e(
      sprintf(
        'Posted on %s @ %s',
        get_comment_date( 'm.d.y' ),
        get_comment_time( )
      ),
      'wptags'
    );
  ?>

  <?php comment_text(); ?>

  <?php
    $args = [
      'depth' => 1,
      'max_depth' => 3,
    ];
    comment_reply_link( $args );
  ?>

</div>
