<?php
/**
 * Template Name: Home Page
 *
 * @package openup
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$house_src = '/wp-content/uploads/2021/06/house.png';

?>

<div id="page-wrapper">

	<?php $image = wp_get_attachment_image_src( get_field('hero_image'), 'Hero Image', false ); ?>
	
	<div class="hero-home bg-pattern bg-light py-2 pt-xl-5">
				
		<div class="container">
			
			<div class="row">
				
				<div class="col-xl-7">
					
					<h1 class="text-secondary text-center text-xl-left"><?php the_field('hero_title'); ?></h1>
					
					<div class="row justify-content-center">
						
						<div class="col-auto mt-2">
							
							<img src="/wp-content/uploads/2021/06/arrow-up.png" width="82" />
							
						</div>
						
					</div>
					
					<div class="row my-2">
						
						<div class="col-md-6">
							
							<div class="card shadow p-2 text-center">
								
								<div class="mb-2">
									
									<img src="<?php echo $house_src; ?>" class="house-sm" />
									
								</div>
								
								<h3 class="text-secondary mb-3"><?php the_field('hero_box_title_1'); ?></h3>
								
								<div class="mb-4"><?php the_field('hero_box_text_1'); ?></div>
								
								<?php $link1 = get_field('hero_box_button_1'); ?>
								
								<a href="<?php echo $link1['url']; ?>" class="btn btn-secondary btn-block" target="<?php echo $link1['target']; ?>"><?php echo $link1['title']; ?></a>
								
							</div>
							
						</div>
						
						<div class="col-md-6 mt-3 mt-md-0">
							
							<div class="card shadow p-2 text-center">
								
								<div class="mb-2">
									
									<img src="<?php echo $house_src; ?>" class="house-sm" />
									
								</div>
								
								<h3 class="text-primary mb-3"><?php the_field('hero_box_title_2'); ?></h3>
								
								<div class="mb-4"><?php the_field('hero_box_text_2'); ?></div>
								
								<?php $link1 = get_field('hero_box_button_2'); ?>
								
								<a href="<?php echo $link1['url']; ?>" class="btn btn-primary btn-block" target="<?php echo $link1['target']; ?>"><?php echo $link1['title']; ?></a>
								
							</div>
							
						</div>
						
					</div>
					
					<div class="row justify-content-center">
						
						<div class="col-auto mt-1">
							
							<img src="/wp-content/uploads/2021/06/arrow-down.png" width="82" />
							
						</div>
						
					</div>
					
				</div>
				
				<div class="col-xl-5 d-none d-xl-block">
					
					<img src="<?php echo $image[0]; ?>" class="img-fluid" />
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<div class="lead-home wrapper">
		
		<div class="container">
			
			<div class="row justify-content-center">
				
				<div class="col-auto text-center">
					
					<div class="mb-3"><img src="<?php echo $house_src; ?>" class="house" /></div>
					
					<h2 class="mb-3 mb-lg-5"><?php the_field('lead_text'); ?></h2>
					
				</div>
				
			</div>
			
			<div class="row justify-content-center no-gutters">
				
				<div class="col-md-8 col-lg-5 col-xl-5 offset-img align-self-md-center align-self-xl-start">
					
					<?php echo wp_get_attachment_image( get_field('lead_image'), 'card', false, array('class'=>'img-fluid shadow') ); ?>
					
				</div>
				
				<div class="col-md-10 col-lg-7 col-xl-7">
					
					<div class="bg-secondary text-white mt-xl-4 offset-text">
						
						<?php the_field('lead_content'); ?>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<div class="wrapper-sm">
		
		<div class="container">
			
			<div class="row justify-content-center justify-content-lg-between">
				
				<div class="col-md-8 col-xl-6 align-self-center">
					
					<h2 class="mb-3 text-center text-lg-left"><?php the_field('section_3_title'); ?></h2>
					
					<div class="mb-3"><?php the_field('section_3_text'); ?></div>
					
					<div class="row">
						
						<div class="col-6 col-xl-auto">
							
							<div class="mb-3 text-center"><img src="<?php echo $house_src; ?>" class="house-sm" /></div>
							
							<?php $link = get_field('section_3_button_1'); ?>
							
							<a href="<?php echo $link['url']; ?>" class="btn btn-secondary" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
							
						</div>
						
						<div class="col-6 col-xl-auto">
							
							<div class="mb-3 text-center"><img src="<?php echo $house_src; ?>" class="house-sm" /></div>
							
							<?php $link = get_field('section_3_button_2'); ?>
							
							<a href="<?php echo $link['url']; ?>" class="btn btn-primary" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
							
						</div>
						
					</div>
					
				</div>
				
				<div class="col-lg-4 col-xl-5 d-none d-lg-block">

					<?php echo wp_get_attachment_image( get_field('section_3_image'), 'full', false, array('class'=>'img-fluid shadow') ); ?>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<div class="wrapper-sm-bottom">
		
		<div class="container">
			
			<div class="row justify-content-center">
				
				<div class="col-md-8 col-lg-5 offset-img align-self-md-center align-self-xl-start">
					
					<?php echo wp_get_attachment_image( get_field('section_4_image'), 'card', false, array('class'=>'img-fluid shadow mb-4 mb-lg-0') ); ?>
					
				</div>
				
				<div class="col-md-10 col-lg-7">
											
					<div class="row justify-content-center mb-3">
					
						<div class="col-auto"><?php echo wp_get_attachment_image( get_field('logo', 'options'), 'full', false, array('class'=>'img-fluid', 'style'=>'width:209px') ); ?></div>
						
						<div class="col-12 col-md-auto text-xl font-weight-bold align-self-center text-center py-3 py-md-0"><?php _e('+'); ?></div>
						
						<div class="col-auto align-self-center"><a href="https://www.silvernest.com/" target="_blank"><?php echo wp_get_attachment_image( get_field('silvernest_logo', 'options'), 'full', false, array('class'=>'img-fluid', 'style'=>'width:229px') ); ?></a></div>
						
					</div>
					
					<div class="bg-secondary text-white mt-xl-4 offset-text">
						
						<div class="text-lg font-weigth-bold"><?php the_field('section_4_content'); ?></div>
						
					</div>
											
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<div id="section-5" class="pb-5 bg-light">
		
		<div class="container">
			
			<div class="row justify-content-center mb-5">
				
				<div class="col-lg-3 offset-lg-1 align-self-center">
					
					<a href="https://www.silvernest.com/" target="_blank"><?php echo wp_get_attachment_image( get_field('silvernest_logo', 'options'), 'full', false, array('class'=>'img-fluid', 'style'=>'width:229px') ); ?></a>
					
				</div>
				
				<div class="col-lg-5">
					
					<?php the_field('section_5_content_1'); ?>
					
				</div>
				
			</div>
			
			<div class="row justify-content-center">
				
				<div class="col-lg-5">

					<?php the_field('section_5_content_2'); ?>
					
				</div>
				
				<div class="col-lg-3 offset-lg-1 align-self-center">
					
					<?php echo wp_get_attachment_image( get_field('logo', 'options'), 'full', false, array('class'=>'img-fluid', 'style'=>'width:209px') ); ?>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<div class="wrapper bg-pattern">
		
		<div class="container">
			
			<div class="row justify-content-center text-center">
				
				<div class="col-lg-7">
					
					<h2 class="text-secondary mb-4"><?php the_field('section_6_title'); ?></h2>
					
					<div class="mb-4"><?php the_field('section_6_content'); ?></div>
					
					<div class="row">
						
						<div class="col-md-6">
							
							<div class="card shadow p-2 text-center">
								
								<div class="mb-2">
									
									<img src="<?php echo $house_src; ?>" class="house-sm" />
									
								</div>
								
								<h3 class="text-secondary mb-3"><?php the_field('hero_box_title_1'); ?></h3>
								
								<div class="mb-4"><?php the_field('hero_box_text_1'); ?></div>
								
								<?php $link = get_field('hero_box_button_1'); ?>
																
								<a href="<?php echo $link['url']; ?>" class="btn btn-secondary btn-block" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
								
							</div>
							
						</div>
						
						<div class="col-md-6 mt-3 mt-md-0">
							
							<div class="card shadow p-2 text-center">
								
								<div class="mb-2">
									
									<img src="<?php echo $house_src; ?>" class="house-sm" />
									
								</div>
								
								<h3 class="text-primary mb-3"><?php the_field('hero_box_title_2'); ?></h3>
								
								<div class="mb-4"><?php the_field('hero_box_text_2'); ?></div>
								
								<?php $link1 = get_field('hero_box_button_2'); ?>
								
								<a href="<?php echo $link1['url']; ?>" class="btn btn-primary btn-block" target="<?php echo $link1['target']; ?>"><?php echo $link1['title']; ?></a>
								
							</div>
							
						</div>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>

</div>

<?php get_footer();
