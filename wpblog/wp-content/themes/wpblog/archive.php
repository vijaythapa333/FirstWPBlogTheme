<?php get_header(); ?>
        
        <div class="wrapper clearfix">
            <!--Content Starts Here-->
            <div class="content">
                <?php 
                    if(have_posts()):
                    ?>
                    <h2>
                        <?php 
                            if(is_category())
                            {
                                single_cat_title();
                            }
                            else if(is_tag())
                            {
                                single_tag_title();
                            }
                            else if(is_author)
                            {
                                echo "Author Archives: ".get_the_author();
                                rewind_posts();
                            }
                            else if(is_day)
                            {
                                echo "Daily Archives: ".get_the_date();
                            }
                            else if(is_month)
                            {
                                echo "Monthly Archives: ".get_the_date('F Y');
                            }
                            else if(is_year)
                            {
                                echo "Yearly Archive: ".get_the_date('Y');
                            }
                            else
                            {
                                echo "Archoves";
                            }
                        ?>
                    </h2>
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
            <?php get_template_part('sidebar',get_post_format()); ?>
            <!--Sidebar Ends Here-->
        </div>
        
<?php get_footer(); ?>