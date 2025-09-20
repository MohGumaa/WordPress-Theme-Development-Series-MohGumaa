<?php get_header() ;?>
  <main>
    <div class="container mx-auto py-10">
      
      <?php if ( have_posts() ) :?>
      <h1 class="mb-5 text-4xl font-bold text-gray-900">
        <?php 
        single_cat_title(); 
        // the_archive_title();
        ?>
      </h1>

        <div class="grid lg:grid-cols-12 gap-6">
          
          <div class="col-span-full lg:col-span-9 space-y-6">
            <?php 
              while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/content', 'excerpt' );
              endwhile; 
            ?>
            <?php previous_posts_link();?>
            <?php next_posts_link();?>
          </div>

          <div class="col-span-full lg:col-span-3">
            <p>Sidebar</p>
          </div>

        </div>


      <?php 
        else :
        get_template_part( 'template-parts/content', 'none' );
      ?>

      <?php endif; ?>

    </div>
  </main>

<?php get_footer(); ?>