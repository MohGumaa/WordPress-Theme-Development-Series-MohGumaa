<?php 
/**
 * My theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package my-theme
 */
if ( ! defined( 'CB_VERSION' ) ) {
	/*
	 * Set the theme’s version number.
	 */
	define( 'CB_VERSION', '0.1.0' );
}

if ( ! function_exists( 'my_theme_setup' ) ) :
	function my_theme_setup() {
		add_theme_support('title-tag'); 
	}
endif;
add_action( 'after_setup_theme', 'my_theme_setup' );

/**
 * Enqueue scripts and styles.
 */
function my_theme_scripts() {
	wp_enqueue_style( 'mytheme-style', get_stylesheet_uri(), array(), CB_VERSION );
	wp_enqueue_style( 'mytheme--custom-style', get_template_directory_uri() . '/assets/css/style.css', array(), CB_VERSION );

  wp_enqueue_script('jquery');
	wp_enqueue_script( 'mytheme-script', get_template_directory_uri() . '/assets/js/main.js', array(), CB_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );