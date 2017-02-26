<?php get_header(); ?>
        
        <!--Home Content Starts Here-->
            <div class="home-content">
                <?php 
                    if(have_posts()):
                        while(have_posts()):the_post();
                        
                        the_content();
                        
                        endwhile;
                    else:
                        echo '<p>No Content Found.</p>';
                    endif;
                ?>
                
                <div class="clearfix">
                    <!--Box for Category Posts Starts Here-->
                    <div class="home-box">
                        <div class="title">
                            Information Technology
                        </div>
                        
                        <?php 
                            //Getting Categories 
                            $itPosts=new WP_Query('cat=2&posts_per_page=3');
                            if($itPosts->have_posts()):
                                while($itPosts->have_posts()) : $itPosts->the_post();
                                //Output the posts
                                ?>
                                <a href="<?php the_permalink(); ?>" class="clearfix">
                                    <?php the_post_thumbnail('small-thumbnail'); ?>
                                    <?php the_title(); ?>
                                </a>
                                <hr />
                                <?php
                                endwhile;
                            else:
                            //Fallback to content message
                            endif;
                            wp_reset_postdata();//Prevents Disruption on Natural URL based loops
                        ?>
                        <a href="#">
                            <div class="btn">
                                Read All Posts
                            </div>
                        </a>
                    </div>
                    <!--Box for Category Posts Ends Here-->
                    
                    <!--Box for Category Posts Starts Here-->
                    <div class="home-box">
                        <div class="title">
                            Uncategorized
                        </div>
                        <?php 
                            $uncategorizedPosts=new WP_Query('cat=1&posts_per_page=3');
                            if($uncategorizedPosts->have_posts()):
                                while($uncategorizedPosts->have_posts()) : $uncategorizedPosts->the_post();
                                //Output Posts
                                ?>
                                <a href="<?php the_permalink(); ?>" class="clearfix">
                                    <?php the_post_thumbnail('small-thumbnail'); ?>
                                    <?php the_title(); ?>
                                </a>
                                <hr />
                                <?php
                                endwhile;
                            else:
                            endif;
                            wp_reset_postdata();
                        ?>
                        <a href="#">
                            <div class="btn">
                                Read All Posts
                            </div>
                        </a>
                        
                    </div>
                    <!--Box for Category Posts Ends Here-->
                    
                    <!--Box for Category Posts Starts Here-->
                    <div class="home-box">
                        <div class="title">
                            Entertainment
                        </div>
                        <?php 
                            $entertainmentPosts=new WP_Query('cat=4&posts_per_page=3');
                            if($entertainmentPosts->have_posts()) : 
                                while($entertainmentPosts->have_posts()): $entertainmentPosts->the_post();
                                ?>
                                <a href="<?php the_permalink(); ?>" class="clearfix">
                                    <?php the_post_thumbnail('small-thumbnail'); ?>
                                    <?php the_title(); ?>
                                </a>
                                <hr />
                                <?php
                                endwhile;
                            else:
                            endif;
                            wp_reset_postdata();
                        ?>
                        <a href="#">
                            <div class="btn">
                                Read All Posts
                            </div>
                        </a>
                       
                    </div>
                    <!--Box for Category Posts Ends Here-->
                </div>
                
            </div>
            <!--Home Content Ends Here-->
        
<?php get_footer(); ?>