<?php

// THEME SUPPORT
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );
add_theme_support( 'menus' );

// WRAPPER
require_once( 'classes/wrapper.php' );

// ACF
require_once( 'includes/acf.php' );

// CUSTOM POST TYPES
require_once( 'includes/custom-post-types.php' );

// DEBLOATER
require_once('includes/debloater.php');

// IMAGES
require_once( 'includes/images.php' );

// NAVWALKER
require_once('includes/navwalker.php');

// DISABLE COMMENTS
require_once( 'includes/disable-comments.php' );

// SCRIPTS AND STYLES
require_once( 'includes/scripts-styles.php' );

// WOOCOMMERCE
require_once( 'includes/woocommerce.php' );

// OTHER FUNCTIONS
require_once('includes/others.php');