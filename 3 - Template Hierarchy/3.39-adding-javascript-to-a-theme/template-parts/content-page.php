<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

  <header class="entry-header">

    <?php the_title( '<h1>', '</h1>' ); ?>

  </header>

  <div class="entry-content">

    <?php the_content(); ?>

  </div>

</article>
