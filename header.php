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
  
<header class="bg-theme-green backdrop-blur-md text-white shadow-sm relative z-50">
  <div class="container mx-auto px-6 py-4 flex items-center justify-between gap-4">
    <h1 class="text-xl font-semibold text-green-100"><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
  </div>
</header>
<div id="content" class="full-content">