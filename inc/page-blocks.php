<?php 
	

add_action('acf/init', 'openup_acf_init');

function openup_acf_init() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register a hero block
		acf_register_block(array(
			'name'				=> 'hero',
			'title'				=> __('Hero Banner'),
			'description'		=> __(''),
			'render_callback'	=> 'openup_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'align-left',
		));

		// register a text-image block
		acf_register_block(array(
			'name'				=> 'text-image',
			'title'				=> __('Text + Image'),
			'description'		=> __(''),
			'render_callback'	=> 'openup_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'media-interactive',
		));		
		
		// register a callout block
		acf_register_block(array(
			'name'				=> 'callout',
			'title'				=> __('Callout'),
			'description'		=> __(''),
			'render_callback'	=> 'openup_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
		));		

		// register a text columns block
		acf_register_block(array(
			'name'				=> 'text-columns',
			'title'				=> __('Text Columns'),
			'description'		=> __(''),
			'render_callback'	=> 'openup_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'align-pull-left',
		));	
		
		// register a cards block
		acf_register_block(array(
			'name'				=> 'cards',
			'title'				=> __('Cards'),
			'description'		=> __(''),
			'render_callback'	=> 'openup_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'grid-view',
		));	
		
		// register a cta block
		acf_register_block(array(
			'name'				=> 'cta',
			'title'				=> __('CTA'),
			'description'		=> __(''),
			'render_callback'	=> 'openup_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'megaphone',
		));
		
		// register a lead block
		acf_register_block(array(
			'name'				=> 'lead',
			'title'				=> __('Lead'),
			'description'		=> __(''),
			'render_callback'	=> 'openup_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'align-center',
		));	
		
		// register a collapsable content
		acf_register_block(array(
			'name'				=> 'collapsible',
			'title'				=> __('Collapsible List'),
			'description'		=> __(''),
			'render_callback'	=> 'openup_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'editor-ul',
		));	
		
	}
}

function openup_acf_block_render_callback( $block ) {
	
	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);
	
	// include a template part from within the "template-parts/blocks" folder
	if( file_exists( get_theme_file_path("/template-parts/blocks/content-{$slug}.php") ) ) {
		
		include( get_theme_file_path("/template-parts/blocks/content-{$slug}.php") );
	
	}
}

add_filter( 'allowed_block_types', 'openup_allowed_block_types' );
 
function openup_allowed_block_types( $allowed_blocks ) {

	return array(
		'acf/hero',
		'acf/text-image',
		'acf/callout',
		'acf/text-columns',
		'acf/cards',
		'acf/cta',
		'acf/lead',
		'acf/collapsible',
	);
 
}