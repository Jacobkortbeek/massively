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

						  $num_posts = ( is_front_page() ) ? 20 : -1;

						  $args = array(
						    'post_type' => 'post',
						    'posts_per_page' => $num_posts,
								'orderby' => 'post_date'
						  );

						  $query = new WP_Query( $args );

						?>




						<!-- Featured Post -->
							<article class="post">
								<header class="major">
									<span class="date">April 25, 2017</span>
									<h2><a href="#">And this is a<br />
									massive headline</a></h2>
									<p>Aenean ornare velit lacus varius enim ullamcorper proin aliquam<br />
									facilisis ante sed etiam magna interdum congue. Lorem ipsum dolor<br />
									amet nullam sed etiam veroeros.</p>
								</header>
								<a href="#" class="image main"><img src="images/pic01.jpg" alt="" /></a>
								<ul class="actions special">
									<li><a href="#" class="button large">Full Story</a></li>
								</ul>
							</article>

								<!-- TEST -->
								<?php $i=0; if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
									<?php if($i==0): ?>
										<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<?php else: ?>
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

								<?php $i++; endif; endwhile; endif; wp_reset_postdata(); ?>



						<!-- Posts -->
						<section class="posts">
							<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
							<article class="resr">
								<header>
									<span class="date"><?php the_date('Y-m-d'); ?></span>
									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								</header>
								<a href="<?php the_permalink(); ?>" class="image fit"><?php the_post_thumbnail( 'medium' ); ?></a>
								<p><?php the_excerpt(); ?></p>
								<ul class="actions special">
									<li><a href="<?php the_permalink(); ?>" class="button">Full Story</a></li>
								</ul>
							</article>

							<?php endwhile; endif; wp_reset_postdata(); ?>
						</section>

							<section class="posts">
								<article>
									<header>
										<span class="date">April 24, 2017</span>
										<h2><a href="#">Sed magna<br />
										ipsum faucibus</a></h2>
									</header>
									<a href="#" class="image fit"><img src="images/pic02.jpg" alt="" /></a>
									<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
									<ul class="actions special">
										<li><a href="#" class="button">Full Story</a></li>
									</ul>
								</article>
								<article>
									<header>
										<span class="date">April 22, 2017</span>
										<h2><a href="#">Primis eget<br />
										imperdiet lorem</a></h2>
									</header>
									<a href="#" class="image fit"><img src="images/pic03.jpg" alt="" /></a>
									<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
									<ul class="actions special">
										<li><a href="#" class="button">Full Story</a></li>
									</ul>
								</article>
								<article>
									<header>
										<span class="date">April 18, 2017</span>
										<h2><a href="#">Ante mattis<br />
										interdum dolor</a></h2>
									</header>
									<a href="#" class="image fit"><img src="images/pic04.jpg" alt="" /></a>
									<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
									<ul class="actions special">
										<li><a href="#" class="button">Full Story</a></li>
									</ul>
								</article>
								<article>
									<header>
										<span class="date">April 14, 2017</span>
										<h2><a href="#">Tempus sed<br />
										nulla imperdiet</a></h2>
									</header>
									<a href="#" class="image fit"><img src="images/pic05.jpg" alt="" /></a>
									<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
									<ul class="actions special">
										<li><a href="#" class="button">Full Story</a></li>
									</ul>
								</article>
								<article>
									<header>
										<span class="date">April 11, 2017</span>
										<h2><a href="#">Odio magna<br />
										sed consectetur</a></h2>
									</header>
									<a href="#" class="image fit"><img src="images/pic06.jpg" alt="" /></a>
									<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
									<ul class="actions special">
										<li><a href="#" class="button">Full Story</a></li>
									</ul>
								</article>
								<article>
									<header>
										<span class="date">April 7, 2017</span>
										<h2><a href="#">Augue lorem<br />
										primis vestibulum</a></h2>
									</header>
									<a href="#" class="image fit"><img src="images/pic07.jpg" alt="" /></a>
									<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
									<ul class="actions special">
										<li><a href="#" class="button">Full Story</a></li>
									</ul>
								</article>
							</section>

						<!-- Footer -->
							<footer>
								<div class="pagination">
									<!--<a href="#" class="previous">Prev</a>-->
									<a href="#" class="page active">1</a>
									<a href="#" class="page">2</a>
									<a href="#" class="page">3</a>
									<span class="extra">&hellip;</span>
									<a href="#" class="page">8</a>
									<a href="#" class="page">9</a>
									<a href="#" class="page">10</a>
									<a href="#" class="next">Next</a>
								</div>
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
								<p>1234 Somewhere Road #87257<br />
								Nashville, TN 00000-0000</p>
							</section>
							<section>
								<h3>Phone</h3>
								<p><a href="#">(000) 000-0000</a></p>
							</section>
							<section>
								<h3>Email</h3>
								<p><a href="#">info@untitled.tld</a></p>
							</section>
							<section>
								<h3>Social</h3>
								<ul class="icons alt">
									<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
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
