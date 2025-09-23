<?php get_header() ;?>
  <main class="flex-1">
    <div class="container mx-auto py-12 px-6">

    <?php if ( have_posts() ): ?>

      <div class="mb-12">
        <h1 class="text-4xl font-semibold tracking-tight text-pretty bg-gradient-to-r from-gray-800 to-gray-600 bg-clip-text text-transparent sm:text-5xl">
          <?php single_cat_title(); ?>
        </h1>
        <p class="mt-2 text-lg/8 text-gray-500">Learn how to grow your business with our expert advice.</p>
      </div>

      <div class="space-y-8">
        <?php 
          while ( have_posts() ) : 
            the_post();
            get_template_part( 'template-parts/content', 'excerpt' );
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
