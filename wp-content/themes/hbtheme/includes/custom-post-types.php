<?php

if ( ! defined( 'ABSPATH' ) ) die(); // prevent direct access

// function custom_post_type_testimonials() {
//     $labels = array(
//         'name'                => _x( 'Testimonials', 'Post Type General Name', 'honey_badger' ),
//         'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'honey_badger' ),
//         'menu_name'           => __( 'Testimonials', 'honey_badger' ),
//         'parent_item_colon'   => __( 'Testimonials', 'honey_badger' ),
//         'all_items'           => __( 'All Testimonials', 'honey_badger' ),
//         'view_item'           => __( 'View Testimonial', 'honey_badger' ),
//         'add_new_item'        => __( 'Add Testimonial', 'honey_badger' ),
//         'add_new'             => __( 'Add Testimonial', 'honey_badger' ),
//         'edit_item'           => __( 'Edit Testimonial', 'honey_badger' ),
//         'update_item'         => __( 'Update Testimonial', 'honey_badger' ),
//         'search_items'        => __( 'Search Testimonials', 'honey_badger' ),
//         'not_found'           => __( 'Testimonials', 'honey_badger' ),
//         'not_found_in_trash'  => __( 'Testimonials Not found in Bin', 'honey_badger' ) 
//     );

//     $args = array(
//         'label'               => __( 'Testimonials', 'honey_badger' ),
//         'description'         => __( 'Testimonials', 'honey_badger' ), 
//         'labels'              => $labels,
//         'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
//         'taxonomies'          => array( 'category' ),
//         'hierarchical'        => false, // set to true to enable child items
//         'public'              => true,
//         'show_ui'             => true,
//         'show_in_menu'        => true,
//         'query_var' 		  => true,
//         'show_in_nav_menus'   => true,
//         'show_in_admin_bar'   => true,
//         'can_export'          => true,
//         'has_archive'         => true, // set to false to use page instead of archive template
//         'exclude_from_search' => false,
//         'publicly_queryable'  => true,
//         // 'rewrite'             => array( 'slug' => 'something-other-than-testimonials'),
//         'capability_type'     => 'page'
//     );

//     register_post_type( 'testimonials', $args ); 

// }
// add_action( 'init', 'custom_post_type_testimonials', 0 );

?>