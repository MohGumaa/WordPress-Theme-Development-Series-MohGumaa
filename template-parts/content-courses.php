<article>
  <a href="<?php the_permalink(); ?>" class="block bg-white rounded-xl shadow-md hover:shadow-xl transition p-4">
    <?php if (has_post_thumbnail()) : ?>
      <div class="h-48 overflow-hidden rounded-lg mb-3">
        <?php the_post_thumbnail('medium', ['class' => 'w-full h-full object-cover']); ?>
      </div>
    <?php endif; ?>
    <h2 class="text-xl font-semibold text-gray-800"><?php the_title(); ?></h2>
  </a>
</article>