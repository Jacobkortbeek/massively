<?php
  add_theme_support( 'menus' );
  add_theme_support( 'post-thumbnails' );

  function wpsites_exclude_latest_post( $query ) {
	if ( $query->is_front_page() && $query->is_main_query() ) {
		$query->set( 'offset', '1' );
	}
}

add_action( 'pre_get_posts', 'wpsites_exclude_latest_post', 1 );


  function pagination_bar() {
    global $wp_query;

    $total_pages = $wp_query->max_num_pages;

    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
  }

  function register_theme_menus() {
    register_nav_menus(
      array(
        'primary-menu' => __( 'Primary Menu' )
      )
    );
  }
  add_action( 'init', 'register_theme_menus' );

  if( function_exists('acf_add_options_page') ) {

      acf_add_options_page(array(
  		'page_title' 	=> 'Theme General Settings',
  		'menu_title'	=> 'Theme Settings',
  		'menu_slug' 	=> 'theme-general-settings',
  		'capability'	=> 'edit_posts',
  		'redirect'		=> false
  	));

  }

  function wpt_theme_styles() {
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'main_pretheme_file', get_template_directory_uri() . '/assets/css/main.css' );
    wp_enqueue_style( 'noscript', get_template_directory_uri() . '/assets/css/noscript.css' );
    wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );
  }
  add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );

  function wpt_theme_js() {
    wp_enqueue_script( 'breakpoint', get_template_directory_uri() . '/assets/js/breakpoints.min.js', array('jquery'), ' ', true);
    wp_enqueue_script( 'browser_js', get_template_directory_uri() . '/assets/js/browser.min.js', array('jquery'), ' ', true );
    wp_enqueue_script( 'jqscrollex_js', get_template_directory_uri() . '/assets/js/jquery.scrollex.min.js', array('jquery'), ' ', true );
    wp_enqueue_script( 'jqscrolly_js', get_template_directory_uri() . '/assets/js/jquery.scrolly.min.js', array('jquery'), ' ', true );
    wp_enqueue_script( 'main_js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), ' ', true );
    wp_enqueue_script( 'util_js', get_template_directory_uri() . '/assets/js/util.js', array('jquery'), ' ', true );



  }
  add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );
?>
