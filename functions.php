<?php

// Adds support for thumbnails and widgets
add_theme_support('post-thumbnails');
add_theme_support('widgets');

// Adds dynamic title tags
function theme_support() {
    add_theme_support('title-tag');
    
}

add_action('after_setup_theme', 'theme_support')
?>


<?php
// Adds menus
function add_menus() {
    $locations = array(
        'primary' => "Primary Menu",
        'footer' => "Footer Menu",
        'side-menu' => "Side Menu"
    );

    register_nav_menus($locations);
}

add_action('init', 'add_menus');

?>

<?php


// Adds CSS
function register_styles() {
    wp_enqueue_style('style-bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.css", array(), "all");
    wp_enqueue_style('style-fontawesome', get_template_directory_uri() . "/assets/css/font-awesome.css", array(), "all");
    wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/css/mystyle.css', array(), "all");
}
add_action('wp_enqueue_scripts', 'register_styles');


// Adds scripts 
function register_scripts() {
    wp_register_script('script-jquery', get_stylesheet_directory_uri() . "/assets/js/jquery.js");
    wp_register_script('script-js', get_stylesheet_directory_uri() . "/assets/js/script.js", '', false, true);
}

add_action('wp_enqueue_scripts', 'register_scripts');


// Creating widget areas for the footer menu and the aside menu
function widget_area() {
    register_sidebar(
        array(
        'name' => 'About',
        'id' => 'about',
        'description' => 'About us widget',
        'before_widget' => '',
        'after_widget' => '',
        )
        );
        register_sidebar(
            array(
            'name' => 'Contact',
            'id' => 'contact',
            'description' => 'Contact widget',
            'before_widget' => '',
            'after_widget' => '',
            )
        );
            register_sidebar(
                array(
                'name' => 'Social Media',
                'id' => 'social',
                'description' => 'Social media widget',
                'before_widget' => '',
                'after_widget' => '',
            )
        );

            register_sidebar(
                array(
                'name' => 'Aside search',
                'id' => 'search',
                'description' => 'Aside search',
                'before_widget' => '',
                'after_widget' => '',
            )
        );

            register_sidebar(
                array(
                'name' => 'Aside sidor',
                'id' => 'sidor',
                'description' => 'Aside sidor',
                'before_widget' => '',
                'after_widget' => '',
            )
        );

            register_sidebar(
                array(
                'name' => 'Aside arkiv',
                'id' => 'arkiv',
                'description' => 'Aside arkiv',
                'before_widget' => '',
                'after_widget' => '',
            )
        );

            register_sidebar(
                array(
                'name' => 'Aside kategorier',
                'id' => 'kategorier',
                'description' => 'Aside kategorier',
                'before_widget' => '',
                'after_widget' => '',
            )
        );
}

add_action('widgets_init', 'widget_area');

?>

