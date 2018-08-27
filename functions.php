<?php
    function enqueue_child_theme_styles() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
        my_scripts_enqueue();
    }

    //  IMPORT BOOTSTRAP CDN
    function my_scripts_enqueue() {
        
        wp_register_script( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), true );
        wp_register_style( 'bootstrap-css', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', false, NULL, 'all' );

        wp_enqueue_script( 'bootstrap-js' );
        wp_enqueue_style( 'bootstrap-css' );
    }

    add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);

    function wpb_custom_new_menu() {
        register_nav_menu('my-custom-menu',__( 'Seans Menu' ));
      }
    add_action( 'init', 'wpb_custom_new_menu' );
?>