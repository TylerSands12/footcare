<?php

if ( ! defined( 'ABSPATH' ) ) die(); // prevent direct access

// Adds support for post thumbnails
add_theme_support( 'post-thumbnails' );

// Handle image upload meta for SEO
add_action( 'add_attachment', 'my_set_image_meta_upon_image_upload' );
function my_set_image_meta_upon_image_upload( $post_ID ) {

  // Check if uploaded file is an image, else do nothing
  if ( wp_attachment_is_image( $post_ID ) ) {

    $my_image_title = get_post( $post_ID )->post_title;

    // Sanitize the title:  remove hyphens, underscores & extra spaces:
    $my_image_title = preg_replace( '%\s*[-_\s]+\s*%', ' ',  $my_image_title );

    // Sanitize the title:  capitalize first letter of every word (other letters lower case):
    $my_image_title = ucwords( strtolower( $my_image_title ) );

    // Create an array with the image meta (Title, Caption, Description) to be updated
    // Note:  comment out the Excerpt/Caption or Content/Description lines if not needed
    $my_image_meta = array(
      'ID' => $post_ID,      // Specify the image (ID) to be updated
      'post_title' => $my_image_title,   // Set image Title to sanitized title
      //'post_excerpt' => $my_image_title,   // Set image Caption (Excerpt) to sanitized title
      'post_content' => $my_image_title,   // Set image Description (Content) to sanitized title
    );

    // Set the image Alt-Text
    update_post_meta( $post_ID, '_wp_attachment_image_alt', $my_image_title );

    // Set the image meta (e.g. Title, Excerpt, Content)
    wp_update_post( $my_image_meta );

  } 
}

// Add title attribute to featured image
add_filter( 'wp_get_attachment_image_attributes', 'tl_add_img_title', 10, 2 );
function tl_add_img_title( $attr, $attachment = null){
  $attr['title'] = get_post( $attachment->ID )->post_title;
  return $attr;
}

// Add support for custom image sizes
function ccd_add_image_sizes() {
  add_image_size( 'header-large', 2048, 1152, true );
  add_image_size( 'header-medium', 1024, 576, true );
  add_image_size( 'header-small', 640, 360, true );
}
add_action( 'after_setup_theme', 'ccd_add_image_sizes' );

// Add srcset and sizing to images
function ccd_responsive_images( $image_id, $image_size, $max_width ) {
	// Check if the image ID is not blank
	if ( $image_id != '' ) {
		// Set the default src image size
		$image_src = wp_get_attachment_image_url( $image_id, $image_size );
		// Set the srcset with various image sizes
		$image_srcset = wp_get_attachment_image_srcset( $image_id, $image_size );
		// Generate the markup for the responsive image
		echo 'src="' . $image_src . '" srcset="' . $image_srcset . '" sizes="(max-width: ' . $max_width . ') 100vw, ' . $max_width . '"';
	}
}

// Change the default max width to 2048
function ccd_max_srcset_image_width() {
  return 2048;
}
add_filter( 'max_srcset_image_width', 'ccd_max_srcset_image_width', 10 , 2 );

// Returns an optimised image based on attachment id
function optimised_image($attachment_id, $size) {

  $image_src = wp_get_attachment_image_src( $attachment_id, $size );

  $image_srcset = wp_get_attachment_image_srcset( $attachment_id, $size );

  $attachment_metadata = wp_get_attachment_metadata($attachment_id);

  $width = $attachment_metadata['width'];
  $height = $attachment_metadata['height'];
  $alt = get_post_meta($attachment_id, '_wp_attachment_image_alt', TRUE);
  $title = get_the_title($attachment_id);

  return '<img class="lazyload" src="'.esc_url( $image_src[0] ).'" srcset="'.esc_attr( $image_srcset ).'" sizes="(max-width: 640px) 640px, (max-width: 1024px) 1024px, 2048px" width="'.$width.'" height="'.$height.'" alt="'.$alt.'" title="'.$title.'"  />';
}

?>