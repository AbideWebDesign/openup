<?php $type = get_field('hero_type'); ?>

<?php $image = wp_get_attachment_image_src( get_field('hero_image'), 'Hero Image', false ); ?>

<?php if ( $type == 'Image Only' ): ?>
	
	<div id="wrapper-hero-image" class="wrapper-hero" style="background-image: url( <?php echo $image[0]; ?> )">
		
		<div class="bg-overlay"></div>
		
		<div class="container h-100">
			
			<div class="row h-100">
				
				<div class="col-auto align-self-end">
					
					<h1><?php the_title(); ?></h1>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
<?php elseif ( $type == 'Form' ): ?>

	<?php $form_id = get_field('hero_form'); ?>
	
	<div id="wrapper-hero-form" style="background-image: url( <?php echo $image[0]; ?> )">
		
		<div class="bg-overlay"></div>
		
		<div class="container h-100">
			
			<div class="row justify-content-center justify-content-xl-between h-100">
				
				<div class="col-md-10 col-xl-6 align-self-center text-md-center">
					
					<h1 class="mb-3"><?php the_field('hero_title'); ?></h1>
					
					<p class="lead mb-0"><?php the_field('hero_lead'); ?></p>
					
				</div>
				
				<div class="col-md-8 col-xl-5 align-self-center">
					
					<?php echo do_shortcode('[gravityform id="' . $form_id . '" title="true" description="false" ajax="true" tabindex="49"]'); ?>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
		
<?php else: ?>

	<div id="wrapper-hero-image" class="wrapper" style="background-image: url( <?php echo $image[0]; ?> )">		
		
		<div class="bg-overlay"></div>
		
		<div class="container h-100">
	
			<div class="row justify-content-center text-center text-white h-100">
					
				<div class="col-xl-8 align-self-center">
															
					<h1 class="mb-3"><?php the_field('hero_title'); ?></h1>
					
					<p class="lead mb-4"><?php the_field('hero_lead'); ?></p>
					
					<?php if ( get_field('hero_link') ): ?>
						
						<?php echo get_button( get_field('hero_link'), 'btn btn-primary btn-lg btn-arrow' ); ?>
						
					<?php endif; ?>
															
				</div>
					
			</div>
			
		</div>
		
	</div>

<?php endif; ?>