<?php

// Register bootstrap menu class
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';


// Add css stylesheets
function load_stylesheets() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), FALSE, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), FALSE, 'all');
    wp_enqueue_style('style');
}

// Register stylesheet.
add_action('wp_enqueue_scripts', 'load_stylesheets');


// Add jquery script
function load_jquery() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', '', 1, true);
    wp_enqueue_script('jquery');
}

// Register jquery
add_action('wp_enqueue_scripts', 'load_jquery');


// Add js scripts
function load_js() {
    wp_register_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', '', 1, true);
    wp_enqueue_script('bootstrapjs');
    
    wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
    wp_enqueue_script('customjs');
}

// Register js scripts
add_action('wp_enqueue_scripts', 'load_js');


// Add menu support in admin
add_theme_support('menus');

// Register menu locations
register_nav_menus(
        array(
            'top-menu' => __('Top Menu', 'theme'),
            'main-menu' => __('Main Menu', 'theme'),
            'footer-menu' => __('Footer Menu', 'theme'),
            'front-page-menu' => __('Front Page Menu', 'theme')
        )
);


//Add fonts
function load_google_fonts() {
  wp_enqueue_style( 'google_web_font_signika_negative', 'https://fonts.googleapis.com/css?family=Signika+Negative' );
}

add_action( 'wp_enqueue_scripts', 'load_google_fonts' );