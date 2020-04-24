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
    <meta name="description" content="">
    <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-164544539-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-164544539-1');
	</script>

    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?>>
  	<?php wp_body_open(); ?>
  	<header class="main-header">
  		<div class="container">
	  		<div class="row">
		  		<div class="col-sm-5">
			        <!-- Brand -->
			        <a class="navbar-brand my-3" href="/">
			          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_finde_vj_blanco_top.png" class="navbar-brand-img img-fluid" alt="Logo Finde">
			        </a>
			    </div>
			    <div class="col-sm-4 text-right ml-auto mt-6">
			    	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_gba_ss_m_footer_blanco.png" class="img-fluid">
			    </div>
			</div>
		</div>
		<div class="menu-wrapper bg-light">
			<nav class="navbar navbar-expand-lg container">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerVJ" aria-controls="navbarTogglerVJ" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarTogglerVJ">
					<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
						<li class="nav-item">
							<a class="nav-link active" href="/videojuegos">Finde Videojuegos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/que-es">Qué es</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/catalogo">Juegos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Accesorios</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/agenda">Agenda</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/">Próximas ediciones</a>
						</li>
			    	</ul>
			    	<div class="d-flex bd-highlight">
					  	<div class="bd-highlight">

						    <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
								<label>
									<span class="screen-reader-text">Buscar:</span>
									<input type="search" class="search-field" placeholder="Buscar" value="" name="s">
								</label>
								<button type="submit" class="search-submit"><span class="fa fa-search"></span></button>
							</form>
						</div>
					  	<div class="bd-highlight redes ml-2">
					  		<a href="https://www.instagram.com/buenosairescultura/" target="_blank"><i class="ml-1 fab fa-instagram"></i></a>
					    	<a href="https://twitter.com/ba_cultura" target="_blank"><i class="ml-1 fab fa-twitter"></i></a>
					    	<a href="https://www.facebook.com/buenosairescultura" target="_blank"><i class="ml-1 fab fa-facebook"></i></a>
					    </div>
					</div>
				</div>
	   		</nav>
	   	</div>
	</header>
