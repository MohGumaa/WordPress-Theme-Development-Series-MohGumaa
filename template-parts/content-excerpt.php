<article>
  <a href="<?php echo get_permalink();?>" class="flex flex-col items-center bg-white/80 border border-gray-200/50 rounded-lg shadow-sm md:flex-row">

    <!-- Image -->
    <?php if (has_post_thumbnail()) : ?>
      <img class="object-cover w-full rounded-t-lg h-auto md:w-72 md:rounded-none md:rounded-s-lg" src="<?php the_post_thumbnail_url('medium')?>" alt="<?php the_title() ?>">
    <?php else : ?>
      <img class="object-cover w-full rounded-t-lg h-auto md:w-72 md:rounded-none md:rounded-s-lg" src="https://images.unsplash.com/photo-1566207474742-de921626ad0c?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="<?php the_title() ?>">
    <?php endif; ?>

    <!-- Title & Excerpt -->
    <div class="flex flex-col justify-between p-4 leading-normal">

      <h2 class="mb-2 text-xl font-bold tracking-tight text-gray-900 hover:text-sky-400">
        <?php the_title();?>
      </h2>
      <div class="mb-3 font-normal text-gray-700 [&_p]:line-clamp-2 [&_p]:text-sm"><?php the_excerpt(); ?></div>
    </div>
  </a>
</article>