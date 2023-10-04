<?php 
    if(! function_exists("zboomMusic_setup")){
        function zboomMusic_setup(){
            add_theme_support("post-thumbnails");
            add_theme_support("menus");
            add_theme_support("custom-logo");
            add_theme_support( "custom-background" );

            register_nav_menus( array(
                'primary_menu' => __( 'Primary Menu', 'zboomMusic' ),
                'mini_menu'  => __( 'Mini Menu', 'zboomMusic' ),
            ) );
        }
        add_action( "after_setup_theme", "zboomMusic_setup" );
    }

    //For Widgets
    function zboommusic_register_widgets(){
        register_sidebar(array (
            'name' => __('Sidebar Widgets', 'zboomMusic'),
            'id' => 'right-sidebar-widget',
            'description' => __('This widget loacted to right side' , 'zboomMusic'),
            'before_widget' => '<div class="box">',
            'after_widget' => '</div>',
            'before_title' =>'<div class="heading">',
            'after_title' => '</div><div class="content">'
        ));

        register_sidebar(array(
            'name' => __('Footer Widgets', 'zboomMusic'),
            'id' => 'footer-widget',
            'description' => __('This widget loacted to footer' , 'zboomMusic'),
            'before_widget' => '<div class="box">',
            'after_widget' => '</div>',
            'before_title' =>'<div class="heading">',
            'after_title' => '</div>'
        ));
        register_sidebar(array(
            'name' => __('Footer Widgets 1', 'zboomMusic'),
            'id' => 'footer-widget-1',
            'description' => __('This widget loacted to footer' , 'zboomMusic'),
            'before_widget' => '<div class="box">',
            'after_widget' => '</div>',
            'before_title' =>'<div class="heading">',
            'after_title' => '</div>'
        ));
    }
    add_action('widgets_init', 'zboommusic_register_widgets');


    function create_custom_post_type() {
        register_post_type('sliders',    
        array(    
        'labels' => array(    
        'name' => __( 'Sliders' ),    
        'singular_name' => __( 'Sliders' )    
        ),    
        'public' => true,    
   
        'supports' => array( 'title', 'thumbnail')    
        )    
        );    
        };
        
        add_action( 'init', 'create_custom_post_type' );



        function custom_search_form($form){
            $form = '<form action="'. home_url( '/' ).'">
                        <input type="text" name="s" value="Search..." onfocus="if (this.value == &#39;Search...&#39;) {this.value = &#39;&#39;;}" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Search...&#39;;}">
                    </form>' ;
                    return $form;
        }

        add_filter( 'get_search_form', 'custom_search_form', 40 )
?>