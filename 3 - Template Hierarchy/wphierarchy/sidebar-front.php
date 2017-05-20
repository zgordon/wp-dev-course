<?php
if ( ! is_active_sidebar( 'front-sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'front-sidebar' ); ?>
</aside><!-- #secondary -->
