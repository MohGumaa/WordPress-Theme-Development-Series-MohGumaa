<?php get_header() ;?>
  <main class="flex-1">
    <div class="container mx-auto py-12 px-6">

    <?php if ( have_posts() ): ?>

      <div class="mb-12">
        <h1 class="text-4xl font-semibold tracking-tight text-pretty bg-gradient-to-r from-gray-800 to-gray-600 bg-clip-text text-transparent sm:text-5xl text-center">
          <?php the_archive_title(); ?>
        </h1>
      </div>

      <div class="grid md:grid-cols-3 gap-8">
        <?php 
          while ( have_posts() ) : 
            the_post();
            get_template_part( 'template-parts/content', 'courses' );
          endwhile;
        ?>
      </div>

      <div class="mt-16 flex justify-center [&_a]:text-lg [&_a]:text-gray-700 [&_a]:font-medium [&_a]:hover:text-sky-500">
        <?php 
          previous_posts_link();
          next_posts_link();
        ?>
      </div>

    <?php else : ?>
      <?php get_template_part( 'template-parts/content', 'none' ); ?>
    <?php endif; ?>

    </div>
  </main>
<?php get_footer(); ?>
