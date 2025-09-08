<?php get_header() ;?>
  <main>
    <div class="container mx-auto py-12">
      <h1 class="font-bold text-5xl mb-6"><?php the_title();?></h1>
      <?php get_template_part( 'template-parts/content', 'page' ); ?>
    </div>
  </main>
<?php get_footer(); ?>