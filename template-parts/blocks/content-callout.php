<?php $image_url = wp_get_attachment_image_url( get_field('callout_image'), 'Callout', false ); ?>

<div class="wrapper-callout d-flex <?php the_field('callout_text_direction'); ?>" style="background-image: url(<?php echo $image_url; ?>);">
	
	<div class="d-flex flex-column flex-md-row align-self-end align-self-lg-center">
		
		<div class="d-md-none">
			
			<?php echo wp_get_attachment_image( get_field('callout_image_mobile'), 'medium_large', false, array('class'=>'img-fluid') ); ?>
			
		</div>
		
		<div class="callout-content <?php the_field('callout_background_color'); ?>">
			
			<?php if ( get_field('callout_title') ):  ?>
			
				<h2><?php the_field('callout_title'); ?></h2>
			
			<?php endif; ?>
			
			<?php if ( get_field('callout_content') ): ?>
			
				<?php the_field('callout_content'); ?>
			
			<?php endif; ?>
			
		</div>
		
	</div>
	
</div>