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
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" type="image/vnd.microsoft.icon" />
    
    <meta property="og:description" content="<?php the_title();?>" />
	<meta property="og:url" content="" />
    <meta property="og:image" content="https://finde.gba.gob.ar/wp-content/themes/finde_wp/assets/img/finde-logo-azul.png" />

    <meta name="description" content="<?php the_title();?>">
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php the_title();?>" />
    <meta property="og:url" content="https://finde.gba.gob.ar">
	<meta property="og:image" content="https://finde.gba.gob.ar/wp-content/themes/finde_wp/assets/img/finde-logo-azul.png" />

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@ba_cultura">
    <meta name="twitter:title" content="<?php the_title();?>">


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
	  		<div class="row position-relative">
		  		<div class="logo-wrapper col-lg-2 col-md-3 col-5">
			        <!-- Brand -->
			        <a class="main-logo mt-3" href="/">
			          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/finde_vj_logo.png" class="navbar-brand-img img-fluid" alt="Logo Finde" width="260">
			        </a>
			    </div>
			    <div class="header-dates col-lg-6 col-md-5 col-10">
			    	<ul class="list-unstyled text-light pt-3">
			    		<li><strong>Videojuegos > Jue 30.04 al Dom 03.05</strong></li>
						<li>Editorial > Jue 07 al Dom 10.05</li>
						<li>Música > Jue 14 al Dom 17.05</li>
					</ul>
			    </div>
			    <div class="col-md-7 d-none d-md-block pt-4 text-right">
				    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-cultura-gobierno-blanco.png" class="img-fluid ml-auto" width="340">
				</div>
			</div>
		</div>
		<div class="menu-wrapper bg-light">
			<nav class="navbar navbar-expand-lg container">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerVJ" aria-controls="navbarTogglerVJ" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
				</button>
				<button class="btn btn-link d-lg-none p-0 ml-3" type="button" data-toggle="collapse" data-target="#navbarTogglerVJ" aria-controls="navbarTogglerVJ" aria-expanded="false" aria-label="Toggle docs navigation"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img" focusable="false"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg></button>
				<div class="collapse navbar-collapse" id="navbarTogglerVJ">
					<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
						<li class="nav-item">
							<a class="nav-link active" href="/videojuegos/#finde-vj">Inicio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/que-es">Qué es</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/videojuegos/#catalogo">Juegos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/videojuegos/#agenda">Agenda</a>
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


