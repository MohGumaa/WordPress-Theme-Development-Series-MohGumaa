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

if ( ! function_exists( 'cb_setup' ) ) :

	function cb_setup() {
		
	}
endif;
add_action( 'after_setup_theme', 'cb_setup' );