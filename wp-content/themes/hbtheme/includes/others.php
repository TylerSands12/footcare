<?php

if ( ! defined( 'ABSPATH' ) ) die(); // prevent direct access

// Page Slug Body Class
function add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
    $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

// Disable Gutenberg other than blog posts
function disable_gutenberg_by_post_type( $use_block_editor, $post_type ) {
	if ( 'post' !== $post_type ) {
		return false;
	}
	return $use_block_editor;
}
add_filter( 'use_block_editor_for_post_type', 'disable_gutenberg_by_post_type', 10, 2 );

// Change theme image in Appearance > Themes to the site logo rather than using screenshot.png
add_action('admin_head', 'admin_styles');
function admin_styles() {
    
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $custom_logo_url = "";
    
    if ($custom_logo_id) {
        $custom_logo_url = wp_get_attachment_image_src($custom_logo_id);
    }

    echo '<style>
        .theme-overlay .screenshot.blank {
            background-image: url("'.$custom_logo_url[0].'") !important;
            background-size: 50%;
            background-position: center center;
            background-repeat: no-repeat;
        }
    </style>';
}

?>