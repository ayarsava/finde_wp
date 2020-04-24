<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finde_WP
 */

get_header();
?>
<div class="main-content">
	<section class="archive-agenda spotlight bg-cover" style="background-image: url('/wp-content/themes/finde_wp/assets/img/bg_vj.png'); background-size:cover; background-position:center center; height:400px;">
		<div class="spotlight-holder pt-5 pb-7 py-lg-0">
			<span class="mask bg-gradient-primary opacity-6"></span>
			<div class="container d-flex align-items-bottom">
				<div class="col">
					<div class="row">
						<div class="info">
							<h1 class="text-white extra-grande">Juegos</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	
	<div class="container py-5">
		<div class="row">
			<div class="col mx-auto">

					<ul id="form-ui" class="list-inline">
					<div class="row">
						<div class="col-md-3">
							<h5><strong>Categorías</strong></h5>
						</div>
						<div class="col-md-9">
							<?php 
							$rubros = get_terms('rubro');
							if( $rubros ){ foreach ($rubros as $cat ) {?>
							<li class="list-inline-item"><label><input type="checkbox" value="<?php echo $cat->slug; ?>" class="category"> <?php echo $cat->name; ?></label></li>
							<?php  } }?>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-3">
							<h5><strong>Elegí tu descuento</strong></h5>
						</div>
						<div class="col-md-9">
							<?php 
							$descuento = get_terms('descuento');
							if( $descuento ){ foreach ($descuento as $cat ) {?>
							<li class="list-inline-item"><label><input type="checkbox" value="<?php echo $cat->slug; ?>" class="discount"> <?php echo $cat->name; ?></label></li>
							<?php  } }?>
						</div>
					</div>

				</ul>

				<div id="container" class="grid">
					<div class="p-0">
						<!-- 2 col grid @ xs, 3 col grid @ sm, 4 col grid @ md -->
						<div class="grid-sizer"></div>
							<?php wp_archive_catalogovj() ?>
						</div>
					</div>
				</div>
			</div><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
