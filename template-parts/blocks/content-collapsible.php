<?php $x = 0; ?>

<div class="wrapper-collapsible <?php the_field('list_group_padding'); ?>">

	<div class="container">
		
		<div class="row justify-content-center">
			
			<div class="col-xl-8">
			
				<div class="row justify-content-center">
		
					<div class="col">
		
						<h2 class="mb-2 text-primary"><?php the_field('list_group_title'); ?></h2>
		
						<?php if ( get_field('list_group_text') ): ?>
							
							<div class="mb-4 lead">
								
								<?php the_field('list_group_text'); ?>
								
							</div>
		
						<?php endif; ?>
		
					</div>
		
				</div>
		
				<div class="row justify-content-center">
		
					<div class="col-12">
		
						<?php $accordion_name = str_replace(' ', '-', get_field('list_group_title')); ?>
		
						<div id="accordion-<?php echo $accordion_name; ?>" class="accordion">
		
							<?php if ( have_rows('list_group_items') ): ?>
		
								<?php while ( have_rows('list_group_items') ): the_row(); ?>
		
									<?php $x ++; ?>
		
									<div class="card">
		
										<div class="card-header" id="heading<?php echo $x; ?>">
		
											<h5 class="mb-0">
		
												<button class="btn btn-link collapsed text-left" data-toggle="collapse" data-target="#collapse-<?php echo $accordion_name; ?>-<?php echo $x; ?>" aria-expanded="false" aria-controls="collapse<?php echo $x; ?>">
		
													<?php the_sub_field('list_item_title'); ?>
		
												</button>
		
											</h5>
		
										</div>
		
										<div id="collapse-<?php echo $accordion_name; ?>-<?php echo $x; ?>" class="collapse" aria-labelledby="heading<?php echo $x; ?>" data-parent="#accordion-<?php echo $accordion_name; ?>">
		
											<div class="card-body"><?php the_sub_field('list_item_content'); ?></div>
		
										</div>
		
									</div>
		
								<?php endwhile; ?>
		
							<?php endif; ?>
		
						</div>
		
					</div>
						
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>