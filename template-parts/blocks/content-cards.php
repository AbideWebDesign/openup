<div class="wrapper-cards <?php the_field('cards_padding'); ?> <?php the_field('cards_background_color'); ?>">
	
	<div class="container">
		
		<?php if ( get_field('cards_title') ): ?>
			
			<div class="row justify-content-center">
				
				<div class="col">
					
					<h2 class="mb-4 text-center"><?php the_field('cards_title'); ?></h2>
					
				</div>
				
			</div>
			
		<?php endif; ?>
		
		<?php if ( have_rows('cards_items') ): ?>
			
			<div class="row justify-content-md-center">
				
				<?php $size = get_field('cards_size'); ?>
				
				<?php $type = get_field('cards_type'); ?>
				
				<?php while ( have_rows('cards_items') ): the_row(); ?>
				
					<?php if ( get_sub_field('card_link') ): ?>
			
						<?php $link = get_sub_field('card_link'); ?>
			
					<?php endif; ?>
				
					<div class="<?php echo $size; ?> align-self-stretch mb-4">
						
						<div class="card-item h-100">
							
							<?php if ( get_sub_field('card_image') ): ?>
								
								<div class="card-image text-center">
									
									<?php if ( isset( $link ) ): ?>
									
										<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
									
									<?php endif; ?>
									
									<?php if ( $type == 'Square' ): ?>
									
										<?php echo wp_get_attachment_image( get_sub_field('card_image'), 'Square', false, array( 'class'=>'img-fluid w-100' ) ); ?>
										
									<?php else: ?>
									
										<?php echo wp_get_attachment_image( get_sub_field('card_image'), 'Card', false, array( 'class'=>'img-fluid' ) ); ?>
										
									<?php endif; ?>
									
									<?php if ( isset( $link ) ): ?>
									
										</a>
									
									<?php endif; ?>
									
								</div>
								
							<?php endif; ?>
							
							<?php if ( get_sub_field('card_title') || get_sub_field('card_content') ): ?>
							
								<div class="card-content">
									
									<?php if ( get_sub_field('card_title') ): ?>
									
										<?php if ( isset( $link ) ): ?>

											<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
												
										<?php endif; ?>
										
										<h3 class="text-primary mb-0"><?php the_sub_field('card_title'); ?></h3>
										
										<?php if ( isset( $link ) ): ?>
										
											</a>
										
										<?php endif; ?>
									
									<?php endif; ?>
									
									<?php if ( get_sub_field('card_content') ): ?>
									
										<div class="mt-3">
											
											<?php the_sub_field('card_content'); ?>
											
										</div>
									
									<?php endif; ?>
									
									<?php if ( isset( $link ) ): ?>
									
										<div class="mt-3">
											
											<?php echo get_button( $link, 'btn btn-primary btn-arrow btn-plain' ); ?>
											
										</div>
									
									<?php endif; ?>
									
								</div>
							
							<?php endif; ?>
							
						</div>
						
					</div>
				
				<?php endwhile; ?>
					
			</div>
				
		<?php endif; ?>
		
		<?php if ( get_field('cards_button') ): ?>
			
			<div class="row">
				
				<div class="col-12">
					
					<div class="mt-4 text-center">
						
						<?php echo get_button( get_field('cards_button'), 'btn btn-lg btn-arrow', get_field('cards_background_color') ); ?>
						
					</div>
					
				</div>
				
			</div>
		
		<?php endif; ?>
		
	</div>
	
</div>