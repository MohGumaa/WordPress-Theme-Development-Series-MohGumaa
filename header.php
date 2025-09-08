<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Tailwind CDN -->
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

  <?php wp_head(); ?>
</head>
<body <?php body_class('bg-gray-100 antialiased font-sans min-h-screen flex flex-col'); ?>>
  
<header class="bg-theme-green text-white py-4 shadow-md">
  <div class="container mx-auto flex justify-between items-center">
    <h1 class="text-xl font-semibold text-green-100"><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
  </div>
</header>
<div id="content" class="full-content">