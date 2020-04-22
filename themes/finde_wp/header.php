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
    <meta name="author" content="Ayar Sava">
    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?>>
  	<?php wp_body_open(); ?>
  	<header class="main-header">
  		<div class="container">
	  		<div class="row">
		  		<div class="col-sm-5">
			        <!-- Brand -->
			        <a class="navbar-brand my-3" href="./index.html">
			          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_finde_vj_blanco_top.png" class="navbar-brand-img img-fluid" alt="Logo Finde">
			        </a>
			    </div>
			    <div class="col-sm-4 text-right ml-auto mt-6">
			    	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_gba_ss_m_footer_blanco.png" class="img-fluid">
			    </div>
			</div>

		    <nav class="navbar navbar-expand-md navbar-dark py-0 px-0">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerVJ" aria-controls="navbarTogglerVJ" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarTogglerVJ">
			    	<ul class="navbar-nav mr-auto mt-2 mt-lg-0">

						<li class="nav-item">
							<a class="nav-link active" href="/videojuegos">Finde Videojuegos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Qué es</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/catalogo">Juegos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Accesorios</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Agenda</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Libros Música</a>
						</li>
			    	</ul>
			    	<div class="d-flex bd-highlight">
					  	<div class="p-2 bd-highlight">
							<form class="col form-inline my-1 my-lg-0">
						      <input class="form-control-sm rounded border-0 mr-sm-1" type="search" placeholder="Buscar" aria-label="Buscar">
						      <button class="btn btn-sm btn-outline-white my-2 my-sm-0" type="submit">Buscar</button>
							</form>
						</div>
					  	<div class="p-2 bd-highlight text-white">
					  		<i class="ml-1 fab fa-instagram"></i>
					    	<i class="ml-1 fab fa-twitter"></i>
					    	<i class="ml-1 fab fa-facebook"></i>
					    </div>
					</div>
				</div>
	   		 </nav>
	    </div>
	</header>
