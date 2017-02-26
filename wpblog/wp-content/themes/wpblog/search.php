<?php get_header(); ?>
        
        <div class="wrapper clearfix">
            <!--Content Starts Here-->
            <div class="content">
                <?php 
                    if(have_posts()):
                        ?>
                        <div class="post">
                            <h2>Search Results For: <?php the_search_query(); ?></h2>
                        </div>
                        <?php
                        while(have_posts()):the_post();
                        
                        get_template_part('content',get_post_format());
                        
                        endwhile;
                    else:
                        echo '<p>No Post Found.</p>';
                    endif;
                ?>
                
            </div>
            <!--Content Ends Here-->
            
            <!--Sidebar Starts Here-->
            <?php get_template_part('sidebar',get_post_format()) ?>
            <!--Sidebar Ends Here-->
        </div>
        
<?php get_footer(); ?>