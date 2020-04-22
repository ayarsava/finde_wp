<?php $image = get_sub_field('imagen'); ?>
<section class="jumbotron jumbotron-fluid" style="background-image: url(<?php echo $image['url']; ?>);" id="intro">
  <div class="container">
  	<div class="row">
  		<div class="col text-center">
  			<?php 
  				$titulo = get_sub_field('titulo');
          $logo = get_sub_field('logo');
  				$texto = get_sub_field('texto');
  				$texto_boton = get_sub_field('texto_boton');
  				$link_boton = get_sub_field('link_boton');
  			?>
        <?php if ($logo) { ?>
          <img src="<?php echo $logo['url']; ?>" class="img-fluid">
        <?php } ?>
  			<?php if ($titulo) { ?>
  				<h1 class="display-1"><?php echo $titulo; ?></h1>
  			<?php } ?>
			<?php if ($texto) { ?>
			<p class="lead"><?php echo $texto; ?></p>
			<?php } ?>
			<?php if ($texto_boton && $link_boton) { ?>
			<a href="<?php echo $link_boton; ?>" class="btn btn-lg btn-secondary mt-4" style="white-space: normal;"><?php echo $texto_boton; ?></a>	
			<?php } ?>
  		</div>
  	</div>
  </div>
</section>