<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>
</head>
<body <?php body_class('bg-gray-100 antialiased font-sans max-w-screen min-h-svh flex flex-col'); ?>>
  <?php wp_body_open(); ?>
  
<header class="lg:px-16 px-8 bg-theme-green text-white shadow-md py-4 md:py-0">
  <div class="container mx-auto flex flex-wrap items-center justify-between">
    <h1 class="text-xl font-semibold text-green-100 hover:text-white tracking-norma"><?php bloginfo('name'); ?></h1>
    <p class="md:px-4 py-2 md:py-4 px-0 block text-green-100 hover:text-white md:hover:bg-green-800 font-medium"><?php bloginfo('description'); ?></p>
  </div>
</header>

<div id="content" class="full-content">
