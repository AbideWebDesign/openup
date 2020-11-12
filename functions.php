<?php
/**
 * openup functions and definitions
 *
 * @package openup
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$openup_includes = array(
	'/setup.php',                           // Theme setup and custom theme supports.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/pagination.php',                      // Custom pagination for this theme.
	'/class-wp-bootstrap-navwalker.php',    
	'/editor.php',                          // Load Editor functions.
	'/page-blocks.php',						// Load ACF page blocks.
);

foreach ( $openup_includes as $file ) {
	require_once get_template_directory() . '/inc' . $file;
}
