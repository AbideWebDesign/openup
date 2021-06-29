<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package openup
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700;800&display=swap" rel="stylesheet">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-PHCC94TD9F"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		
		gtag('config', 'G-PHCC94TD9F');
	</script>
</head>

<body <?php body_class(); ?>>

<div class="site" id="page">

	<?php echo get_template_part('template-parts/blocks/content', 'top-bar'); ?>
	
	<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'openup' ); ?></a>

	<div id="wrapper-navbar" class="wrapper-xs">

		<div class="container">
			
			<div class="row justify-content-center justify-content-lg-between">
				
				<div class="col-12 col-md-auto text-center text-md-left mb-md-3 mb-lg-0">
					
					<a href="<?php echo home_url(); ?>"><?php echo wp_get_attachment_image( get_field('logo', 'options'), 'Full', false, array('class'=>'logo img-fluid', 'alt'=>'Open Up, Inc.') ); ?></a>
										
				</div>
				
				<div class="col-md-auto align-self-center d-none d-md-block">
					
					<div class="d-flex">
						
						<?php wp_nav_menu( array( 'theme_location'  => 'primary', 'menu_class' => 'primary-menu pl-0', 'container_class' => 'align-self-center mr-4' ) ); ?>
					
						<div class=""><a href="<?php echo home_url('/donate'); ?>" class="btn btn-secondary btn-alt"><?php _e('Donate'); ?></a></div>
						
					</div>
					
				</div>
				
				<div class="col-12 align-self-center d-md-none mt-4 text-center">
					
					<a class="shiftnav-toggle shiftnav-toggle-button d-flex justify-content-center" data-shiftnav-target="shiftnav-main">
						
						<i class="fa fa-bars fa-2x"></i> 
						
						<div class="ml-2 align-self-center"><?php _e('EXPLORE'); ?></div>
						
					</a>
					
				</div>
				
			</div>
			
		</div>

	</div><!-- #wrapper-navbar end -->
