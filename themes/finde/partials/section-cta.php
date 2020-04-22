<?php 
	$titulo = get_sub_field('titulo');
	$texto = get_sub_field('texto');
?>

<section class="cta py-6">
		<div class="container">
			<div class="row section-header">
				<div class="col-md-8 offset-md-2 text-center">
						<?php if ($titulo) { ?>
			  				<h2 class="mb-3"><?php echo $titulo; ?></h2>
			  			<?php } ?>
						<?php if ($texto) { ?>
							<p class="lead"><?php echo $texto; ?></p>
						<?php } ?>
						<?php 

							// check if the nested repeater field has rows of data
							if( have_rows('botones') ):

							 	// loop through the rows of data
							    while ( have_rows('botones') ) : the_row(); ?>

									<?php 
										$link_boton = get_sub_field('link_boton');
										$texto_boton = get_sub_field('texto_boton');
									?>


									<a href="<?php echo ($link_boton) ? $link_boton : '' ; ?>" class="btn btn-lg btn-primary mt-3"><?php echo ($texto_boton) ? $texto_boton : '' ; ?></a>
												

								<?php endwhile;

							endif;

						?>
				</div>
			</div>
		</div>
	</div>
</section>


					
						
					
					
					
				
				
			