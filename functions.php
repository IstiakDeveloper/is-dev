<?php
/*
My Theme Functions
*/

// Theme Title
add_theme_support('title-tag');

// Css calling another way
function mycss()
{
    wp_enqueue_style('default', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/plugins/bootstrap/bootstrap.min.css');
    wp_enqueue_style('custom', get_stylesheet_directory_uri() . '/css/style.css');
    wp_enqueue_style('m-custom', get_stylesheet_directory_uri() . '/css/custom.css');
    wp_enqueue_style('map', get_stylesheet_directory_uri() . '/css/style.css.map');
    wp_enqueue_style('animate', get_stylesheet_directory_uri() . '/plugins/animate/animate.css');
    wp_enqueue_style('fancybox', get_stylesheet_directory_uri() . '/plugins/fancybox/jquery.fancybox.css');
    wp_enqueue_style('hovar', get_stylesheet_directory_uri() . '/plugins/hover/hover.min.css');
    wp_enqueue_style('ionicons', get_stylesheet_directory_uri() . '/plugins/ionicons/ionicons.min.css');
    wp_enqueue_style('slick-theme', get_stylesheet_directory_uri() . '/plugins/slick/slick-theme.css');
    wp_enqueue_style('slick', get_stylesheet_directory_uri() . '/plugins/slick/slick.css');
    wp_enqueue_style('slider', get_stylesheet_directory_uri() . '/plugins/slider/slider.css');
    wp_enqueue_style('wow', get_stylesheet_directory_uri() . '/plugins/ionicons/ionicons.min.css');
}
add_action('wp_enqueue_scripts', 'mycss');


// Register theme customizar 
function is_header_custiomizar($wp_customize)
{

    // For Header Area
    $wp_customize->add_section('is_header_area', array(
        'title' => __('Header Area', 'isdev'),
        'description' => 'This area to customize your header section'
    ));

    $wp_customize->add_setting('is_header_setting', array(
        'default' => get_bloginfo('template_directory') . '/images/logo.png',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'is_header_setting', array(
        'label' => 'Upload Logo',
        'section' => 'is_header_area',
        'setting' => 'is_header_setting'

    )));


    // For Menu Position
    $wp_customize->add_section('is_menu_option', array(
        'title' => __('Menu Position Option', 'isdev')

    ));

    $wp_customize->add_setting('is_menu_position', array(
        'default' => 'right_menu'
    ));

    $wp_customize->add_control('is_menu_position', array(
        'label' => 'Menu Position',
        'description' => 'Select you menu position',
        'section' => 'is_menu_option',
        'setting' => 'is_menu_position',
        'type' => 'radio',
        'choices' => array(
            'left_menu' => 'Left Menu',
            'right_menu' => 'Right Menu',
            'center_menu' => 'Center Menu'
        )
    ));
}
add_action('customize_register', 'is_header_custiomizar');


// Font calling
function is_fonts()
{
    wp_enqueue_style('is_font_name', 'https://fonts.googleapis.com/css2?family=Gelasio:wght@400;500&family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap', false);
}
add_action('wp_enqueue_scripts', 'is_fonts');





//Register Nav Walkar
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';


//Add Theme Support for Navwalker Menu
function navwalker()
{
    register_nav_menus([
        'primary' => __('Primary Menu', 'navwalker'),
    ]);
}
add_action('after_setup_theme', 'navwalker');
