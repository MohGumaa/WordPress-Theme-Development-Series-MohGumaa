<?php 
/**
 * Template Name: Contact Page
 * 
 */?>
<?php get_header() ;?>
  <main>
    <div class="container mx-auto py-12">
      <div class="grid grid-cols-1 lg:grid-cols-2">
        <div>
          <h1 class="font-bold text-5xl mb-6"><?php the_title();?></h1>
        </div>
        <div class="md:text-lg">
          <?php get_template_part( 'template-parts/content', 'page' ); ?>
        </div>
      </div>
    </div>
  </main>
<?php get_footer(); ?>