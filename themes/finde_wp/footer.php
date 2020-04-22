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

	<footer class="site-footer">
    	<div class="container">
			<div class="row my-5">
			    <div class="col-sm-3">
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
			    <div class="col-sm-6">
			      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos_sponsors.png" class="img-fluid mb-5">
			      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_gba_ss_m_footer_blanco.png" class="img-fluid">
			    </div>
			</div>
		</div><!-- .container -->
  	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
