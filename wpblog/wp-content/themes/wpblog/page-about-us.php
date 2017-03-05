<?php get_header(); ?>
        
        <div class="wrapper clearfix">
            <!--Content Starts Here-->
            <div class="about">
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
                <h3>Blog Posts About Us</h3>
                <?php 
                    //FOr Pagination
                    $ourCurrentPage=get_query_var('paged'); //Use page instead of paged for static front pages
                    //Gettinh all the posts of about category
                    $aboutPosts=new WP_Query(array(
                        'category_name'=>'about',
                        'posts_per_page'=>3,
                        'paged'=>$ourCurrentPage   //Use page instead of paged for static front pages
                    ));
                    ?>
                    <ul>
                    <?php
                    if($aboutPosts->have_posts()):
                        while($aboutPosts->have_posts()):
                            $aboutPosts->the_post();
                            ?>
                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                            <?php
                        endwhile;
                        ?>
                        </ul>
                        <?php
                        //previous_posts_link();
                        //next_posts_link('Next Page',$aboutPosts->max_num_pages);
                        //For Google Lik ePagination
                        echo paginate_links(array(
                            'total'=>$aboutPosts->max_num_pages
                        ));
                    endif;
                ?>
            </div>
            <!--Content Ends Here-->
            
        </div>
        
<?php get_footer(); ?>