<?php 
    //Functions to add resources like css, js files
    function wpblog_resources()
    {
        wp_enqueue_style('style',get_stylesheet_uri());
    }
    add_action('wp_enqueue_scripts','wpblog_resources');
    
    //For PAge Navigation Menu
    register_nav_menus(array(
        'primary'=>__('Primary Menu'),
        'footer'=>__('Footer Menu'),
    ));
    
    //For Adding Featured images in posts and pages
    function wpblog_setup()
    {
        add_theme_support('post-thumbnails'); //TO Activate Featured Image on Posts and Pages
        add_image_size('small-thumbnail',180,120,true);//To Generate Custom Image Sizes
        
        add_theme_support('post-formats',array('aside','link','gallery','quote','status'));//To Activate Post Formats Like aside, link and gallery
    }
    add_action('after_setup_theme','wpblog_setup');
    
    //Add and Activate Widgets Locations on our Project
    function ourWidgetsInit()
    {
        register_sidebar(array(
            'name'=>'Sidebar 1',
            'id'=>'sidebar1'
        ));
        
        register_sidebar(array(
            'name'=>'Sidebar 2',
            'id'=>'sidebar2'
        ));
        
        register_sidebar(array(
            'name'=>'Sidebar 3',
            'id'=>'sidebar3'
        ));
        
        register_sidebar(array(
            'name'=>'Sidebar 4',
            'id'=>'sidebar4'
        ));
        
        register_sidebar(array(
            'name'=>'Footer Area 1',
            'id'=>'footer1'
        ));
        
        register_sidebar(array(
            'name'=>'Footer Area 2',
            'id'=>'footer2'
        ));
        
        register_sidebar(array(
            'name'=>'Footer Area 3',
            'id'=>'footer3'
        ));
        
        register_sidebar(array(
            'name'=>'Footer Area 4',
            'id'=>'footer4'
        ));
    }
    add_action('widgets_init','ourWidgetsInit');
    
    //Customize Appeareance of THeme
    function learningWordPress_customize_register($wp_customize)
    {
        //For Header Footer Link Color Customization
        $wp_customize->add_setting('wpblog_header_footer_link_color',array(
            'default'=>'lightblue',
            'transport'=>'refresh',
        ));
        
        $wp_customize->add_section('wpblog_standard_colors',array(
            'title'=>__('Standard Colors','WPBlog'),
            'priority'=>30,
        ));
        
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'wpblog_header_footer_link_color',array(
            'label'=>__('Header Footer Link Color','WPBlog'),
            'section'=>'wpblog_standard_colors',
            'setting'=>'wpblog_header_footer_link_color',
        )));
        
        //For Button BG Color Customization
        $wp_customize->add_setting('wpblog_button_bgcolor',array(
            'default'=>'silver',//Don't Give Color Name, Give in Hexadecimal
            'transport'=>'refresh',
        ));
        
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'wpblog_button_bgcolor',array(
            'label'=>__('Button Color','WPBlog'),
            'section'=>'wpblog_standard_colors',
            'setting'=>'wpblog_button_bgcolor',
        )));
        
        //For Button Hover BG Color Customization
        $wp_customize->add_setting('wpblog_button_hover_bgcolor',array(
            'default'=>'navy', //Don't Give Color Name, Give in Hexadecimal
            'transport'=>'refresh',
        ));
        
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'wpblog_button_hover_bgcolor',array(
            'label'=>__('Button Hover Color','WPBlog'),
            'section'=>'wpblog_standard_colors',
            'setting'=>'wpblog_button_hover_bgcolor',
        )));
    }
    add_action('customize_register','learningWordPress_customize_register');
    
    //Output Customize CSS Here
    function WPBlog_customize_css()
    {
        ?>
        <style type="text/css">
            .top-menu ul li a:link,.top-menu ul a:visited{
                color: <?php echo get_theme_mod('wpblog_header_footer_link_color'); ?>;
            }
            .footer a:link,.footer a:visited{
                color: <?php echo get_theme_mod('wpblog_header_footer_link_color'); ?>;
            }
            .home-content .home-box .btn{
                background-color: <?php echo get_theme_mod('wpblog_button_bgcolor'); ?>;
            }
            .home-content .home-box .btn:hover{
                background-color: <?php echo get_theme_mod('wpblog_button_hover_bgcolor'); ?>;
            }
        </style>
        <?php
    }
    add_action('wp_head','WPBlog_customize_css');
    
    //Function to Add Footer Callout Section
    function WPBlog_footer_callout($wp_customize)
    {
        //Adding Section for Footer Callout in Admin Panel
        $wp_customize->add_section('wpblog_footer_callout_section',array(
            'title'=>'Footer Callout'
        ));
        
        //Setting and Control For Footer Callout Display Setting
        $wp_customize->add_setting('wpblog_footer_callout_display',array(
            'default'=>'No'
        ));
        
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,'wpblog_footer_callout_display_control',array(
            'label'=>'Display this section',
            'section'=>'wpblog_footer_callout_section',
            'settings'=>'wpblog_footer_callout_display',
            'type'=>'select',
            'choices'=>array('No'=>'No','Yes'=>'Yes')
        )));
        
        //Setting and Control For Footer Callout Heading
        $wp_customize->add_setting('wpblog_footer_callout_headline',array(
            'default'=>'Example Footer Heading!'
        ));
        
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,'wpblog_footer_callout_headline_control',array(
            'label'=>'Headline',
            'section'=>'wpblog_footer_callout_section',
            'settings'=>'wpblog_footer_callout_headline'
        )));
        
        //Setting and Control For Footer Callout Paragraph
        $wp_customize->add_setting('wpblog_footer_callout_paragraph',array(
            'default'=>'Example Footer Paragraph!'
        ));
        
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,'wpblog_footer_callout_paragraph_control',array(
            'label'=>'Text',
            'section'=>'wpblog_footer_callout_section',
            'settings'=>'wpblog_footer_callout_paragraph',
            'type'=>'textarea'
        )));
        
        //Setting and Control For Footer Callout Image
        $wp_customize->add_setting('wpblog_footer_callout_image');
        
        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'wpblog_footer_callout_image_control',array(
            'label'=>'Image',
            'section'=>'wpblog_footer_callout_section',
            'settings'=>'wpblog_footer_callout_image',
            'width'=>750,
            'height'=>500
        )));
        
        //Setting and Control For Footer Callout Link
        $wp_customize->add_setting('wpblog_footer_callout_link');
        
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,'wpblog_footer_callout_link_control',array(
            'label'=>'Link',
            'section'=>'wpblog_footer_callout_section',
            'settings'=>'wpblog_footer_callout_link',
            'type'=>'dropdown-pages'
        )));
    }
    
    add_action('customize_register','WPBlog_footer_callout');
?>