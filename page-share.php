<?php
/**
 * Template Name: Share Page
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
	
	<?php get_template_part( 'template-parts/blocks/content', 'text-image' ); ?>
	
	<div class="wrapper-text-image wrapper bg-light">
	
		<div class="container">
			
			<div class="row justify-content-center">				
				
				<div class="col-md-10 col-lg-5 align-self-center">
					
					<div class="s"><?php echo wp_get_attachment_image( get_field('section_3_image'), 'Text Image', false, array('class'=>'img-fluid') ); ?></div>
					
				</div>
				
				<div class="col-md-10 col-lg-7 align-self-center mb-lg-0 ">
					
					<div class="mb-4 text-center">
						
						<?php echo wp_get_attachment_image( get_field('section_3_logo'), 'Full', false, array('style'=>'width: 229px;') ); ?>
						
					</div>
					
					<h2 class="mb-3"><?php the_field('section_3_title'); ?></h2>
					
					<?php the_field('section_3_content'); ?>
										
				</div>
			
			</div>
			
		</div>
		
	</div>
	
	<div class="wrapper-text-columns wrapper bg-secondary">

		<div class="container">
			
			<div class="row justify-content-between">
				
				<div class="col-lg-6">
					
					<h2 class="mb-3"><?php the_field('section_4_title'); ?></h2>
					
					<?php the_field('section_4_list'); ?>
										
				</div>
				
				<div class="col-lg-4 align-self-center">
				
					<div class="card shadow text-center p-2">
						
						<div class="mt-3 mb-1 text-lg"><i class="fa fa-check-circle fa-3x text-primary"></i></div>
						
						<h2 class="text-secondary mb-2"><?php the_field('section_4_card_title'); ?></h2>
						
						<div class="mb-3 text-body"><?php the_field('section_4_card_text'); ?></div>
						
						<?php $link = get_field('share_link', 'options'); ?>
						
						<a href="<?php echo $link['url']; ?>" class="btn btn-primary btn-block" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
						
					</div>	
				
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<?php get_template_part( 'template-parts/blocks/content', 'cards' ); ?>
	
	<div class="wrapper bg-light">
		
		<div class="container">
			
			<div class="row justify-content-center no-gutters">
				
				<div class="col-md-10 col-lg-6">
					
					<div class="row mb-3 justify-content-center justify-content-lg-start">
					
						<div class="col-auto"><?php echo wp_get_attachment_image( get_field('logo', 'options'), 'full', false, array('class'=>'img-fluid', 'style'=>'width:180px') ); ?></div>
						
						<div class="col-12 col-md-auto text-xl font-weight-bold align-self-center text-center py-3 py-md-0"><?php _e('+'); ?></div>
						
						<div class="col-auto align-self-center"><a href="https://www.silvernest.com/" target="_blank"><?php echo wp_get_attachment_image( get_field('silvernest_logo', 'options'), 'full', false, array('class'=>'img-fluid', 'style'=>'width:200px') ); ?></a></div>
						
					</div>
					
					<div class="bg-secondary text-white p-3 pr-xl-5">
					
						<h2 class="mb-3"><?php the_field('section_6_title'); ?></h2>
						
						<div class="mb-3 list"><?php the_field('section_6_content'); ?></div>
						
						<?php $link = get_field('section_6_button'); ?>
						
						<div class="text-center text-xl-left">
							
							<a class="btn btn-white" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a> 
						
						</div>
					
					</div>
					
				</div>
				
				<div class="col-md-10 col-lg-5 align-self-center align-self-xl-start">
					
					<div class="offset-img offset-img-left pl-lg-3 pl-xl-0 d-none d-lg-block">
						
						<?php echo wp_get_attachment_image( get_field('section_6_image'), 'card', false, array('class'=>'img-fluid') ); ?>
						
					</div>
					
					<div class="pt-3 p-lg-3 text-base"><?php the_field('section_6_secondary_text'); ?></div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<div class="wrapper">
		
		<div class="container">
			
			<div class="row justify-content-center">
				
				<div class="col-md-10 col-lg-6 align-self-center">
					
					<div class="s"><?php echo wp_get_attachment_image( get_field('section_7_image'), 'Text Image', false, array('class'=>'img-fluid') ); ?></div>
					
				</div>

				<div class="col-md-10 col-lg-6">
					
					<div class="font-weight-bold text-secondary mb-1 mt-2 mt-lg-0"><?php the_field('section_7_sub_title'); ?></div>
					
					<h2 class="text-body mb-2"><?php the_field('section_7_title'); ?></h2>
					
					<div class="mb-4"><?php the_field('section_7_content'); ?></div>
					
					<?php $link = get_field('section_7_button'); ?>
					
					<a class="btn btn-primary" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
												
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<?php $image = get_field('section_8_image'); ?>
	
	<div id="wrapper-hero-image" class="wrapper" style="background: url( <?php echo $image; ?> ) center center;">
		
		<div class="bg-overlay"></div>
		
		<div class="container h-100">
			
			<div class="row justify-content-center h-100">
				
				<div class="col-xl-5 text-center text-white align-self-center">
					
					<h2 class="mb-4"><?php the_field('section_8_title'); ?></h2>
					
					<?php $link = get_field('section_8_button'); ?>
					
					<a class="btn btn-primary" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
					
					<div class="mt-4">
						
						<?php the_field('section_8_content'); ?>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>

</div>

<?php get_footer();
