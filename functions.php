<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( ! function_exists( 'neve_child_load_css' ) ):
	/**
	 * Load CSS file.
	 */
	function neve_child_load_css() {
		wp_enqueue_style( 'neve-child-style', trailingslashit( get_stylesheet_directory_uri() ) . './stylesheets/style.css', array( 'neve-style' ), NEVE_VERSION );
	}
endif;
add_action( 'wp_enqueue_scripts', 'neve_child_load_css', 20 );


// Create Custom Post Types

// -------- A B O U T   M E --------//
function create_custom_post_types_1() {
  register_post_type( 'about',
    array(
      'labels' => array(
          'name' => __( 'About' ),
          'singular_name' => __( 'About Post' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array( 'slug' => 'about' ),
      )
    );
}

// -------- S E R V I C E S --------//
function create_custom_post_types_2() {
  register_post_type( 'services',
    array(
      'labels' => array(
          'name' => __( 'Services' ),
          'singular_name' => __( 'Services Post' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array( 'slug' => 'services' ),
      )
    );
}

// -------- T E S T I M O N I A L S --------//
function create_custom_post_types_3() {
  register_post_type( 'testimonials',
    array(
      'labels' => array(
          'name' => __( 'Testimonials' ),
          'singular_name' => __( 'Testimonials Post' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array( 'slug' => 'testimonials' ),
      )
    );
}


// Hook up Custom Post Types to WP Function
add_action( 'init', 'create_custom_post_types_1' );
add_action( 'init', 'create_custom_post_types_2' );
add_action( 'init', 'create_custom_post_types_3' );


// Remove 'Archive' from Site Title //
function prefix_category_title( $title ) {
  if(is_archive('slug-of-your-custom-post-type')){
    $title = single_cat_title( '', false );
  }
  return $title;
}
add_filter( 'get_the_archive_title', 'prefix_category_title' );