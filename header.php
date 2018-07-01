<!doctype html>
<html lang="en">
  <head>
    <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <?php wp_head(); ?>
  </head>
<body class="is-preload">
  <!-- Wrapper -->
  			<div id="wrapper" class="fade-in">

  				<!-- Intro -->
  					<div id="intro" class="">
              <!-- if is front page -->
              <?php if( is_front_page() ) : ?>
  						<h1><?php the_field( 'hero_heading' ); ?></h1>
  						<p><?php the_field( 'hero_sub-headin' ); ?></p>
  						<ul class="actions">
  							<li><a href="#header" class="button icon solo fa-arrow-down scrolly">Continue</a></li>
  						</ul>
              <!-- Elseif single.php -->
            <?php elseif( is_single() ): ?>

              <!-- blog title and exerpt -->
              <h1>This is the single php file</h1>
              <!-- endif -->
            <?php endif; ?>
  					</div>

  				<!-- Header -->
  					<header id="header">
              <!-- if is front page -->
  						<a href="index.html" class="logo"><?php the_field( 'logo_text' ); ?></a>
              <!-- Elseif single.php -->

              <!-- blog title and exerpt -->
              <!-- endif -->
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
