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


		<section id="catalogo" class="py-5">
			<div class="container">
				<div id="placeHolder"></div>
				<ul id="container" class="row">
					<?php wp_archive_catalogo() ?>
					</ul>
				</div>
			</div>
		</section>

<?php get_footer(); ?>
