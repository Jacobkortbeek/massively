<?php get_header(); ?>

<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<div id="intro" class="">
						<h1><?php the_field( 'hero_heading' ); ?></h1>
						<p><?php the_field( 'hero_sub-headin' ); ?></p>
						<ul class="actions">
							<li><a href="#header" class="button icon solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>

				<!-- Header -->
					<header id="header">
						<a href="index.html" class="logo"><?php the_field( 'logo_text' ); ?></a>
					</header>

				<!-- Nav -->
				<!-- make this the main nav on the wordpress menu -->
					<nav id="nav">
						<?php

				      $defaults = array(
				        'container' => 'ul',
				        'theme_location' => 'primary-menu',
				        'menu_class' => 'links'
				      );

				      wp_nav_menu( $defaults );

				    ?>
						<!-- <ul class="links">
							<li class="active"><a href="index.html">This has changed</a></li>
							<li><a href="generic.html">Generic Page</a></li>
							<li><a href="elements.html">Elements Reference</a></li>
						</ul> -->
						<ul class="icons">
							<!-- twitter -->
							<?php $twitter = get_field('twitter', 'options');
								if( $twitter ): ?>
									<li><a href="<?php the_field('twitter', 'options'); ?>" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<?php endif; ?>
							<!-- Facebook -->
							<?php $facebook = get_field('facebook', 'options');
								if( $facebook ): ?>
									<li><a href="<?php the_field('facebook', 'options'); ?>" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<?php endif; ?>
							<!-- Instagram -->
							<?php $instagram = get_field('instagram', 'options');
								if( $instagram ): ?>
									<li><a href="<?php the_field('instagram', 'options'); ?>" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<?php endif; ?>
							<!-- github -->
							<?php $github = get_field('github', 'options');
								if( $github ): ?>
									<li><a href="<?php the_field('github', 'options'); ?>" class="icon fa-github"><span class="label">github</span></a></li>
							<?php endif; ?>
						</ul>
					</nav>

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
								'page' => $paged

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
					<footer id="footer">
						<section>
							<form method="post" action="#">
								<div class="fields">
									<div class="field">
										<label for="name">Name</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="3"></textarea>
									</div>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Send Message" /></li>
								</ul>
							</form>
						</section>
						<section class="split contact">
							<section class="alt">
								<h3>Address</h3>
								<p><?php the_field( 'business_address', 'options' ); ?></p>
							</section>
							<section>
								<h3>Phone</h3>
								<p><a href="tel:<?php the_field( 'phone_number', 'options' ); ?>"><?php the_field( 'phone_number', 'options' ); ?></a></p>
							</section>
							<section>
								<h3>Email</h3>
								<p><a href="mailto:<?php the_field( 'email', 'options' ); ?>"><?php the_field( 'email', 'options' ); ?></a></p>
							</section>
							<section>
								<h3>Social</h3>
								<ul class="icons alt">
									<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
									<!-- twitter -->
									<?php $twitter = get_field('twitter', 'options');
										if( $twitter ): ?>
											<li><a href="<?php the_field('twitter', 'options'); ?>" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
									<?php endif; ?>
									<!-- Facebook -->
									<?php $facebook = get_field('facebook', 'options');
										if( $facebook ): ?>
											<li><a href="<?php the_field('facebook', 'options'); ?>" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
									<?php endif; ?>
									<!-- Instagram -->
									<?php $instagram = get_field('instagram', 'options');
										if( $instagram ): ?>
											<li><a href="<?php the_field('instagram', 'options'); ?>" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
									<?php endif; ?>
									<!-- github -->
									<?php $github = get_field('github', 'options');
										if( $github ): ?>
											<li><a href="<?php the_field('github', 'options'); ?>" class="icon fa-github"><span class="label">github</span></a></li>
									<?php endif; ?>
								</ul>
							</section>
						</section>
					</footer>

				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
					</div>

			</div>

<?php get_footer(); ?>
