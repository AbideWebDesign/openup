<div class="wrapper-text-columns wrapper <?php the_field('text_columns_background_color'); ?>">

	<div class="container">
		
		<div class="row">
			
			<div class="col-lg-6">
				
				<h2 class="mb-3"><?php the_field('text_columns_title_1'); ?></h2>
				
				<?php if ( get_field('text_columns_type_1') == 'Default' ): ?>
				
					<?php the_field('text_columns_default_1'); ?>
					
				<?php else: ?>
				
					<?php the_field('text_columns_list_1'); ?>
				
				<?php endif; ?>
				
			</div>
			
			<div class="col-lg-6">
				
				<h2 class="mb-3"><?php the_field('text_columns_title_2'); ?></h2>
				
				<?php if ( get_field('text_columns_type_2') == 'Default' ): ?>
				
					<?php the_field('text_columns_default_2'); ?>
					
				<?php else: ?>
				
					<?php while ( have_rows('text_columns_list_2') ): the_row(); ?>
					
						<div class="list-group-item d-flex bg-light p-3">
							
							<div class="mr-3 align-self-center">
								
								<i class="fa fa-check-circle"></i>
								
							</div>
							
							<div><strong><?php the_sub_field('content'); ?></strong></div>
							
						</div>
					
					<?php endwhile; ?>
				
				<?php endif; ?>			
				
			</div>
			
			<?php if ( get_field('text_columns_button') ): ?>
			
				<div class="col-12">
					
					<div class="mt-4 text-center">
						
						<?php echo get_button( get_field('text_columns_button'), 'btn btn-lg btn-arrow', get_field('text_columns_background_color') ); ?>
						
					</div>
					
				</div>
			
			<?php endif; ?>
			
		</div>
		
	</div>
	
</div>