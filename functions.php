<?php
    function enqueue_child_theme_styles() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
        my_scripts_enqueue();
        enqueue_bubbles_js();
    }

    //  IMPORT BOOTSTRAP CDN
    function my_scripts_enqueue() {
        
        wp_register_script( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), true );
        wp_register_style( 'bootstrap-css', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', false, NULL, 'all' );
        wp_register_style('google-fonts', 'https://fonts.googleapis.com/css?family=Philosopher|Crimson+Text', false, null, 'all');
        wp_register_style('google-fonts2', 'https://fonts.googleapis.com/css?family=Noto+Serif|Oxygen:300', false, null, 'all');


        wp_enqueue_script( 'bootstrap-js' );
        wp_enqueue_style( 'bootstrap-css' );
        wp_enqueue_style('google-fonts');
        wp_enqueue_style('google-fonts2');
    }

    function enqueue_bubbles_js(){
        wp_enqueue_script( 'bubbles-js', get_template_directory_uri() . '/js/bubbles/rAF.js', array('jquery'), 1.1, true );
        wp_enqueue_script( 'bubbles-js', get_template_directory_uri() . '/js/bubbles/demo-2.js', array('jquery'), 1.1, true );
    }

    //Executes all scripts above
    add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);

    function wpb_custom_new_menu() {
        register_nav_menu('my-custom-menu',__( 'Seans Menu' ));
      }

    add_action( 'init', 'wpb_custom_new_menu' ); //allow menu
    add_theme_support( 'post-thumbnails' ); //allow featured image
    require_once( get_template_directory() .'/template-parts/better-comments.php' ); //include custom comments page
?>