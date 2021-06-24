<?php
// Style enqueue

    function themes_styles() {
        
    wp_enqueue_style( 'style_css1', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'style_css2', get_stylesheet_directory_uri() . '/assets/css/font-awesome.min.css' );
    wp_enqueue_style( 'style_css3', get_stylesheet_directory_uri() . '/assets/css/slick.css' );
    wp_enqueue_style( 'style_css4', get_stylesheet_directory_uri() . '/assets/css/style.css' );
    }
    add_action( 'wp_enqueue_scripts', 'themes_styles' );
    
//  Script Enqueue   

    function themes_js() {


    wp_enqueue_script( 'js1', get_stylesheet_directory_uri() . '/assets/js/jquery.js', '', '', true );
    wp_enqueue_script( 'js2', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', '', '', true );
    wp_enqueue_script( 'js3', get_stylesheet_directory_uri() . '/assets/js/slick.js', '', '', true );
    wp_enqueue_script( 'js4', get_stylesheet_directory_uri() . '/assets/js/main.js', '', '', true );
    }
    add_action( 'wp_enqueue_scripts', 'themes_js' );
?>