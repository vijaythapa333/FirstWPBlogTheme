<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
    <input type="search" value="" name="s" id="s" placeholder="<?php the_search_query(); ?>" />
    <input type="submit" id="searchsubmit" value="Search" />
</form>