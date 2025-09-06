<?php
/**
 * Tailwind Custom CSS Loader
 */

function mytheme_tailwind_custom_css_from_file() {
  $file = get_template_directory() . '/assets/css/tailwind-custom.css';

  if ( file_exists( $file ) ) {
    echo '<style type="text/tailwindcss">' . file_get_contents( $file ) . '</style>';
  }
}
add_action( 'wp_head', 'mytheme_tailwind_custom_css_from_file' );
