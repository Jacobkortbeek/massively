<?php
  add_theme_support( 'menus' );
  add_theme_support( 'post-thumbnails' );

  function pagination_bar() {

    // global $wp_query;
    // $published_posts = wp_count_posts()->publish;
    // $posts_per_page = get_option('posts_per_page');
    //
    // $total_pages = ceil($published_posts / $posts_per_page);;
    //
    // if ($total_pages > 1){
    //     $current_page = max(1, get_query_var('paged'));
    //
    //     echo paginate_links(array(
    //         'base' => get_pagenum_link(1) . '%_%',
    //         'format' => '/page/%#%',
    //         'current' => $current_page,
    //         'total' => $total_pages,
    //     ));
    // }




    $total = ceil($published_posts / $posts_per_page);;
    // only bother with the rest if we have more than 1 page!
    if ( $total > 1 )  {
         // get the current page
         if ( !$current_page = get_query_var('paged') )
              $current_page = 1;
         // structure of "format" depends on whether we're using pretty permalinks
         if( get_option('permalink_structure') ) {
    	     $format = '&paged=%#%';
         } else {
    	     $format = 'page/%#%/';
         }
         echo paginate_links(array(
              'base'     => get_pagenum_link(1) . '%_%',
              'format'   => $format,
              'current'  => $current_page,
              'total'    => $total,
              'mid_size' => 4,
              'type'     => 'list'
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
