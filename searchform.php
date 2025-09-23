<form role="search" method="get" action="<?php echo home_url( '/' ); ?>" class="searchform">
  <div class="">
    <input type="text" id="search-input" value="<?php echo get_search_query(); ?>" name="s" required />
    <input type="hidden" name="cat" value="18">
    <button type="submit">Search Now</button>
  </div>
</form>
