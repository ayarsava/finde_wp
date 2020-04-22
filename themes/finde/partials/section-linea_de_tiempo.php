<?php 
	$titulo = get_sub_field('titulo');
	$texto = get_sub_field('texto');
?>

<section class="cronograma py-6">
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

		<div id="cd-timeline">

		<?php 

				// check if the nested repeater field has rows of data
				if( have_rows('hitos') ):

					$count = 1;

				 	// loop through the rows of data
				    while ( have_rows('hitos') ) : the_row(); ?>

					<?php 
					    $titulo = get_sub_field('titulo');
						$icono = get_sub_field('icono');
						$texto = get_sub_field('texto');
						$bajada = get_sub_field('bajada');
						$texto_boton = get_sub_field('texto_boton');
						$link_boton = get_sub_field('link_boton');
						$fecha = get_sub_field('fecha');

						$date = new DateTime($fecha);
									
						$meses=array(1=>"Ene","Feb","Mar","Abr","May","Jun","Jul",
						 "Ago","Sep","Oct","Nov","Dic");

						//echo $date->format('d F'); // should print 07 August
						//echo $date->format('h:i A'); // should print 09:30 PM
					?>

						<div class="cd-timeline-block block-<?php echo $count; ?>	">
							<div class="cd-timeline-img <?php echo (!$fecha) ? 'icon' : '' ; ?>">
								<?php if ($fecha) { ?>
									<div class="cd-date">
									     <span class="dia"><?php echo $date->format('d'); ?></span>
									     <span class="mes"><?php echo $meses[$date->format('n')]//echo $date->format('M'); ?></span>
										 <span class="ano"><?php echo $date->format('y'); ?></span>
								   	</div>
								<?php } else { ?>
									<i class="fa fa-calendar fa-stack-1x fa-inverse"></i> 
								<?php } ?>	   
							</div> <!-- cd-timeline-img -->

							<div class="cd-timeline-content">
								<header>
									<?php if ($titulo) { ?>
										<h3><?php echo $titulo; ?></h3>
									<?php } ?>
									<?php if ($bajada) { ?>
										<span class="d-block cd-lead lead"><?php echo $bajada; ?> </span>
									<?php } ?>
								</header>
								<div class="content">
									<?php if ($texto) { ?>
									<p><?php echo $texto; ?></p>
								<?php } ?>
								<?php if ($link_boton && $texto_boton) { ?>
									<a href="<?php echo $link_boton; ?>" class="btn btn-secondary"><?php echo $texto_boton; ?></a>
								<?php } ?>
								</div>
									
							</div> <!-- cd-timeline-content -->
						</div> <!-- cd-timeline-block -->

					<?php 

					$count++;

					endwhile;

				endif;

			?>   

		</div> 
<?php if ($link_boton && $texto_boton) { ?>
	<div class="cta text-center">
		<a href="<?php echo $link_boton; ?>" class="btn btn-lg btn-secondary"><?php echo $texto_boton; ?></a>
	</div>
<?php } ?>
	</div>
</section>
