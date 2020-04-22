<?php 
	$titulo = get_sub_field('titulo');
	$texto = get_sub_field('texto');
?>

<section class="destacados pt-6 pb-5">

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

      		<?php 

      		 $fields = get_sub_field('destacados');

      		 $count = count($fields);

				// check if the nested repeater field has rows of data
				if( have_rows('destacados') ):

					


						switch ($count) {
							case 1:
							    $class = "col-md-12";
							    break;
							case 2:
							     $class = "col-md-6";
							    break;
							case 3:
							     $class = "col-md-4";
							    break;
							case 4:
							     $class = "col-md-3";
							    break;
							case 6:
							     $class = "col-md-4";
							    break;
							default:
								 $class = "col-md-4";
						}

				 	// loop through the rows of data
				    while ( have_rows('destacados') ) : the_row(); ?>

					<?php 
						$titulo = get_sub_field('titulo');
						$texto = get_sub_field('texto');
						$link = get_sub_field('link');
						$icono = get_sub_field('icono');
					?>


						 <div class="<?php echo $class; ?> mb-5">
				            <div class="row align-items-center">
				              <div class="col-3">
				                <div class="features-icon">
				                  <span class="fa-stack fa-lg">
				                    <i class="fa fa-circle fa-stack-2x"></i>
				                    <i class="fa <?php echo ($icono) ? $icono : 'fa-check' ; ?> fa-stack-1x fa-inverse"></i>
				                  </span>
				                </div>
				              </div>
				              <article class="col-9">
				              <?php if ($titulo) { ?>
									<h3>
										<?php echo $titulo; ?> 
									</h3>
								<?php } ?>
				              	<?php if ($texto) { ?>
									<p>
										<?php echo $texto; ?> 
										<?php if ($link) { ?>
											<a href="<?php echo $link; ?>" class="">Leer Más</a>
										<?php } ?>
									</p>
								<?php } ?>
				              </article>
				            </div>
				          </div>

					<?php endwhile;

				endif;

			?>   
        
      </div>

    </div>

</section>

					
						
					
					
					
				
				
			