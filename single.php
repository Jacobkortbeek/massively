<?php get_header(); ?>

<div id="main">






  <!-- Post -->
    <section class="post">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <header class="major">
          <span class="date"><?php the_date('Y-m-d'); ?></span>
          <h1><?php the_title(); ?></h1>
          <p><?php the_excerpt(); ?></p>
        </header>
        <div class="image main"><?php the_post_thumbnail( 'full' ); ?></div>
        <p><?php the_content(); ?></p>
      <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no pages found.' ); ?>
      <?php endif; ?>
</div>

<?php get_footer(); ?>
