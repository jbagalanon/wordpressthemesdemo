<?php 



function wpdevs_load_scripts (){

    wp_enqueue_style('wpdevs-style', get_stylesheet_uri(), array(),filemtime(get_template_directory() . '/style.css'), 'all');

    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array (), null );

    wp_enqueue_script( 'dropdown', get_template_directory_uri(). '/js/dropdown.js', array(), '1.0.0', true );

    // wp_enqueue_style('wpdevs-main', get_template_directory_uri() . '/css/main.css', array(), '1.0.0', 'all');
    // wp_enqueue_style('wpdevs-responsive', get_template_directory_uri() . '/css/responsive.css', array(), '1.0.0', 'all');
    // wp_enqueue_style('wpdevs-fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '1.0.0', 'all');
    // wp_enqueue_style('wpdevs-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800', array(), '1.0.0', 'all');

    // wp_enqueue_script('wpdevs-jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), '1.0.0', true);
    // wp_enqueue_script('wpdevs-main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);

}

add_action( 'wp_enqueue_scripts', 'wpdevs_load_scripts' );