<?php
if ( ! is_active_sidebar( 'portfolio-sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'portfolio-sidebar' ); ?>
</aside><!-- #secondary -->
