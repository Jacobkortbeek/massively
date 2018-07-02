<?php get_header(); ?>



				<!-- Main -->
					<div id="main">

						<?php

						  $num_posts = get_option( 'posts_per_page' );

							if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
							elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
							else { $paged = 1; }

						  $args = array(
						    'post_type' => 'post',
						    'posts_per_page' => $num_posts,
								'orderby' => 'post_date',
								'paged' => $paged

						  );

						  $query = new WP_Query( $args );

						?>


								<?php $i=0; if( $query->have_posts() ) : ?>

									<!-- add pagination functions here -->

									<?php while( $query->have_posts() ) : $query->the_post(); ?>
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

											<!-- add pagination functions here -->

								<?php endif; endwhile; ?>
								</section>
								<!-- Footer -->
									<footer>
								<div class="pagination">
								<?php echo paginate_links(array(
									'total' => $query->max_num_pages,
									'current' => $paged,
									'prev_text' => 'Previous',
									'next_text' => 'Next'
								)); ?>
							</div>

							<?php endif; wp_reset_postdata(); ?>
							</footer>
					</div>

				<!-- Footer -->


<?php get_footer(); ?>
