<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finde_WP
 */

get_template_part( 'layouts/header', 'mu' ); 
?>
<div class="main-content bg-card">
	<section class="archive-agenda spotlight bg-cover" style="background-image: url('/wp-content/themes/finde_wp/assets/img/musica-splash2.jpg'); background-size:cover; background-position:center center; height:400px;">
		<div class="spotlight-holder pt-5 pb-7 py-lg-0">
			<span class="mask bg-gradient-primary opacity-6"></span>
			<div class="container d-flex align-items-bottom">
				<div class="col">
					<div class="row">
						<div class="info">
							<h1 class="text-white extra-grande">Productos</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	
	<div class="container py-4">
		<div class="row">
			<?php wp_musica_productosmusica_full(-1,''); ?>
		</div>
	</div><!-- #primary -->

<?php
get_template_part( 'layouts/footer', 'mu' ); 
