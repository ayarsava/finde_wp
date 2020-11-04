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
	
	<?php if ( is_page( 'audiovisual' ) ) {?>
		<section id="sponsors" class="bg-white">
			<div class="container py-3">
				<div class="row">
					<div class="col-lg-15 py-2 mb-3"><strong>Acompañan</strong></div>
					<div class="col-lg-15 text-center">
						<div class="container autoplay">
							<span class="align-middle"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/diseno/cad.png"></span>
							<span class="align-middle"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/diseno/hay-futura.png"></span>
							<span class="align-middle"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/diseno/ecodal.png"></span>
							<span class="align-middle"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/diseno/disur.png"></span>
							<span class="align-middle"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/diseno/upso.png"></span>
							<span class="align-middle"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/diseno/unnoba.jpg"></span>
							<span class="align-middle"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/diseno/unmpd.png"></span>
							<span class="align-middle"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/diseno/unlp.jpg"></span>
							<span class="align-middle"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/diseno/undav.jpg"></span>
							<span class="align-middle"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/diseno/unahur.png"></span>
							<span class="align-middle"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/diseno/inti.png"></span> 
							<span class="align-middle"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/diseno/ida.png"></span>
							<span class="align-middle"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/diseno/cck.png"></span>
							<span class="align-middle"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/diseno/min-sgc.png"></span>
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
			      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_finde_footer-te.png" class="img-fluid mb-5">
			    </div>
			    <div class="col-lg-6 col-md-5">
			      <ul class="list-unstyled text-white">
					<li><a href="/territorio" class="text-light">Finde</a></li>
					<li><a href="/territorio/gestion-cultural-independiente/" class="text-light">Cultura Independiente</a></li>
					<li><a href="/territorio/gestion-cultural-publica/" class="text-light">Gestión Pública</a></li>
					<li><a href="/territorio/preguntas-frecuentes/" class="text-light">Preguntas frecuentes</a></li>
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
