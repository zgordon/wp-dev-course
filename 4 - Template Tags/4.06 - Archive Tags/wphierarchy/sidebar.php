<?php
if( ! is_active_sidebar( 'main-sidebar' ) ) {
  return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">

  <?php
    $args = [
      'type'  => 'weekly',
      'limit' => 10,
      'show_post_count' => true,
      'order' => 'ASC'
    ];
    wp_get_archives( $args );
  ?>

  <?php dynamic_sidebar( 'main-sidebar' ); ?>

</aside>
