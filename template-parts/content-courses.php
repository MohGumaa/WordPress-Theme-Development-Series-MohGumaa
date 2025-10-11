<article>
  <a href="<?php the_permalink(); ?>" class="block bg-white rounded-xl shadow-md hover:shadow-xl transition p-4">
    <?php if (has_post_thumbnail()) : ?>
      <div class="h-48 overflow-hidden rounded-lg mb-3">
        <?php the_post_thumbnail('medium', ['class' => 'w-full h-full object-cover']); ?>
      </div>
    <?php endif; ?>
    <h2 class="text-xl font-semibold text-gray-800"><?php the_title(); ?></h2>

    <?php 
      $levels = get_the_terms(get_the_ID(), 'level');
      if ($levels):
    ?>

      <div class="flex flex-wrap items-center gap-2 mt-6">
        <?php foreach($levels as $level): ?>
          <span class="px-3 py-1 text-xs font-bold text-theme-green bg-theme-green-80/10 rounded-full uppercase">
            <?php echo $level->name;?>
          </span>
        <?php endforeach; ?>
      </div>

    <?php endif;?>
  </a>
</article>