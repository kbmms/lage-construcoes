<?php

// add_theme_support( 'post-thumbnails');

 if ( function_exists( 'add_theme_support' ) ) {

        add_theme_support('post-thumbnails');



        }



        function customScripts() {



    wp_enqueue_style( 'accesspress-staple-responsive-nav', get_template_directory_uri() . '/css/bootstrap.min.css');

    wp_enqueue_style( 'accesspress-staple-animate', get_template_directory_uri() . '/owl/owl-carousel/owl.carousel.css');

    wp_enqueue_style( 'accesspress-staple-fancycss', get_template_directory_uri() . '/js/bxslider/jquery.bxslider.css"');

    wp_enqueue_style( 'accesspress-staple-style', get_stylesheet_uri() );



    wp_enqueue_script( 'jquery-basic', get_template_directory_uri() . '/js/bootstrap.min.js',  array(), '1.0', true);

    wp_enqueue_script( 'neo-bootstrap', get_template_directory_uri() . '/js/bxslider/jquery.bxslider.js',  array('jquery'), '1.0', true);



    wp_enqueue_script( 'neo-owl', get_template_directory_uri() . '/owl/owl-carousel/owl.carousel.js',  array('jquery'), '1.0', true);

    wp_enqueue_script( 'neo-scripts', get_template_directory_uri() . '/js/scripts.js',  array('jquery'), '1.0', true);










    }

    add_action( 'wp_enqueue_scripts', 'customScripts' );