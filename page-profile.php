<?php
/**
 * Template Name: Profile Info
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

	<div class="wrapper-sm bg-light">
	
		<div class="container">
			
			<div class="row justify-content-center">
				
				<div class="col-xl-7 text-center">
					
					<div class="text-lg"><?php the_field('section_1_content'); ?></div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<div class="wrapper">
		
		<div class="container">
			
			<div class="row justify-content-center">
				
				<div class="col-xl-9">
					
					<?php the_field('section_2_content'); ?>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<div class="wrapper-text-columns wrapper bg-secondary">

		<div class="container">
			
			<div class="row justify-content-center">
				
				<div class="col-lg-6 col-xl-5">
					
					<?php the_field('section_3_content'); ?>
										
				</div>
				
				<div class="col-lg-6 col-xl-4 offset-xl-1 align-self-center">
				
					<div class="card shadow text-center p-2">
												
						<h4 class="text-secondary mb-0"><?php the_field('section_3_card_title'); ?></h4>
						
						<?php echo do_shortcode('[gravityform id="4" title="false" description="false" ajax="true" tabindex="49"]'); ?>
												
					</div>	
				
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<div class="wrapper">
		
		<div class="container">
			
			<div class="row justify-content-center">
				
				<div class="col-xl-6 text-center">
					
					<h2 class="mb-3"><?php the_field('section_4_title'); ?></h2>
					
					<div class="mb-3"><?php the_field('section_4_content'); ?></div>
					
					<?php $link = get_field('section_4_button'); ?>
					
					<a class="btn btn-primary" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>

<?php get_footer(); ?>