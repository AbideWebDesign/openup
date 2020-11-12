<?php if ( get_field('top_bar', 'options') ): ?>
	
	<div id="top-bar" class="bg-secondary py-2">
		
		<div class="container">
			
			<div class="row justify-content-center">
				
				<div class="col-12">
					
					<div class="text-center text-white text-sm">
					
						<?php if ( get_field('top_bar_link', 'options') ): ?>
						
							<a href="<?php the_field('top_bar_link', 'options'); ?>">
								
						<?php endif; ?>
						
						<?php the_field('top_bar_text', 'options'); ?> <?php echo ( get_field('top_bar_link', 'options') ? '<i class="fa fa-chevron-right"></i>' : '' ); ?>
							
						<?php if ( get_field('top_bar_link', 'options') ): ?>
						
							</a>
						
						<?php endif; ?> 
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>

<?php endif; ?>
