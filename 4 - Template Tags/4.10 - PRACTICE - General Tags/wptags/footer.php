
  </div><!-- #content -->

  <footer id="colophon" class="site-footer" role="contentinfo">

    &copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>

    <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wptags' ) ); ?>">
      <?php printf( esc_html__( 'Proudly powered by %s', 'wptags' ), 'WordPress' ); ?>
    </a>

  </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
