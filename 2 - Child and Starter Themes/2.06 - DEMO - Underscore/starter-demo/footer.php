<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starter_Theme_Demo
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'starter-demo' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'starter-demo' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'starter-demo' ), 'starter-demo', '<a href="https://automattic.com/" rel="designer">Zac Gordon</a>' ); ?>
		</div><!-- .site-info -->
    <div class="custom-footer">
      <?php esc_html_e( 'Custom footer text', 'starter-demo' ); ?>
    </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
