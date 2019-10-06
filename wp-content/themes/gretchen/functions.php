<?php

/* Register Css media */
function register_css_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('bootstrap-theme', get_template_directory_uri() . '/css/bootstrap-theme.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap-theme');

    // wp_register_style('main-css', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'), 'all');
    // wp_enqueue_style('main-css');s

    wp_register_style('font-awesome', get_template_directory_uri() . '/css/fontawesome.min.css', array(), filemtime(get_template_directory() . '/css/fontawesome.min.css'), 'all');
    wp_enqueue_style('font-awesome');

    wp_register_style('font-awesome-brands', get_template_directory_uri() . '/css/brands.min.css', array(), filemtime(get_template_directory() . '/css/brands.min.css'), 'all');
    wp_enqueue_style('font-awesome-brands');

    wp_register_style('font-awesome-solid', get_template_directory_uri() . '/css/solid.min.css', array(), filemtime(get_template_directory() . '/css/solid.min.css'), 'all');
    wp_enqueue_style('font-awesome-solid');
    
    
    wp_register_style('owl-css', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), filemtime(get_template_directory() . '/css/owl.carousel.min.css'), 'all');
    wp_enqueue_style('owl-css');

    wp_register_style('owl-css-second', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), filemtime(get_template_directory() . '/css/owl.theme.default.min.css'), 'all');
    wp_enqueue_style('owl-css-second');
    
    wp_register_style('extra-css', get_template_directory_uri() . '/css/stylextra.css', array(), '1.0.0', 'all');
    wp_enqueue_style('extra-css');
}
add_action('wp_enqueue_scripts', 'register_css_styles');

/* Register JS Scripts */
function register_js_scripts() {
  
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('jquery');

    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.mobile-1.4.5.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('jquery');

    wp_register_script('validation', get_template_directory_uri() . '/js/jquery.validation.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('validation');

    wp_register_script('popper-js', get_template_directory_uri() . '/js/popper.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('popper-js');

    wp_register_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('bootstrap-js');

    wp_register_script('custom-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true, filemtime(get_template_directory() . '/js/script.js'));
    wp_enqueue_script('custom-script');

    wp_register_script('extra-script', get_template_directory_uri() . '/js/scriptextra.js', array('jquery'), '1.0.0', true, filemtime(get_template_directory() . '/js/scriptextra.js'));
    wp_enqueue_script('extra-script');

    wp_register_script('carousel-min-js', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '1.0.0', true, filemtime(get_template_directory() . '/js/owl.carousel.min.js'));
    wp_enqueue_script('carousel-min-js');

    wp_register_script('fourth-script', get_template_directory_uri() . '/js/jscript.js', array('jquery'), '1.0.0', true, filemtime(get_template_directory() . '/js/jscript.js'));
    wp_enqueue_script('fourth-script');
    
    // wp_register_script('carousel-js', get_template_directory_uri() . '/js/carouselscript.js', array('jquery'), '1.0.0', true, filemtime(get_template_directory() . '/js/carouselscript.js'));
    // wp_enqueue_script('carousel-js');
    
    wp_register_script('font-awesome-js', get_template_directory_uri() . '/js/all.min.js', array('jquery'), '1.0.0', true, filemtime(get_template_directory() . '/js/all.min.js'));
    wp_enqueue_script('font-awesome-js');
   
}
add_action('wp_enqueue_scripts', 'register_js_scripts');


register_nav_menus( array(
    'main_navigation' => 'Main menu',
    'mobile_navigation' => 'Mobile menu'

));

// function setup()
// {
//     add_image_size( 'banner-ad', 655, 100, true );
//     add_image_size( 'banner-rectangle', 655, 250, true );

// }
// add_action('after_setup_theme', __NAMESPACE__ . '\\setup');

// function my_custom_sizes( $sizes )
// {
//     return array_merge( $sizes, array(
//         'banner-ad' => __( 'Banner Ad' ),
//         'banner-rectangle' => __( 'Banner Rectangle' ),
//     ) );
// }
// add_filter( 'image_size_names_choose', __NAMESPACE__ . '\\my_custom_sizes' );

add_theme_support( 'post-thumbnails' );
function setup() 
{
    
    add_image_size("post-example-img", 90, 60, true );
    // add_image_size("logo-list", auto, 150, true );
    add_image_size("registration-img", auto, auto, true );
}
add_image_size("logo-list", auto, 100);
function pw_show_image_sizes( $sizes )
{
    return array_merge( $sizes, array(
        'post-example-img' => __( 'Post Example' ),
        'banner-rectangle' => __( 'Banner Rectangle' ),
    ) );
}

add_filter('image_size_names_choose', __NAMESPACE__ . '\\setup');


add_action('after_setup_theme', 'my_theme_setup');
function my_theme_setup(){
    load_theme_textdomain('itb', get_template_directory() . '/languages');
}


?>