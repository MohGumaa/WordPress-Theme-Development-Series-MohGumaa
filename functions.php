<?php 
/**
 * My theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package my-theme
 */
if ( ! defined( 'CB_VERSION' ) ) {
	define( 'CB_VERSION', '0.1.0' );
}

if ( ! function_exists( 'my_theme_setup' ) ) :
	function my_theme_setup() {
		add_theme_support('title-tag'); 
		add_theme_support('custom-logo'); 

		register_nav_menus(array(
			'main_menu'   => __('Main Menu', 'mytheme'),
			'footer_menu' => __('Footer Menu', 'mytheme'),
		));
	}
endif;
add_action( 'after_setup_theme', 'my_theme_setup' );


/**
 * Enqueue scripts and styles.
 */
function my_theme_scripts() {
	// default stylesheet
	wp_enqueue_style( 'mytheme-style', get_stylesheet_uri(), array(), CB_VERSION );

	// enqueue custom JS
	wp_enqueue_script( 'mytheme-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), CB_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );

/**
 * Tailwind Custom CSS
 */
require get_template_directory() . '/inc/tailwind-custom-css.php';