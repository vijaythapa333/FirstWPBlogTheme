                        <div class="post">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
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
                            <span class="image-thumbnail">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
                            </span>
                            </p>
                            <?php 
                                the_excerpt();
                            ?>
                            <a href="<?php the_permalink(); ?>" class="readmore">Read More</a>
                        </div>