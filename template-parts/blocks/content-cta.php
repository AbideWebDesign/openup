<div class="wrapper-cta <?php the_field('cta_background_color'); ?> wrapper">
	
	<div class="container">
		
		<div class="row justify-content-center">
			
			<div class="col-lg-8 col-xl-6 text-center">
				
				<h2 class="larger mb-4"><?php the_field('cta_text'); ?></h2>
				
				<?php echo get_button(get_field('cta_link'), 'btn btn-primary btn-lg btn-arrow'); ?>
				
				<?php if ( get_field('cta_small_text') ): ?>
				
					<p class="mt-4 mb-0 text-sm"><?php the_field('cta_small_text'); ?></p>
				
				<?php endif; ?>
				
			</div>
			
		</div>
		
	</div>
	
</div>