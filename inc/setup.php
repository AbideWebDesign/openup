<?php
/**
 * Theme basic setup
 *
 * @package openup
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( function_exists( 'acf_add_options_page' ) ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Content Settings',
		'menu_title'	=> 'Content Settings',
		'menu_slug' 	=> 'content-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}

add_image_size( 'Text Image', 650, 550, true );
add_image_size( 'Card', 445, 297, true );
add_image_size( 'Hero Image', 1800, 1200, true );

register_nav_menus( array(
    'footer_left' => 'Footer Left',
    'footer_right' => 'Footer Right',
) );