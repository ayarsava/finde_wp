<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Finde_WP
 */

get_header(); ?>

	<div id="content">
		<section>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'slide' ); ?>
			<?php endwhile; // End of the loop. ?>
		</section>

		<section>
			<div class="container-fluid" style="background: linear-gradient(90deg, #FFF 50%, #97c13c 50%);">
				<div class="container">
					<div class="col-12">
						<a href="https://www.bancoprovincia.com.ar/web" target="_blank" title="Enlace al sitio web del Banco Provincia">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-banco-provincia.png" class="img-fluid" alt="Banco Provincia">
						</a>
					</div>
				</div>
			</div>
		</section>

		<!--CATALOGO-->
		<section id="catalogo" class="py-5">
			<div class="container">
				<ul id="form-ui" class="list-inline">
						<h4>Filtrar por descuento</h4>
						<?php 
						$descuento = get_terms('descuento');
						if( $descuento ){ foreach ($descuento as $cat ) {?>
						<li class="list-inline-item"><label><input type="checkbox" value="<?php echo $cat->slug; ?>" class="discount"><?php echo $cat->name; ?></label></li>
						<?php  } }?>
					<h4>Filtrar por categoría</h4>
						<?php 
						$rubros = get_terms('rubro');
						if( $rubros ){ foreach ($rubros as $cat ) {?>
						<li class="list-inline-item"><label><input type="checkbox" value="<?php echo $cat->slug; ?>" class="category"><?php echo $cat->name; ?></label></li>
						<?php  } }?>

				</ul>

				<div id="container" class="grid row">
					<!-- 2 col grid @ xs, 3 col grid @ sm, 4 col grid @ md -->
						<div class="grid-sizer col-xs-6 col-sm-4 col-md-3"></div>
					<?php wp_archive_catalogovj() ?>
					</div>
				</div>
			</div>
		</section>


		<!--AGENDA OK-->

		<section id="destacado_principal" class="py-5">
			<div class="container">
				<h1>Agenda</h1>
				<div id="destacadoInicio">
					<!-- Beg #ruelta -->
					<div id="ruleta" class="carousel slide carousel-fade" data-interval="15000" style="width: 100%;">
						<!-- Wrapper for slides -->
							<?php wp_archive_agenda() ?>
						</div><!-- End #ruelta -->
					</div><!-- End #destacadoInicio -->
				</div>

				<div class="text-right"><hr>
					<a href="#">+ Ver agenda completa</a>
				</div>
			</div>
		</section>



<?php get_footer(); ?>
