<?php get_header() ;?>
  <main>
    <div class="container mx-auto py-10">
      <h1 class="font-bold text-5xl"><?php the_title();?></h1>
      <div class="py-2">
        <?php the_content(); ?>
      </div>
    </div>
  </main>
<?php get_footer(); ?>