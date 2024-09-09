<?php
// Enqueue the main theme stylesheet (style.css)
//
/**
 * Enqueue styles and scripts
 */
function troyweb_applicant_enqueue_styles() {
    // Enqueue the main theme stylesheet (style.css)
    wp_enqueue_style( 'troyweb-applicant-style', get_stylesheet_uri() );
    
    // Enqueue any other scripts or styles you need here
    // Example: wp_enqueue_script( 'my-custom-script', get_template_directory_uri() . '/js/custom.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'troyweb_applicant_enqueue_styles' );

// Register a navigation menu location
function troyweb_applicant_register_menus() {
    register_nav_menus( array(
        'primary-menu' => __( 'Primary Menu', 'troyweb_applicant' ),
    ) );
}
add_action( 'after_setup_theme', 'troyweb_applicant_register_menus' );
//
//
// Register Custom Post Type: Applicant
function register_applicant_post_type() {
    $labels = array(
        'name'               => __( 'Applicants', 'textdomain' ),
        'singular_name'      => __( 'Applicant', 'textdomain' ),
        'menu_name'          => __( 'Applicants', 'textdomain' ),
        'name_admin_bar'     => __( 'Applicant', 'textdomain' ),
        'add_new'            => __( 'Add New Applicant', 'textdomain' ),
        'add_new_item'       => __( 'Add New Applicant', 'textdomain' ),
        'new_item'           => __( 'New Applicant', 'textdomain' ),
        'edit_item'          => __( 'Edit Applicant', 'textdomain' ),
        'view_item'          => __( 'View Applicant', 'textdomain' ),
        'all_items'          => __( 'All Applicants', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'applicant' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'menu_icon'          => 'dashicons-id', // Optional: Choose an icon
    );

    register_post_type( 'applicant', $args );
}
add_action( 'init', 'register_applicant_post_type' );
//
//
//
// Register Custom Taxonomy: Skills
function register_skills_taxonomy() {
    $labels = array(
        'name'              => _x( 'Skills', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Skill', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Skills', 'textdomain' ),
        'all_items'         => __( 'All Skills', 'textdomain' ),
        'edit_item'         => __( 'Edit Skill', 'textdomain' ),
        'add_new_item'      => __( 'Add New Skill', 'textdomain' ),
        'new_item_name'     => __( 'New Skill Name', 'textdomain' ),
        'menu_name'         => __( 'Skills', 'textdomain' ),
    );

    $args = array(
        'hierarchical'      => false, // Behaves like tags
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'skills' ),
    );

    register_taxonomy( 'skills', array( 'applicant' ), $args );
}
add_action( 'init', 'register_skills_taxonomy' );

// Register Custom Taxonomy: Experience
function register_experience_taxonomy() {
    $labels = array(
        'name'              => _x( 'Experiences', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Experience', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Experiences', 'textdomain' ),
        'all_items'         => __( 'All Experiences', 'textdomain' ),
        'edit_item'         => __( 'Edit Experience', 'textdomain' ),
        'add_new_item'      => __( 'Add New Experience', 'textdomain' ),
        'new_item_name'     => __( 'New Experience Name', 'textdomain' ),
        'menu_name'         => __( 'Experiences', 'textdomain' ),
    );

    $args = array(
        'hierarchical'      => false,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'experience' ),
    );

    register_taxonomy( 'experience', array( 'applicant' ), $args );
}
add_action( 'init', 'register_experience_taxonomy' );
?>
