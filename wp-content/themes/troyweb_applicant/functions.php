<?php

//load css
function load_css() {
    // Register the Bootstrap CSS file
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    
    // Enqueue the registered Bootstrap CSS file
    wp_enqueue_style('bootstrap');

     // Register the Main CSS file
     wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    
     // Enqueue the registered Main CSS file
     wp_enqueue_style('main');
}

// Hook the 'load_css' function to 'wp_enqueue_scripts', which is the correct action for enqueuing styles and scripts
add_action('wp_enqueue_scripts', 'load_css');


// Load JS

function load_js() {
    wp_enqueue_script('jquery');
    // Register the Bootstrap JS file
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    
    // Enqueue the registered Bootstrap JS file
    wp_enqueue_script('bootstrap');
}

// Hook the 'load_js' function to 'wp_enqueue_scripts', which is the correct action for enqueuing styles and scripts
add_action('wp_enqueue_scripts', 'load_js');

// Add menu

add_theme_support('menus');

// Register top bar menus

register_nav_menus(

    array(

        'top-menu' =>'top-menu-location',
        'mobile-menu' =>'mobile-menu-location'
    )
);