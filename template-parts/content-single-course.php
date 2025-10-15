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

  <div class="grid grid-cols-3 gap-10 my-5">
    <div class="col-span-2">
      <?php the_content();?>
    </div>

    <div>
      <h2 class="text-2xl font-semibold">Course Feature</h2>
      <ul class="grid grid-cols-2 gap-4 mt-4 border-t pt-4 text-gray-700 capitalize">

      <li class="hidden">
        <span class="font-semibold">👨‍🏫 instructor:</span>

        <!-- Code to get ACF meta part 1 -->
        <span><?php 
          // echo get_post_meta(get_the_ID(), 'price', true);
        
          ?></span>
      </li>

      <!-- Code get ACF field -->
        <?php 
          $duration = get_field('duration');
          if($duration) :
        ?>
          <li>
            <span class="font-semibold">⏱️ duration:</span>
            <span><?php echo $duration?></span>
          </li>
        <?php endif;?>
        <li>
          <span class="font-semibold">👨‍🏫 instructor:</span>
          <span><?php the_field('instructor')?></span>
        </li>
        <li>
          <span class="font-semibold">👨‍🏫 price:</span>
          <span><?php the_field('price')?></span>
        </li>
      </ul>
    </div>
  </div>
  
  <?php 
    $levels = get_the_terms(get_the_ID(), 'level');
    if ($levels):
  ?>

    <div class="flex flex-wrap items-center gap-2">
      <?php foreach($levels as $level): ?>
        <a href="<?php echo get_term_link($level)?>" class="px-3 py-1 text-xs font-bold text-theme-green bg-theme-green-80/10 rounded-full uppercase">
          <?php echo $level->name;?>
        </a>
      <?php endforeach; ?>
    </div>

  <?php endif;?>
<?php endwhile; endif; ?>