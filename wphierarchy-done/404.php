<?php get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <article class="post">

        <header class="entry-header">

          <h1><?php echo esc_html__( 'Oh no!', 'wphierarchy' ); ?></h1>

        </header>

        <p><?php echo esc_html__( 'This content was not found!  Please try looking through our list of pages or using the search', 'wphierarchy' ); ?></p>

        <p><?php echo get_search_form(); ?></p>

      </article>

    </main>
  </div>

<?php get_sidebar( 'page' ); ?>
<?php get_footer(); ?>
