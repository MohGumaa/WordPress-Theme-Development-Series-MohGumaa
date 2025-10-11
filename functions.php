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
		// Add title
		add_theme_support('title-tag'); 

		// Add Custom logo
		add_theme_support('custom-logo');

		// Add widgets
		add_theme_support('widgets');
		remove_theme_support( 'widgets-block-editor' );

		// Add Feature image with custom size
		add_theme_support('post-thumbnails');
		add_image_size('blog-small-crop', 300, 200, true);
		add_image_size('blog-small', 400, 400, false);

		// Add menu
		register_nav_menus(array(
			'primary_menu'   => __('Primary Menu', 'mytheme'),
			'secondary_menu'   => __('Secondary Menu', 'mytheme'),
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
 * Sidebar
 */
function theme_register_sidebar() {
	register_sidebar(array(
		'name'          => __('Blog Sidebar', 'mytheme'),
		'id'            => 'blog-sidebar',
		'description'   => __('Widgets area for the post sidebar', 'mytheme'),
		'before_widget' => '<div class="bg-gradient-to-br from-white to-gray-50/50 rounded-lg shadow-sm border border-gray-200/60 p-3 widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title text-xl font-bold text-gray-900 capitalize mb-6">',
		'after_title'   => '</h3>'
	));

	register_sidebar(array(
		'name'          => __('Main Sidebar', 'mytheme'),
		'id'            => 'main-sidebar',
		'description'   => __('Widgets area for the post sidebar', 'mytheme'),
		'before_widget' => '<div class="bg-gradient-to-br from-white to-gray-50/50 rounded-lg shadow-sm border border-gray-200/60 p-3 widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title text-xl font-bold text-gray-900 capitalize mb-6">',
		'after_title'   => '</h3>'
	));
}
add_action('widgets_init', 'theme_register_sidebar');


/**
 * Tailwind Custom CSS
 */
require get_template_directory() . '/inc/tailwind-custom-css.php';


/**
 * Create Custom Post Type
 */
require get_template_directory() . '/inc/mytheme-custom-post-type.php';