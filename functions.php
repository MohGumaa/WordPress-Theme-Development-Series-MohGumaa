<?php 

function mytheme_setup() {
  add_theme_support('title-tag');      
}
add_action('after_setup_theme', 'mytheme_setup');

function mytheme_enqueue_files() {
  // Enqueue default stylesheet
  wp_enqueue_style(
    'mytheme-style',
    get_stylesheet_uri()
  );

  // Enqueue custom stylesheet
  wp_enqueue_style(
    'mytheme-custom-style',
    get_template_directory_uri() . '/assets/css/style.css',
    array(),
    '1.0'
  );

  // Enqueue jQuery
  wp_enqueue_script('jquery');

  wp_enqueue_script(
    'tailwindcss-browser',
    'https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4',
    array(),
    '4.0',
    false // Load in header
  );

  // Enqueue custom JavaScript
  wp_enqueue_script(
    'mytheme-main-js',
    get_template_directory_uri() . '/assets/js/main.js',
    array('jquery'), 
    '1.0',
    false 
  );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_files');

// Function to add Tailwind CSS to the header
function mytheme_add_tailwind_css() {
  ?>
  <style type="text/tailwindcss">
    @theme {
      --color-theme-green: #2f855a;
      --color-theme-green-80: #276749;
    }
    /* Utilities Class */
    .full-content {
      @apply flex w-full min-w-0 grow flex-col;
    }
  </style>
  <?php
}
add_action('wp_head', 'mytheme_add_tailwind_css');