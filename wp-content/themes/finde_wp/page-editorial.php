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

get_template_part( 'layouts/header', 'ed' ); 
?>

	<div id="content" class="editorial">
		<section id="slide-principal">
			<div id="carouselCaptions" class="carousel slide" data-ride="carousel">

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
			    <?php wp_showSlides_fullbg_editorial() ?>
			  </div>

			  <!-- Controls -->
			  <!-- Carousel nav -->
			  <a class="carousel-control-prev" href="#carouselCaptions" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselCaptions" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</section>


		<!--OPB-->
		<section id="finde-vj">
			<div class="container-fluid py-5 bg-primary">
				<div class="container">
					<div class="col-md-8 mx-auto text-center text-white py-5">
						<div class="h4">#FINDELEYENDO</div>
						<div class="h1 pb-3"><strong>Un finde para leer y apoyar a la cultura local</strong></div>
						<div class="lead">Finde te propone un fin de semana dedicado a la lectura, a descubrir y compartir el placer que desatan los libros. Una iniciativa para comprar, regalar, recomendar y descargar libros, y apoyar a los creadores locales.</div>
					</div>
				</div>
			</div>
		</section>

		<!--BP-->
		<section class="bg-white">
			<div class="container-fluid">
				<div class="container">
					<div class="row">
						<div class="col">
							<a href="https://www.bancoprovincia.com.ar/cuentadni/index?url=cdniIndividuos" target="_blank" title="Enlace al sitio web del Banco Provincia">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-banco-provincia.gif" class="img-fluid d-none d-sm-block" alt="Banco Provincia">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-banco-provincia_m.gif" class="mx-auto img-fluid d-block d-sm-none" alt="Banco Provincia">
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>


		<!--ENTRADA AL CATALOGO DE EDITORIALES-->
		<section class="opb-editoriales">
			<div class="opb-wrapper">
				<div class="container">
			        <div class="col-lg-9 col-md-11 p-lg-5 p-3 cta-info">
			        	<div class="ml-lg-5">
					        <h1 class="extra-grande mt-4">Entrá a la oferta de editoriales independientes que participan en Finde</h1>
					        <div class="lead my-3">Apoyá tu circuito cultural local</div>
					        <a href="/editoriales" class="hvr-icon-forward"><strong>Conocé las editoriales</strong> <i class="fas fa-angle-double-right hvr-icon"></i></a>
					    </div>
				    </div>
			    </div>
			    <div class="cta-galeria d-none d-md-block">
					<div class="slick-fade">
			            <a href="#"><img src="/wp-content/themes/finde_wp/assets/img/editorial-01.jpg"></a>
			            <a href="#"><img src="/wp-content/themes/finde_wp/assets/img/editorial-02.jpg"></a>
			        </div>
		        </div>
				
			</div>
		</section>

		<!--ENTRADA AL CATALOGO DE LIBRERÍAS-->
		<section class="bg-white">
			<div class="position-relative" style="min-height: 400px;">
			    <div class="cta-librerias d-none d-md-block">
			        <img src="/wp-content/themes/finde_wp/assets/img/editorial-03.jpg">
		        </div>
				<div class="container">
			        <div class="col-lg-10 col-md-9 ml-auto p-lg-5 p-3 cta-info">
			        	<div class="ml-lg-5">
					        <h2 class="font-weight-bold mt-5 pt-5">Después de Finde, seguí comprando los libros de las editoriales independientes en librerías de la provincia de Buenos Aires</h2>
					        <div class="lead my-3">Apoyá tu circuito cultural local</div>
					        <a href="/editoriales" class="hvr-icon-forward"><strong>Conocé las librerías</strong> <i class="fas fa-angle-double-right hvr-icon"></i></a>
					    </div>
				    </div>
			    </div>
			</div>
		</section>

		<!--AGENDA-->
		<section id="agenda" class="bg-card py-5">
			<div class="container">
				<h1 class="mb-3">Agenda  <a href="/en-vivo" title="Agenda de eventos" class="btn btn-outline-primary"><i class="fas fa-video"></i> En vivo </a></h1>

				<div class="row">
					<?php 
					$args = array(
				    'post_type'              => 'agenda',
				    'posts_per_page' => 13,
				    'meta_query' => array(
				        'fecha_clause' => array(
				            'key' => 'fecha_id',
				        ),
				        'destacado_clause' => array(
				            'key' => 'destacado_id',
				        ), 
				    ),
				    'orderby' => array( 
				          'destacado_clause' => 'DESC',
				          'fecha_clause' => 'ASC',
				    ),
				  );

				  // The Query
				  $query_agenda = new WP_Query( $args );

					if ( $query_agenda->have_posts() ) : ?>

						<?php
						/* Start the Loop */
						while ( $query_agenda->have_posts() ) :
							$query_agenda->the_post();

							/*
							 * Include the Post-Type-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_type() );

						endwhile;


					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>
				</div><!-- #main -->
			
				<!--<div class="row">
					<div class="col">
						<div class="border-top mt-3 py-3">
							<a href="/agenda"><strong>+ Ver agenda completa</strong></a>
						</div>
					</div>
				</div>-->
			</div>
		</section>



<?php 
get_template_part( 'layouts/footer', 'ed' ); 