<?php

if ( get_field('text_image_background_color') == 'bg-white' || get_field('text_image_background_color') == 'bg-light' ) {
	
	$icon = wp_get_attachment_image( get_field('open_icon', 'options'), 'Full', false, array('class'=>'img-divider') );
	$btn_classes = 'btn btn-primary btn-arrow';
	
} else {
	
	$icon = wp_get_attachment_image( get_field('open_icon_white', 'options'), 'Full', false, array('class'=>'img-divider') );
	$btn_classes = 'btn btn-light btn-arrow';
	
}
	
?>

<div class="wrapper-text-image wrapper <?php the_field('text_image_background_color'); ?>">
	
	<div class="container">
		
		<div class="row justify-content-center">
			
			<div class="col-md-10 col-xl-8 text-center">
				
				<?php if ( get_field('text_image_divider') ): ?>
				
					<?php echo $icon; ?>
				
				<?php endif; ?>
								
				<?php if ( get_field('text_image_title') ): ?>
					
					<h2 class="mb-3 mb-md-4"><?php the_field('text_image_title'); ?></h2>
		
				<?php endif; ?>
				
			</div>
			
		</div>
		
		<div class="row justify-content-center">
			
			<?php if ( get_field('text_image_image') ): ?>
			
				<div class="col-md-10 col-lg-6 align-self-center <?php the_field('text_image_direction'); ?> mb-lg-0 ">
					
					<?php the_field('text_image_content'); ?>
					
					<?php if ( get_field('text_image_button') ): ?>
											
						<div class="mt-4">
							
							<?php echo get_button( get_field('text_image_button'), $btn_classes ); ?>
							
						</div>
					
					<?php endif; ?>
					
				</div>
				
				<div class="col-md-10 col-lg-6 align-self-center">
					
					<div class="s"><?php echo wp_get_attachment_image( get_field('text_image_image'), 'Text Image', false, array('class'=>'img-fluid') ); ?></div>
					
				</div>
				
			<?php elseif ( get_field('text_image_content') ): ?>
			
				<div class="col-md-10 col-xl-8">
					
					<?php the_field('text_image_content'); ?>
					
					<?php if ( get_field('text_image_button') ): ?>
											
						<div class="mt-4">
							
							<?php echo get_button( get_field('text_image_button'), $btn_classes ); ?>
							
						</div>
					
					<?php endif; ?>
					
				</div>
			
			<?php endif; ?>
			
		</div>
		
	</div>
	
</div>