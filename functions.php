<?php
    function enqueue_child_theme_styles() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
        my_scripts_enqueue();
        //enqueue_bubbles_js();
        enqueue_sean_scripts_js();
    }

    //  IMPORT BOOTSTRAP CDN
    function my_scripts_enqueue() {
        
        wp_register_script( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), true );
        //wp_register_style( 'bootstrap-css', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', false, NULL, 'all' );
        wp_register_style('google-fonts', 'https://fonts.googleapis.com/css?family=Philosopher|Crimson+Text', false, null, 'all');
        wp_register_style('google-fonts2', 'https://fonts.googleapis.com/css?family=Noto+Serif|Oxygen:300', false, null, 'all');


        wp_enqueue_script( 'bootstrap-js' );
        //wp_enqueue_style( 'bootstrap-css' );
        wp_enqueue_style('google-fonts');
        wp_enqueue_style('google-fonts2');
    }

    function enqueue_bubbles_js(){
        wp_enqueue_script( 'bubbles-js', get_template_directory_uri() . '/js/bubbles/rAF.js', array('jquery'), 1.1, true );
        wp_enqueue_script( 'bubbles-js', get_template_directory_uri() . '/js/bubbles/demo-2.js', array('jquery'), 1.1, true );
    }

    function enqueue_header_scroll_js(){
        if(is_page_template('sean-home.php')){
            wp_enqueue_script( 'header-scroll', get_template_directory_uri() . '/js/headerscroll.js', array('jquery'), null, false );
        }
    }

    function enqueue_sean_scripts_js(){
        wp_enqueue_script( 'header-scroll', get_template_directory_uri() . '/js/hamburger-menu.js', array('jquery'), null, false );
    }
    //Executes all scripts above
    add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);
    add_action( 'wp_enqueue_scripts', 'enqueue_header_scroll_js');
    //add_action('wp_enqueue_scripts', 'enqueue_sean_scripts_js'); //May delete if hamburger isn't used or repurpose for basic js files


    function wpb_custom_new_menu() {
        register_nav_menu('my-custom-menu',__( 'Seans Menu' ));
      }

    add_action( 'init', 'wpb_custom_new_menu' ); //allow menu
    add_theme_support( 'post-thumbnails' ); //allow featured image
    require_once( get_template_directory() .'/template-parts/better-comments.php' ); //include custom comments page
?>