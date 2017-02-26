<?php 

/*
Template Name: Special Layout
*/

get_header(); 

?>
        
        <div class="wrapper clearfix">
            <!--Content Starts Here-->
            <div class="content">
                <div class="post">
                    <p style="color: green;">
                        &quot;Page Using Special Layout Template&quot;<br />
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nisl elit, tempus ut felis et, tempus 
                        faucibus enim. Pellentesque tempor sem vitae ornare 
                    </p>
                </div>
                <?php 
                    if(have_posts()):
                        while(have_posts()):the_post();
                        ?>
                        <div class="post">
                            <h3><?php the_title(); ?></h3>
                            <?php the_post_thumbnail(); ?>
                            <?php 
                                the_content();
                            ?>
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
            <?php get_template_part('sidebar',get_post_format()); ?>
            <!--Sidebar Ends Here-->
        </div>
        
<?php get_footer(); ?>