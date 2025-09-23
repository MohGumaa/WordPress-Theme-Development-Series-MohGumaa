<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Tailwind CDN -->
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

  <?php wp_head(); ?>
</head>
<body <?php body_class('antialiased font-sans min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 flex flex-col'); ?>>
  
<header class="bg-gradient-to-r from-theme-green to-theme-green-80 backdrop-blur-md text-white shadow-xl relative z-50 border-b border-white/10">
  <div class="container mx-auto px-6 py-4 flex items-center justify-between gap-4">
    <!-- Logo -->
    <?php 
      if ( has_custom_logo() ) {
        the_custom_logo();
      } else {
        echo '<h1 class="text-2xl font-bold bg-gradient-to-r from-white to-green-100 bg-clip-text text-transparent">'. get_bloginfo('name') .'</h1>';
      }
    ?>
    
    <!-- Menu -->
    <?php 
      wp_nav_menu(
        array(
          'theme_location' => 'primary_menu',
          'container' => 'nav',
          'container_class' => 'flex-1',
          'menu_class' => 'flex items-center justify-end gap-4 font-medium text-lg'
        )
      );
    ?>
  </div>
</header>
<div id="content" class="full-content">