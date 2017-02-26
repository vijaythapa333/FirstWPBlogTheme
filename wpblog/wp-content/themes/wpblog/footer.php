<!--Footer Starts-->
        <footer class="footer">
            <!--Footer Call Out Starts-->
            <?php 
                if(get_theme_mod('wpblog_footer_callout_display')=='Yes')
                {
            ?>
           
            <div class="wrapper">
                <div class="footer-callout clearfix">
                    <div class="footer-callout-image">
                        <a href="<?php echo get_permalink(get_theme_mod('wpblog_footer_callout_link')); ?>">
                            <img src="<?php echo wp_get_attachment_url(get_theme_mod('wpblog_footer_callout_image')); ?>" />
                        </a>
                    </div>
                    
                    <div class="footer-callout-text">
                        <h2>
                            <a href="<?php echo get_permalink(get_theme_mod('wpblog_footer_callout_link')); ?>">
                                <?php echo get_theme_mod('wpblog_footer_callout_headline') ?>
                            </a>
                        </h2>
                        <?php echo wpautop(get_theme_mod('wpblog_footer_callout_paragraph')); ?>
                        <a href="<?php echo get_permalink(get_theme_mod('wpblog_footer_callout_link')); ?>">Read More &raquo;</a>
                    </div>
                </div>
            </div>
             <?php
                }
            ?>
            <!--Footer Call Out Ends-->
            
            <!--Footer Block Starts Here-->
            <div class="wrapper clearfix">
                <!--Footer 1-->
                <div class="footer-box">
                    <?php dynamic_sidebar('footer1'); ?>
                </div>
                
                <!--Footer 2-->
                <div class="footer-box">
                    <?php dynamic_sidebar('footer2'); ?>
                </div>
                
                <!--Footer 3-->
                <div class="footer-box">
                    <?php dynamic_sidebar('footer3'); ?>
                </div>
                
                <!--Footer 4-->
                <div class="footer-box">
                    <?php dynamic_sidebar('footer4'); ?>
                </div>
                
            </div>
            <!--Footer Block Ends Here-->
            
            <div class="wrapper">
                <ul>
                    <?php 
                        $args=array('theme_location'=>'footer');
                        wp_nav_menu($args);
                    ?>
                </ul>
                <p>All Rights Reserved &copy; <?php echo date('Y'); ?>, <?php bloginfo('name'); ?>. Designed By: <a href="#">Vijay Thapa</a></p>
            </div>
        </footer>
        <!--Footer Starts-->
    </body>
</html>