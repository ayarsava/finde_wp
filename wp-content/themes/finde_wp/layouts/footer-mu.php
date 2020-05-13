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
	<?php if ( is_page( 'musica' ) ) {?>
		<section id="sponsors" class="bg-white">
			<div class="container py-3">
				<div class="row">
					<div class="col-lg-2 py-2"><strong>Acompañan</strong></div>
					<div class="col-lg-13 text-right">
						<div class="container">
							<span class="align-middle mb-3 mb-lg-0 d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/aatia-logo.png" class="img-fluid mx-3" width="90"></span>
							<span class="align-middle mb-3 mb-lg-0 d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/agentes-de-prensa-logo.png" class="img-fluid mx-3" width="80"></span> 
							<span class="align-middle mb-3 mb-lg-0 d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/amplify-logo.png" class="img-fluid mx-3" width="90"></span>
							<span class="align-middle mb-3 mb-lg-0 d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/asiar-logo.png" class="img-fluid mx-3" width="70"></span>
							<span class="align-middle mb-3 mb-lg-0 d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/caimavi-logo.png" class="img-fluid mx-3" width="130"></span>
							<span class="align-middle mb-3 mb-lg-0 d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/cafim-logo.png" class="img-fluid mx-3" width="90"></span>
							<span class="align-middle mb-3 mb-lg-0 d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/feria-de-la-musica-logo.png" class="img-fluid mx-3" width="90"></span>
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
			      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_finde_footer-mu.png" class="img-fluid mb-5">
			    </div>
			    <div class="col-lg-6 col-md-5">
			      <ul class="list-unstyled text-white">
			      	<li><a href="/musica" class="text-light">Finde</a></li>
			      	<li><a href="/musica/#categorias" class="text-light">Comprar</a></li>
			      	<li><a href="/musica/#agenda" class="text-light">Agenda</a></li>
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
