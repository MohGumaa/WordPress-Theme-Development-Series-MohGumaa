<article class="bg-white/10 shadow-sm border border-gray-200 rounded-lg p-2">
    <?php the_title( sprintf( '<h2 class="font-semibold text-lg hover:text-sky-500 mb-2"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );?>
    
    <div class="text-sm text-gray-600">
      <?php the_excerpt(); ?>
    </div>
</article>