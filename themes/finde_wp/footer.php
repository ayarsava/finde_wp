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
	<section class="bg-white">
		<div class="container pt-3">
			<div class="row">
				<div class="col-md-8"><strong>Auspician</strong></div>
				<div class="col-md-4 text-right">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos_sponsors.png" class="img-fluid pb-3">
				</div>
			</div>
		</div>
	</section>
	<footer class="site-footer py-5">
    	<div class="container">
			<div class="row my-5">
			    <div class="col-sm-2">
			      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_finde_vj_blanco.png" class="img-fluid mb-5">
			    </div>
			    <div class="col-sm-3">
			      <ul class="list-unstyled text-white">
			      	<li><strong>Finde</strong></li>
			      	<li>Juegos</li>
			      	<li>Agenda</li>
			      	<li>Preguntas frecuentes</li>
			      	<li>Contacto</li>
			      </ul>
			    </div>
			    <div class="col-sm-5 ml-auto">
			      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_gba_ss_m_footer_blanco.png" class="img-fluid">
			    </div>
			</div>
		</div><!-- .container -->
  	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
