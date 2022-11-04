<?php

if ( ! defined( 'ABSPATH' ) ) die(); // prevent direct access

// Add async support
function add_async_forscript($url) {
  if (strpos($url, '#asyncload')===false) {
    return $url;
  } else if (is_admin()) {
    return str_replace('#asyncload', '', $url);
  } else {
    return str_replace('#asyncload', '', $url)."' async='async";
  }
}
add_filter('clean_url', 'add_async_forscript', 11, 1);

// Enqueues scripts and styles
function theme_scripts() {
  $version_no = '0.09'; //version for cache busting

  // SCRIPTS
  wp_enqueue_script( 'index', get_template_directory_uri() . '/dist/js/main.js#asyncload', null, $version_no, null);

  // STYLES
  if (!is_admin()){
    wp_enqueue_style( 'main', get_template_directory_uri() . '/dist/sass/styles.css', null, $version_no, null);
  }
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

?>