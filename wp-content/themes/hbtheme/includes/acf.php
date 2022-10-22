<?php

if ( ! defined( 'ABSPATH' ) ) die(); // prevent direct access

// GOOGLE MAPS
function my_acf_google_map_api( $api ){
  $api['key'] = 'AIzaSyAWvXViF0X67G8gwd0iYefugsF7fgV9IeM';
  return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

// GLOBAL AREAS
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
	
	acf_add_options_sub_page('General');
	acf_add_options_sub_page('Header');
	acf_add_options_sub_page('Footer');
	acf_add_options_sub_page('Mega Menu');
	acf_add_options_sub_page('Scripts');	
}

?>