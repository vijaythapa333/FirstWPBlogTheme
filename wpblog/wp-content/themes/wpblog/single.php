<?php get_header(); ?>
        
        <div class="wrapper clearfix">
            <!--Content Starts Here-->
            <div class="content">
                <?php 
                    if(have_posts()):
                        while(have_posts()):the_post();
                        ?>
                        <div class="post">
                            <h3><?php the_title(); ?></h3>
                            <p class="post-info">Added By: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> 
                            On <?php the_time('F jS, Y g:i a'); ?>, 
                            Category
                            <?php 
                                $categories=get_the_category();
                                $separator=',';
                                $output="";
                                if($categories)
                                {
                                    foreach($categories as $category)
                                    {
                                        $output.='<a href="'.get_category_link($category->term_id).'">'.$category->cat_name.'</a>'.$separator;
                                    }
                                    echo trim($output,$separator);
                                }
                            ?>
                            <?php the_post_thumbnail(); ?>
                            </p>
                            <?php 
                                the_content();
                            ?>
                            
                            <!--About Author Starts Here-->
                            <div class="about-author clearfix">
                                <div class="about-author-image">
                                    <?php echo get_avatar(get_the_author_meta('ID'),512); ?>
                                    <p>
                                        <?php echo get_the_author_meta('nickname'); ?>
                                    </p>
                                </div>
                                
                                <?php 
                                    //Fetching Posts by Current Author
                                    $otherAuthorPosts=new WP_Query(array(
                                        'author'=>get_the_author_meta('ID'),
                                        'posts_per_page'=>3,
                                        'post__not_in'=>array(get_the_ID())//to avoid listing the current page
                                    ));
                                ?>
                                <?php 
                                    if($otherAuthorPosts->have_posts())//Show Other Posts if has posts
                                    {
                                        ?>
                                        <div class="about-author-text">
                                            <h3>About Author</h3>
                                            <?php echo wpautop(get_the_author_meta('description')); ?>
                                            <div class="author-posts">
                                                <h4>Other Posts By <?php echo get_the_author_meta('nickname'); ?>:</h4>
                                                
                                                
                                                <ul>
                                                    <?php 
                                                        while($otherAuthorPosts->have_posts()){
                                                            $otherAuthorPosts->the_post();
                                                            ?>
                                                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                                            <?php
                                                        }
                                                    ?>
                                                </ul>
                                            </div>
                                            
                                            <?php 
                                                if(count_user_posts(get_the_author_meta('ID'))>3)//Only Display Other Posts by the author if no of posts is greater than 3
                                                {
                                                    ?>
                                                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                                        <button type="button" class="btn">View All Posts By <?php echo get_the_author_meta('nickname'); ?></button>
                                                    </a>
                                                    <?php
                                                }
                                            ?>
                                        </div>
                                        <?php
                                    }
                                    wp_reset_postdata();
                                ?>
                                
                            </div>
                            <!--About Author Ends Here-->
                            
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