<?php 
	$titulo = get_sub_field('titulo');
	$texto = get_sub_field('texto');
	$imagenes = get_sub_field('imagenes');
?>

<section class="carousel py-6">

<div class="container">
<?php if ($titulo || $texto) { ?>
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
  <?php } ?>
      <div class="row">

      		<?php if( $imagenes ): 
      			$count = count($imagenes);
      	
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
					case 6:
					     $class = "col-md-2";
					    break;
					default:
						 $class = "col-md-3";
				}

      		?>
	
			        <?php foreach( $imagenes as $image ): ?>
			            	<div class="<?php echo $class; ?> col-sm-4 col-6 text-center"><img src="<?php echo $image["url"]; ?>" class="img-fluid" alt="<?php echo $image["caption"]; ?>"></div>
			        <?php endforeach; ?>
			  
			<?php endif; ?>  
        
      </div>

    </div>

</section>	