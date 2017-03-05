<?php get_header(); ?>
        
        <div class="wrapper clearfix">
            <!--Content Starts Here-->
            <div class="content">
                <?php 
                    if(have_posts()):
                        while(have_posts()):the_post();
                        
                        get_template_part('content',get_post_format());
                        
                        endwhile;
                        //For Pagination
                        //previous_posts_link();//FOr Previous Posts
                        //next_posts_link();//FOr Next Posts
                        echo paginate_links();//FOr Google Like Pagination
                    else:
                        echo '<p>No Post Found.</p>';
                    endif;
                ?>
                
            </div>
            <!--Content Ends Here-->
            
            <?php 
                get_template_part('sidebar',get_post_format());
            ?>
        </div>
        
<?php get_footer(); ?>