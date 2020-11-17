<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finde_WP
 */

get_template_part( 'layouts/header', 'ed' ); 
?>
<div class="main-content editorial archive-editoriales">
	<section class="spotlight bg-cover" style="background-color:#ff677c;background-image: url('/wp-content/uploads/2020/05/4633915022_1ec66bf99b_k.jpg'); background-size:cover; background-position:center center; min-height:350px;">
		<div class="spotlight-holder pt-5 pb-7 py-lg-0">
			<span class="mask bg-gradient-primary opacity-6"></span>
			<div class="container d-flex align-items-bottom">
				<div class="col">
					<div class="row">
						<div class="info">
							<h1 class="text-white extra-grande">Vidriera</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="catalogo" class="bg-white py-5">
		<div class="container">
			
				<div class="container">
					<h3 class="mb-4"><strong>Sustentabilidad</strong></h3>
				</div>
				<div class="container-fluid border-bottom pb-3">
					<div class="slick vidriera">
						<?php wp_editorial_vidriera(30,'sustentabilidad'); ?>
					</div>
				</div><!-- #main -->

		</div>
	</section>
</div>

<?php
get_template_part( 'layouts/footer', 'ed' ); 
