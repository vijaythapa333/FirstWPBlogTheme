<?php get_header(); ?>
        
        <div class="wrapper clearfix">
            <!--Content Starts Here-->
            <div class="content">
                <?php 
                    if(have_posts()):
                        while(have_posts()):the_post();
                        
                        get_template_part('content',get_post_format());
                        
                        endwhile;
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