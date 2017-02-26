<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width" />
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>
    
    <body>
        <!--Top Menu Starts Here-->
        <div class="top-menu">
            <div class="wrapper">
                <ul>
                    <?php 
                        $args=array('theme_location'=>'primary');
                        wp_nav_menu($args);
                    ?>
                </ul>
            </div>
        </div>
        <!--Top Menu Ends Here-->
        <!--Header Starts Here-->
        <header class="header">
            <div class="wrapper clearfix">
                <div class="logo">
                    <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                    <h5><?php bloginfo('description'); ?></h5>
                </div>
                
                <div class="search">
                    <?php 
                        get_search_form();
                    ?>
                </div>
            </div>
        </header>
        <!--Header Ends Here-->
        
        <!--Bottom Menu Starts Here-->
        <nav class="bottom-menu">
            <div class="wrapper">
                <ul>
                    <a href="#"><li>Information Technology</li></a>
                    <a href="#"><li>Travels</li></a>
                    <a href="#"><li>Entertainment</li></a>
                    <a href="#"><li>Lifestyle</li></a>
                </ul>
            </div>
        </nav>
        <!--Bottom Menu Ends Here-->
        
        
        
        