<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
  <h1 class="text-2xl font-medium mb-3"><?php the_title();?></h1>

  <?php 
    $name = get_the_author_meta('display_name'); 
    $fname = get_the_author_meta('first_name'); 
    $lname = get_the_author_meta('last_name'); 
    ?>

  <p class="text-gray-500 font-medium mb-1">Post by <?php echo $fname . " " . $lname?></p>

  <time datetime="" class="text-gray-600 text-sm font-medium">
    <?php echo get_the_date('l jS F, Y'); ?>
  </time>

  <?php if (has_post_thumbnail()) : ?>
    <img src="<?php the_post_thumbnail_url('full')?>" alt="<?php the_title() ?>" class="rounded-lg w-full h-auto">
  <?php endif; ?>

  <div class="my-5">
    <?php the_content();?>
  </div>


<?php endwhile; endif; ?>