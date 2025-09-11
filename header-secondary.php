<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Tailwind CDN -->
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

  <?php wp_head(); ?>
</head>
<body <?php body_class('antialiased font-sans min-h-screen bg-background flex flex-col'); ?>>
  
<header class="bg-black backdrop-blur-md text-white shadow-sm relative z-50">
  <div class="container mx-auto px-6 py-4 flex items-center justify-between gap-4">
    <?php 
      if ( has_custom_logo() ) {
        the_custom_logo();
      } else {
        echo '<h1 class="text-xl font-bold">'. get_bloginfo('name') .'</h1>';
      }
    ?>

    <!-- Menu -->
     <?php 
      wp_nav_menu(
        array(
          'theme_location' => 'secondary_menu',
          'container' => 'nav',
          'container_class' => 'flex-1',
          'menu_class' => 'flex items-center justify-end gap-4 font-medium text-lg'
        )
      );
    ?>

  </div>
</header>
<div id="content" class="full-content">