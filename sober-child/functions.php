<?php
/**
 * Sober functions and definitions.
 *
 * @link    https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Sober Child
 */

add_action( 'wp_enqueue_scripts', 'sober_child_enqueue_scripts', 20 );

function sober_child_enqueue_scripts() {
  $stylesheet_directory_uri = get_stylesheet_directory_uri();
	wp_enqueue_style( 'sober-child', get_stylesheet_uri() );
	// wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
}


/* Things I changed  in parent theme 

in inc/frontend/frontend.php:
'function sober_open_content_container() {
  $class = 'container'; '

  to

function sober_open_content_container() {
	$class = 'container-fluid';
  

  */