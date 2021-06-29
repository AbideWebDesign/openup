<?php
/**
 * openup enqueue scripts
 *
 * @package openup
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'openup_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function openup_scripts() {

		wp_enqueue_style( 'openup-styles', get_template_directory_uri() . '/css/theme.min.css', array() );

		wp_enqueue_script( 'jquery' );

		wp_enqueue_script( 'openup-scripts', get_template_directory_uri() . '/js/theme.js', array(), null, true );
		
		wp_enqueue_script( 'openup-core', get_template_directory_uri() . '/js/core.js', array(), null, true );
	}
} // endif function_exists( 'openup_scripts' ).

add_action( 'wp_enqueue_scripts', 'openup_scripts' );
