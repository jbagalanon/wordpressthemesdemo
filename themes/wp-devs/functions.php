<?php



function wpdevs_load_scripts()
{

    wp_enqueue_style('wpdevs-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');

    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null);

    wp_enqueue_script('dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0.0', true);

    // wp_enqueue_style('wpdevs-main', get_template_directory_uri() . '/css/main.css', array(), '1.0.0', 'all');
    // wp_enqueue_style('wpdevs-responsive', get_template_directory_uri() . '/css/responsive.css', array(), '1.0.0', 'all');
    // wp_enqueue_style('wpdevs-fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '1.0.0', 'all');
    // wp_enqueue_style('wpdevs-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800', array(), '1.0.0', 'all');

    // wp_enqueue_script('wpdevs-jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), '1.0.0', true);
    // wp_enqueue_script('wpdevs-main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);

}

add_action('wp_enqueue_scripts', 'wpdevs_load_scripts');



function wpdevs_config()
{

    register_nav_menus(
        array(
            'wp_devs_main_menu' => 'Main Menu',
            'wp_devs_footer_menu' => 'Footer Menu'
        )
    );

    $args = array(
        'height' => 225,
        'width' => 1920
    );

    add_theme_support('custom-header', $args);
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'width' => 200,
        'height' => 110,
        'flex-height' => true,
        'flex-width' => true
    ));
}

add_action('after_setup_theme', 'wpdevs_config', 0);

// this is sidebar initialialization
add_action('widgets_init', 'wpdevs_sidebars');

function wpdevs_sidebars()
{

    register_sidebar(array(
        'name' => 'Blog Sidebar',
        'id' => 'sidebar-blog',
        'description' => 'This is the blog sidebar.',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '/h4'

    ));
}
