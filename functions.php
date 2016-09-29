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


        add_action( 'init', 'customPosts' );

    function customPosts() {

      $labels = array(

        'name' => _x('servico', 'post type general name'),

        'singular_name' => _x('servicos', 'post type singular name'),

        'add_new' => _x('Adicionar Novo', 'Serviço'),

        'add_new_item' => __('Adicionar Novo servico'),

        'edit_item' => __('Editar Serviço'),

        'new_item' => __('Novo Serviço'),

        'all_items' => __('Todos Serviços'),

        'view_item' => __('Ver  Serviço'),

        'search_items' => __('Procurar Serviço'),

        'not_found' =>  __('Nenhum servico encontrado'),

        'not_found_in_trash' => __('Nenhum servico encontrado'),

        'parent_item_colon' => '',

        'menu_name' => 'Serviços'

      );

      $args = array(

        'labels' => $labels,

        'public' => true,

        'publicly_queryable' => true,

        'show_ui' => true,

        'show_in_menu' => true,

        'query_var' => true,

        'rewrite' => true,

        'capability_type' => 'post',

        'hierarchical' => false,

        'supports' => array( 'editor', 'title', 'page-attributes' )

      );

      register_post_type('servicos',$args);



      $labels = array(

        'name' => _x('cliente', 'post type general name'),

        'singular_name' => _x('clientes', 'post type singular name'),

        'add_new' => _x('Adicionar Novo', 'Cliente'),

        'add_new_item' => __('Adicionar Novo cliente'),

        'edit_item' => __('Editar Cliente'),

        'new_item' => __('Novo Cliente'),

        'all_items' => __('Todos Serviços'),

        'view_item' => __('Ver  Cliente'),

        'search_items' => __('Procurar Cliente'),

        'not_found' =>  __('Nenhum cliente encontrado'),

        'not_found_in_trash' => __('Nenhum cliente encontrado'),

        'parent_item_colon' => '',

        'menu_name' => 'Clientes'

      );

      $args = array(

        'labels' => $labels,

        'public' => true,

        'publicly_queryable' => true,

        'show_ui' => true,

        'show_in_menu' => true,

        'query_var' => true,

        'rewrite' => true,

        'capability_type' => 'post',

        'hierarchical' => false,

        'supports' => array('title', 'page-attributes' )

      );

      register_post_type('clientes',$args);

    }
         // MENUS



        register_nav_menus( array(



            // TOPO

            'esquerda' => esc_html__( 'Menu da Esquerda', 'Lage' )



        ) );

        register_nav_menus( array(



            // TOPO

            'direita' => esc_html__( 'Menu da Direita', 'Lage' )



        ) );

        register_nav_menus( array(



            // TOPO

            'rodape' => esc_html__( 'Menu do rodape', 'Lage' )



        ) );

// WALKER - RESPONSÁVEL POR CUSTOMIZAR O MENU



   require_once( 'setup/walker.php' );