<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
  <h1 class="text-2xl font-medium mb-3"><?php the_title();?></h1>

  <?php 
    $name = get_the_author_meta('display_name'); 
    $fname = get_the_author_meta('first_name'); 
    $lname = get_the_author_meta('last_name'); 
    ?>

  <p class="text-gray-500 font-medium mb-4">Post by <?php echo $fname . " " . $lname?></p>

  <time datetime="" class="text-base">
    <?php echo get_the_date('l jS F, Y'); ?>
  </time>

  <?php if (has_post_thumbnail()) : ?>
    <img src="<?php the_post_thumbnail_url('full')?>" alt="<?php the_title() ?>">
  <?php endif; ?>

  <div class="mb-5">
    <?php the_content();?>
  </div>

  <?php 
    $tags = get_the_tags();

    if ($tags):
      foreach($tags as $tag):
    ?>
        <a href="<?php echo get_tag_link($tag->term_id);?>" class="bg-theme-green px-1.5 py-0.5 mr-2 rounded text-white font-medium text-sm">
          <?php echo $tag->name;?>
        </a>
    <?php  endforeach; endif; ?>

    <div class="my-5">
        <?php 
    $categories = get_the_category();

    if ($categories):
      foreach($categories as $cat):
    ?>
        <a href="<?php echo get_category_link($cat->term_id);?>" class="bg-theme-green px-1.5 py-0.5 mr-2 rounded text-white font-medium text-sm">
          <?php echo $cat->name;?>
        </a>
    <?php  endforeach; endif; ?>
    </div>

    <?php comments_template()?>

<?php endwhile; endif; ?>