<?php get_header(); ?>

<p>Do not use, use front page</p>

<?php

  $num_posts = get_option( 'posts_per_page' );

  $args = array(
    'post_type' => 'post',
    'posts_per_page' => $num_posts,
    'orderby' => 'post_date'
  );

  $query = new WP_Query( $args );

?>


    <?php $i=0; if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
      <?php if($i==0): ?>
        <!-- Featured Post -->
        <?php echo "$i"; ?>
          <article class="post">
            <header class="major">
              <span class="date"><?php the_date('Y-m-d'); ?> i is 0</span>
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <p><?php the_excerpt(); ?></p>
            </header>
            <a href="<?php the_permalink(); ?>" class="image main"><?php the_post_thumbnail( 'medium' ); ?></a>
            <ul class="actions special">
              <li><a href="#" class="button large">Full Story</a></li>
            </ul>
          </article>
          <section class="posts">
      <?php $i++; else: ?>
        <!-- posts -->
          <article>
            <header>
              <span class="date"><?php the_date('Y-m-d'); ?> test</span>
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </header>
            <a href="<?php the_permalink(); ?>" class="image fit"><?php the_post_thumbnail( 'medium' ); ?></a>
            <p><?php the_excerpt(); ?></p>
            <ul class="actions special">
              <li><a href="<?php the_permalink(); ?>" class="button">Full Story</a></li>
            </ul>
          </article>

    <?php endif; endwhile; endif; wp_reset_postdata(); ?>
  </section>

  <nav class="pagination">
    <?php pagination_bar(); ?>
  </nav>

<?php get_footer(); ?>
