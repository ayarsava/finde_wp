<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Finde_WP
 */

?>

	</div><!-- #content -->
	<?php if ( is_page( 'Videojuegos' ) ) {?>
		<section id="sponsors" class="bg-white">
			<div class="container py-3">
				<div class="row">
					<div class="col-lg-3 py-2"><strong>Acompañan</strong></div>
					<div class="col-lg-12 text-right">
						<div class="container">
							<span class="align-middle"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/press-over.png" class="img-fluid mx-3" width="60"></span>
							<span class="align-middle"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/woman-in-games.png" class="img-fluid mx-3" width="40"></span> 
							<span class="align-middle"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/juegosargentinos.png" class="img-fluid mx-3" width="90"></span>
							<span class="align-middle"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/adva.png" class="img-fluid mx-3" width="90"></span>
							<span class="align-middle"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/unpaz.png" class="img-fluid mx-3" width="90"></span>
							<span class="align-middle"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/fundav.png" class="img-fluid mx-3" width="90"></span>
						</div>
					</div>
				</div>
			</div>
		</section>

	<?php } ?>
	
	<footer class="site-footer py-5 bg-primary">
    	<div class="container">
			<div class="row my-5">
			    <div class="col-lg-2 col-md-3 col-5">
			      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_finde_footer-base.png" class="img-fluid mb-5">
			    </div>
			    <div class="col-lg-6 col-md-5">
			      <ul class="list-unstyled text-white">
			      	<li><a href="/" class="text-light">Finde</a></li>
			      	<li><a href="/videojuegos/#catalogo" class="text-light">Videojuegos</a></li>
			      	<li><a href="/editorial" class="text-light">Editorial</a></li>
			      	<li><a href="/agenda" class="text-light">Agenda</a></li>
			      	<li><a href="/preguntas-frecuentes/" class="text-light">Preguntas frecuentes</a></li>
			      </ul>
			    </div>
			    <div class="col-lg-7 col-md-7 ml-auto text-right">
			      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-cultura-gobierno-blanco.png" class="logo-cultura img-fluid">
			    </div>
			</div>
		</div><!-- .container -->
  	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
