<?php 
	$titulo = get_sub_field('titulo');
	$texto = get_sub_field('texto');
	$video = get_sub_field('video');
?>
<section class="video py-6">
	<div class="container">
		<div class="row section-header mb-5">
			<div class="col-md-8 offset-md-2 text-center">
				<?php if ($titulo) { ?>
	  				<h2 class="mb-3"><?php echo $titulo; ?></h2>
	  			<?php } ?>
				<?php if ($texto) { ?>
					<p class="lead"><?php echo $texto; ?></p>
				<?php } ?>
			</div>

		</div>
		<div class="row">
			<div class="col-md-8 offset-md-2 text-center">
				<div class="embed-responsive embed-responsive-16by9">
				<?php echo $video; ?>
				</div>
			</div>
		</div>
	</div>
</section>



					
						
					
					
					
				
				
			