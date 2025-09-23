<?php get_header() ;?>
  <main class="flex-1">
    <div class="container mx-auto py-16 px-6">

    <!-- Main Layout with Sidebar -->
    <div class="flex flex-col lg:flex-row gap-12">

      <!-- Main Content Area -->
      <div class="flex-1 lg:w-2/3">
      
        <?php if ( have_posts() ): ?>

          <div class="text-left mb-12">
            <h1 class="mb-4 text-4xl xl:text-5xl font-bold bg-gradient-to-r from-gray-800 to-gray-600 bg-clip-text text-transparent">
              <?php single_cat_title(); ?>
            </h1>
            <div class="w-24 h-1 bg-gradient-to-r from-theme-green to-theme-green-80 rounded-full"></div>

            <?php 
            // Display category description if available
            $category_description = category_description();
            if ( ! empty( $category_description ) ) :
            ?>
              <div class="mt-6 text-gray-600 leading-relaxed text-lg" dir="auto">
                <?php echo $category_description; ?>
              </div>
            <?php endif; ?>
          </div>

          <div class="space-y-8">
            <?php 
              while ( have_posts() ) : 
                the_post();
                get_template_part( 'template-parts/content', 'excerpt' );
              endwhile;
            ?>
          </div>

          <div class="mt-16 flex justify-center [&_.nav-links]:flex [&_.nav-links]:items-center [&_.nav-links]:gap-4 [&_.nav-links]:text-lg [&_.nav-links]:text-gray-700 [&_.nav-links]:font-medium [&_.page-numbers:not(.current)]:hover:text-sky-500">
            <?php 
              the_posts_pagination(
                array(
                  'mid_size'  => 2,
                  'prev_text' => __( '← Previous', '_tw' ),
                  'next_text' => __( 'Next →', '_tw' ),
                  'class' => 'pagination-enhanced'
                )
              );
            ?>
          </div>

        <?php else : ?>
          <?php get_template_part( 'template-parts/content', 'none' ); ?>
        <?php endif; ?>

      </div>


      </aside>

    </div>

    </div>
  </main>
<?php get_footer(); ?>
