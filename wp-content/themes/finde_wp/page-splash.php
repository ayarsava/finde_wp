<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Finde_WP
 */

?>

<!doctype html>
<html  <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Feria virtual de cultura independiente de la Provincia de Buenos Aires">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-164544539-1"></script>

		<meta property="og:type" content="website">
		<meta property="og:title" content="Finde | Feria virtual de cultura independiente de la Provincia de Buenos Aires">
		<meta property="og:description" content="Feria virtual de cultura independiente de la Provincia de Buenos Aires">
		<meta property="og:url" content="https://finde.gba.gob.ar">
		<meta property="og:image" content="https://finde.gba.gob.ar/wp-content/themes/finde_wp/assets/img/finde-logo-azul.png" />
	    <meta property="og:url" content="<?php echo home_url( $wp->request ) ?>">
		<meta name="twitter:card" content="summary">
	    <meta name="twitter:site" content="@ba_cultura">
	    <meta name="twitter:title" content="Finde ">

	    <link rel="canonical" href="https://finde.gba.gob.ar/">
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-164544539-1');
		</script>

		<?php wp_head(); ?>

	</head>
	<body <?php body_class('page-splash'); ?>>
		<?php wp_body_open(); ?>
	<div class="container text-center">
		<div class="row">
			<div class="col-12 mx-auto">
				<div class="logo mt-2"><img src="/wp-content/themes/finde_wp/assets/img/finde-logo-azul2.png" width="380" class="img-fluid"></div>
				<h3 class="text-center text-white mt-3 mb-4">Reviví la última edición de FINDE</h3>
			</div>
			<?php
				the_content();
			?>
			<div class="col-lg-12 col-md-15 mx-auto">
				<div class="card-deck my-1 text-center">
					<div class="w-50 bg-transparent mb-4 mx-auto">
						<div class="card text-center shadow hover-shadow">
								<div class="py-3 col-md-8 mx-auto">
										<img src="/wp-content/themes/finde_wp/assets/img/icon-musica.png" class="img-fluid icon">
								</div>
								<div class="pb-1 text-white">
									<h3><strong>MÚSICA</strong></h3>
									<div class="mb-3"><a href="/musica" title="Accedé a la Edición de Música" class="btn btn-outline-light">Accedé</a></div>
								</div>
						</div>
					</div>
					<div class="w-50 bg-transparent mb-4 mx-auto">
						<div class="card text-center shadow hover-shadow">
								<div class="py-3 col-md-8 mx-auto">
										<img src="/wp-content/themes/finde_wp/assets/img/icon-editorial.png" class="img-fluid icon">
								</div>
								<div class="pb-1 text-white">
									<h3><strong>EDITORIAL</strong></h3>
									<div class="mb-3"><a href="/editorial" title="Accedé a la Edición de Editorial" class="btn btn-outline-light">Accedé</a></div>
								</div>
						</div>
					</div>
					<div class="w-50 bg-transparent mb-4 mx-auto">
						<div class="card text-center shadow hover-shadow">
								<div class="py-3 col-md-8 mx-auto">
										<img src="/wp-content/themes/finde_wp/assets/img/icon-audiovisual.png" class="img-fluid icon">
								</div>
								<div class="pb-1 text-white">
									<h3><strong>AUDIOVISUAL</strong></h3>
									<div class="mb-3"><a href="/audiovisual" title="Accedé a la Edición de Audiovisual" class="btn btn-outline-light">Accedé</a></div>
								</div>
						</div>
					</div>
					<div class="w-50 bg-transparent mb-4 mx-auto">
						<div class="card text-center shadow hover-shadow">
								<div class="py-3 col-md-8 mx-auto">
										<img src="/wp-content/themes/finde_wp/assets/img/icon-diseno.png" class="img-fluid icon">
								</div>
								<div class="pb-1 text-white">
									<h3><strong>DISEÑO</strong></h3>
									<div class="mb-3"><a href="/diseno" title="Accedé a la Edición de Diseño" class="btn btn-outline-light">Accedé</a></div>
								</div>
						</div>
					</div>
					<div class="w-50 bg-transparent mb-4 mx-auto">
						<div class="card text-center shadow hover-shadow">
								<div class="py-3 col-md-8 mx-auto">
										<img src="/wp-content/themes/finde_wp/assets/img/icon-vj.png" class="img-fluid icon">
								</div>
								<div class="pb-1 text-white">
									<h3><strong>VIDEOJUEGOS</strong></h3>
									<div class="mb-3"><a href="/videojuegos" title="Accedé a la Edición de Videojuegos" class="btn btn-outline-light">Accedé</a></div>
								</div>
						</div>
					</div>
					

					
				</div>
				
			</div>
		</div>

		<div class="my-5">
			<img src="/wp-content/themes/finde_wp/assets/img/logo-cultura-gobierno-blanco.png" width="380" class="img-fluid">
		</div>
	</div>

	
