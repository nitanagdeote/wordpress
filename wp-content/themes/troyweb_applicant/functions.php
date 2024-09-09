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

#########################################3


add_action( 'init', 'create_custom_post_type' );

function create_custom_post_type() {
    $supports = array(
        'title', // post title
        'editor', // post content
        'author', // post author
        'thumbnail', // featured images
        'excerpt', // post excerpt
        'custom-fields', // custom fields
        'comments', // post comments
        'revisions', // post revisions
        'post-formats', // post formats
        );
    $labels = array(
        'name' => _x('core values', 'plural'),
        'singular_name' => _x('core value', 'singular'),
        'menu_name' => _x('core values', 'admin menu'),
        'name_admin_bar' => _x('core values', 'admin bar'),
        'add_new' => _x('Add New', 'add new'),
        'add_new_item' => __('Add New core value'),
        'new_item' => __('core value'),
        'edit_item' => __('Edit New core value'),
        'view_item' => __('View  core value'),
        'all_items' => __('All core value'),
        'search_items' => __('Search core value'),
        'not_found' => __('No news found.'),
        );


$args = array(
    'supports' => $supports,
  'labels' =>  $labels ,
  'public' => true,
  'has_archive' => false,
  'rewrite' => array('slug' => 'core values'),
 );

register_post_type( 'core value',$args);
}





function enqueue_font_awesome() {
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_font_awesome' );


############################################
?>