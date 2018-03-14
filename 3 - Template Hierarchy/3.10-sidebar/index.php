<?php get_header(); ?>

  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

      <article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

        <header class="entry-header">

          <h1>index.php</h1>

        </header>

        <div class="entry-content">

          <p>Lorem.</p>

        </div>

      </article>

    </main>

  </div>

  <?php get_sidebar( 'splash' ); ?>

<?php get_footer(); ?>
