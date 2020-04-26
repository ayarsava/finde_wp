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

	<div id="content" class="home-vj">
		<section id="slide-principal">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'slide' ); ?>
			<?php endwhile; // End of the loop. ?>
		</section>


		<!--OPB-->
		<section id="finde-vj">
			<div class="container-fluid py-5" style="background:#222;">
				<div class="container">
					<div class="col-md-8 mx-auto text-center text-white py-5">
						<div class="h4">#FINDEJUGANDO</div>
						<div class="h1 pb-3"><strong>Un finde para jugar y apoyar a los creadores locales</strong></div>
						<div class="lead">FINDE te propone un fin de semana dedicado a jugar, aprender y descubrir nuevas experiencias digitales. Una iniciativa para que puedas comprar, regalar, descargar juegos y apoyar a los creadores durante la cuarentena.</div>
					</div>
				</div>
			</div>
		</section>

		<!--BP-->
		<section class="bg-white">
			<div class="container-fluid">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<a href="https://www.bancoprovincia.com.ar/web" target="_blank" title="Enlace al sitio web del Banco Provincia">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/BannerBP_1140x160.gif" class="img-fluid" alt="Banco Provincia">
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!--JUEGO DESTACADO-->
		<section class="py-5 bg-light">
			<div class="container">
				<div id="juego-destacado" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<?php wp_archive_destacadovj() ?>
					</div>
					<!-- Controls -->
					<a class="carousel-control-prev" href="#juego-destacado" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#juego-destacado" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
			</div>	
		</section>

		<!--CATALOGO-->
		<section id="catalogo" class="bg-white py-5">
			<div class="container">
				<h1 class="mb-4"><strong>Juegos</strong></h1>
				<ul id="form-ui" class="list-inline">
					<div class="row">
						<div class="col-md-3">
							<h5>Categorías</h5>
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
							<h5>Elegí tu descuento</h5>
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
					<div class="">
						<!-- 2 col grid @ xs, 3 col grid @ sm, 4 col grid @ md -->
						<div class="grid-sizer"></div>
							<?php wp_archive_catalogovj() ?>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!--AGENDA-->
		<section id="agenda" class="bg-light py-5">
			<div class="container">
				<h1 class="mb-3"><a href="/agenda/" title="Agenda de eventos">Agenda</a></h1>

				<div class="row">
					<?php 
					$args = array(
				    'post_type'              => 'agenda',
				    'posts_per_page' => 12,
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
			
				<div class="row">
						<div class="col-12">
							<div class="border-top mt-3 py-3">
								<a href="/agenda"><strong>+ Ver agenda completa</strong></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>



<?php get_footer(); ?>
