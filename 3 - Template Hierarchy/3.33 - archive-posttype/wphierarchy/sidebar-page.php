<?php
if( ! is_active_sidebar( 'page-sidebar' ) ) {
  return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">

  <?php dynamic_sidebar( 'page-sidebar' ); ?>

</aside>
