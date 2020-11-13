<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package openup
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

<div id="wrapper-footer-top" class="bg-secondary py-3">

	<div class="container">
		
		<div class="row justify-content-center no-gutters">
			
			<div class="col-8 col-md-auto pr-md-4 pr-xl-4 mr-xl-4 border-right">
				
				<?php echo get_button( get_field('footer_top_link_1', 'options'), 'btn btn-secondary btn-arrow btn-light btn-plain btn-lg' ); ?>
				
				<p class="text-sm text-white mt-1"><?php the_field('footer_top_text_1', 'options'); ?></p>
				
			</div>
			
			<div class="col-8 col-md-auto pr-md-4 pr-xl-4 mr-xl-4 border-right">
				
				<?php echo get_button( get_field('footer_top_link_2', 'options'), 'btn btn-secondary btn-arrow btn-light btn-plain btn-lg' ); ?>
				
				<p class="text-sm text-white mt-1"><?php the_field('footer_top_text_2', 'options'); ?></p>
				
			</div>

			<div class="col-8 col-md-auto pr-md-4 pr-xl-4 mr-xl-4 border-right">
				
				<?php echo get_button( get_field('footer_top_link_3', 'options'), 'btn btn-secondary btn-arrow btn-light btn-plain btn-lg' ); ?>
				
				<p class="text-sm text-white mt-1"><?php the_field('footer_top_text_3', 'options'); ?></p>
				
			</div>
			
			<div class="col-8 col-md-auto">
				
				<p class="text-lg text-white mb-1"><strong><?php _e('Social Media'); ?></strong></p>
				
				<div class="text-md-center">
					
					<a class="text-white mr-1" href="<?php the_field('instagram', 'options'); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
					
					<a class="text-white" href="<?php the_field('facebook', 'options'); ?>" target="_blank"><i class="fab fa-facebook-square"></i></a>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>

<div id="wrapper-footer" class="wrapper-sm bg-dark">

	<div class="container">

		<div class="row justify-content-center justify-content-lg-between">

			<div class="col-auto col-lg-4 mb-4 mb-md-0">
				
				<div class="d-flex flex-column flex-md-row">
					
					<div class="mr-md-4 text-center text-md-left mb-3 mb-md-0">
						
						<a href="<?php echo home_url(); ?>"><img class="logo img-fluid" alt="<?php _e('Open Up, Inc.'); ?>" src="<?php the_field('logo', 'options'); ?>" /></a>
						
						<div class="mt-2">
							
							<p class="text-xs m-0"><?php _e('A US 501(c)(3) public charity'); ?><br /><?php _e('EIN 82-4086069'); ?></p>
							
						</div>
						
					</div>
					
					<div class="align-self-center text-center text-md-left">
						
						<p class="mb-0"><?php the_field('contact_mailing_address', 'options'); ?><br />
						
						<a href="mailto:<?php the_field('contact_email', 'options'); ?>"><?php the_field('contact_email', 'options'); ?></a><br />
						
						<a href="tel:<?php the_field('contact_phone', 'options'); ?>"><?php the_field('contact_phone', 'options'); ?></a>
						
					</div>
										
				</div>
				
			</div>
			
			<div class="col-auto align-self-center">
				
				<div class="d-flex">
					
					<div class="mr-4">
						
						<?php wp_nav_menu( array( 'theme_location'  => 'footer_left' ) ); ?>
						
					</div>
					
					<div>
						
						<?php wp_nav_menu( array( 'theme_location'  => 'footer_right' ) ); ?>
						
					</div>
					
				</div>
				
			</div>
		
		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

<div id="wrapper-bottom" class="bg-black py-2">
	
	<div class="container">
		
		<div class="row justify-content-center justify-content-lg-between">
			
			<div class="col-auto">
				
				<div class="text-xs">
					
					&copy;<?php echo date('Y'); ?> <?php _e('Open Up, Inc.'); ?>
					
				</div>
				
			</div>
			
			<div class="col-auto">
				
				<div class="text-xs text-center text-md-right">
					
					<a href="<?php echo home_url('/terms-of-use'); ?>"><?php _e('Terms of Use'); ?></a> | <a href="<?php echo home_url('/privacy-policy'); ?>"><?php _e('Privacy Policy'); ?></a> <span class="d-none d-md-inline">|</span> <span class="d-block d-md-inline"><a href="https://abidewebdesign.com" target="_blank"><?php _e('Website Design and Maintenance by Abide Web Design'); ?></a></span>
				
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>