<?php get_header() ;?>
  <main>
    <div class="container mx-auto py-12">

    <?php if ( have_posts() ): ?>

      <h1 class="mb-5 text-4xl font-bold text-gray-900">
        <?php 
        // single_cat_title(); 
        the_archive_title();
        ?>
      </h1>

      <div class="grid gird-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php 
          while ( have_posts() ) : 
            the_post();

            get_template_part( 'template-parts/content', 'excerpt' );
          endwhile;
        ?>
      </div>

      <!-- Pagination  -->
      <?php 
        // previous_posts_link();
        // next_posts_link();

         the_posts_pagination(
          array(
            'mid_size'  => 2,
            'prev_text' => __( 'Prev', '_tw' ),
            'next_text' => __( 'Next', '_tw' ),
          )
        );
      ?>

    <?php else : ?>
      <?php get_template_part( 'template-parts/content', 'none' ); ?>
    <?php endif; ?>

    </div>
  </main>
<?php get_footer(); ?>