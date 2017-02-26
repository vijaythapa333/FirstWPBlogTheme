<?php get_header(); ?>
        
        <div class="wrapper clearfix">
            <!--Content Starts Here-->
            <div class="content">
                <?php 
                    if(have_posts()):
                        while(have_posts()):the_post();
                        
                        ?>
                        <div class="post">
                            <h2><?php the_title(); ?></h2>
                            <p style="color: red;">
                                This page is built using separate page 'page-home.php'
                            </p>
                            <?php the_content(); ?>
                            
                        </div>
                        <?php
                        
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