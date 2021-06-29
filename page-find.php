<?php
/**
 * Template Name: Find Page
 *
 * @package openup
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$house_src = '/wp-content/uploads/2021/06/house.png';

?>

<div id="page-wrapper">

	<?php get_template_part( 'template-parts/blocks/content', 'hero' ); ?>

	<div class="wrapper">
			
		<div class="container">
			
			<div class="row justify-content-center">
			
				<div class="col-auto text-center">
					
					<div class="mb-2">
								
						<img src="<?php echo $house_src; ?>" class="house" />
						
					</div>
								
					<h2 class="mb-4"><?php the_field('section_1_title'); ?></h2>
					
				</div>
				
			</div>
			
			<div class="row justify-content-center no-gutters">
				
				<div class="col-md-6 col-lg-6">
					
					<div class="bg-secondary text-white p-3 p-xl-5 pr-xl-5 mt-md-5">
					
						<?php the_field('section_1_content'); ?>
					
					</div>
					
				</div>
				
				<div class="col-md-6 col-lg-5">
					
					<div class="offset-img offset-img-left d-none d-md-block">
						
						<?php echo wp_get_attachment_image( get_field('section_1_image'), 'Text Image', false, array('class'=>'img-fluid') ); ?>
						
					</div>
										
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<div class="wrapper bg-light">
		
		<div class="container">
			
			<div class="row justify-content-center">
				
				<div class="col-md-8 col-lg-6 align-self-center mb-4 mb-lg-0">
					
					<div class="s"><?php echo wp_get_attachment_image( get_field('section_2_image'), 'Text Image', false, array('class'=>'img-fluid') ); ?></div>
					
				</div>

				<div class="col-md-8 col-lg-6 align-self-center">
										
					<h2 class="text-body mb-2"><?php the_field('section_2_title'); ?></h2>
					
					<div class="mb-4"><?php the_field('section_2_content'); ?></div>
					
					<?php $link = get_field('section_2_button'); ?>
					
					<a class="btn btn-primary" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
												
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<div class="wrapper">
		
		<div class="container">
			
			<div class="row justify-content-center justify-content-lg-between">
				
				<div class="col-md-8 order-2 order-lg-1">
					
					<h2 class="mb-3"><?php the_field('section_3_title'); ?></h2>
					
					<div class="mb-3"><?php the_field('section_3_content'); ?></div>
					
					<?php $link = get_field('section_3_button'); ?>
					
					<a class="btn btn-primary" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>					
					
				</div>
				
				<div class="col-md-8 col-lg-4 order-1 order-lg-2 mb-4 mb-lg-0">
					
					<h4>Housing Calculator</h4>
					
					<div class="card shadow p-2">
					
						<?php echo do_shortcode('[gravityform id="5" title="false" description="false" ajax="true" tabindex="49"]'); ?>
						
						<hr class="mt-1">
						
						<div id="calculator_message" class="d-none text-sm text-muted"></div>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<div class="wrapper bg-light">
		
		<div class="container">
			
			<div class="row justify-content-center">
				
				<div class="col-md-6 col-lg-6 align-self-center">
					
					<h2 class="mb-3"><?php the_field('section_4_title'); ?></h2>
					
					<?php the_field('section_4_content'); ?>
					
				</div>
				
				<div class="col-md-6 col-lg-6">
					
					<?php echo wp_get_attachment_image( get_field('section_4_image'), 'card', false, array('class'=>'img-fluid') ); ?>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<div class="wrapper">
		
		<div class="container">
			
			<div class="row justify-content-center mb-1 mb-md-5">
				
				<div class="col-md-6 col-xl-5 mb-3 mb-md-0">
					
					<?php echo wp_get_attachment_image( get_field('section_5_image_1'), 'card', false, array('class'=>'img-fluid') ); ?>
					
				</div>
				
				<div class="col-md-6 col-xl-5 align-self-center">
					
					<h3 class="text-secondary mb-3"><?php the_field('section_5_title_1'); ?></h3>
					
					<?php the_field('section_5_content_1'); ?>
					
				</div>
				
			</div>
			
			<div class="row justify-content-center">
				
				<div class="col-md-6 col-xl-5 align-self-center order-2 order-md-1">
					
					<h3 class="text-secondary mb-3"><?php the_field('section_5_title_2'); ?></h3>
					
					<?php the_field('section_5_content_2'); ?>
					
				</div>
				
				<div class="col-md-6 col-xl-5 order-1 order-md-2 mb-3 mb-md-0">
					
					<?php echo wp_get_attachment_image( get_field('section_5_image_2'), 'card', false, array('class'=>'img-fluid') ); ?>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<div class="pb-4">
		
		<div class="container">
			
			<div class="row justify-content-center">
				
				<div class="col-md-8 col-lg-5 offset-img align-self-md-center align-self-xl-start d-none d-xl-block">
					
					<?php echo wp_get_attachment_image( get_field('section_6_image'), 'card', false, array('class'=>'img-fluid shadow mb-4 mb-lg-0') ); ?>
					
				</div>
				
				<div class="col-md-10 col-lg-7">
											
					<div class="row justify-content-center mb-3">
					
						<div class="col-auto">
							
							<h2 class="mb-1"><?php the_field('section_6_title'); ?></h2>
							
						</div>
												
					</div>
					
					<div class="bg-secondary text-white mt-xl-3 offset-text">
						
						<div class="mb-4"><?php the_field('section_6_content'); ?></div>
						
						<?php $link = get_field('section_6_button'); ?>
						
						<a href="<?php echo $link['url']; ?>" class="btn btn-light" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
						
					</div>
											
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<div class="wrapper bg-light">
		
		<div class="container">
			
			<div class="row justify-content-center">
				
				<div class="col-md-8 col-xl-8">
					
					<h2 class="mb-3"><?php the_field('section_7_title'); ?></h2>
					
					<div class="mb-4"><?php the_field('section_7_content'); ?></div>
					
					<?php $link = get_field('section_7_button'); ?>
					
					<div class="text-center">
						
						<a href="<?php echo $link['url']; ?>" class="btn btn-primary" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<div class="wrapper">
		
		<div class="container">
			
			<div class="row justify-content-center no-gutters">
				
				<div class="col-md-10 col-lg-7">
					
					<div class="row mb-3 justify-content-center justify-content-lg-start">
					
						<div class="col-auto"><?php echo wp_get_attachment_image( get_field('logo', 'options'), 'full', false, array('class'=>'img-fluid', 'style'=>'width:180px') ); ?></div>
						
						<div class="col-12 col-md-auto text-xl font-weight-bold align-self-center text-center py-3 py-md-0"><?php _e('+'); ?></div>
						
						<div class="col-auto align-self-center"><a href="https://www.silvernest.com/" target="_blank"><?php echo wp_get_attachment_image( get_field('silvernest_logo', 'options'), 'full', false, array('class'=>'img-fluid', 'style'=>'width:200px') ); ?></a></div>
						
					</div>
					
					<div class="bg-secondary text-white p-3 p-md-4 pr-xl-5">
					
						<h2 class="mb-3 text-center text-lg-left"><?php the_field('section_8_title'); ?></h2>
						
						<div class="mb-3"><?php the_field('section_8_content'); ?></div>
						
						<?php $link = get_field('section_8_button'); ?>
						
						<div class="text-center text-xl-left">
							
							<a class="btn btn-white" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a> 
						
						</div>
						
						<div class="mt-3 nospace text-center text-lg-left"><?php the_field('section_8_sub_content'); ?></div>
					
					</div>
					
				</div>
				
				<div class="col-md-10 col-lg-4 align-self-center align-self-xl-start">
					
					<div class="offset-img offset-img-left pl-lg-3 d-none d-lg-block">
						
						<?php echo wp_get_attachment_image( get_field('section_8_image'), 'card', false, array('class'=>'img-fluid') ); ?>
						
					</div>
										
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>

<?php get_footer();
