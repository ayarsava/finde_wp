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
<?php global $wp;?>
<html  <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
    
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
  	<header class="main-header bg-primary">
  		<div class="container">
	  		<div class="row position-relative">
		  		<div class="logo-wrapper col-lg-2 col-md-3 col-8">
			        <a class="main-logo mt-3" href="/musica">
			          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/finde_mu_logo.png" class="navbar-brand-img img-fluid" alt="Logo Finde" width="260">
			        </a>
			    </div>
			    <div class="col-md-7 d-none d-md-block pt-4 text-right ml-auto">
				    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-cultura-gobierno-blanco.png" class="img-fluid ml-auto" width="340">
				</div>
			</div>
		</div>
		<div class="menu-wrapper bg-music">
			<nav class="navbar navbar-expand-lg container">
				<button class="btn btn-link d-lg-none p-0 ml-auto" type="button" data-toggle="collapse" data-target="#navbarTogglerVJ" aria-controls="navbarTogglerVJ" aria-expanded="false" aria-label="Toggle docs navigation"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img" focusable="false"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg></button>
				<div class="collapse navbar-collapse" id="navbarTogglerVJ">
					<?php
					wp_nav_menu(
						array(
						'menu'			 => 'musica',
						'container'      => 'ul',
						'menu_id'        => 'main-menu',
						'menu_class'	 => 'navbar-nav site-menu-light main-menu d-lg-block',
						)
					);
					?>

					<div class="dropdown px-lg-2 mb-2 my-lg-0">
                        <div class="dropdown-toggle" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Contenidos
                        </div>
                        <div class="dropdown-menu border-0" aria-labelledby="dropdownMenu">
							<a href="/musica/#contenido-experiencias-de-gestion" class="dropdown-item">Experiencia de gestión</a>
							<a href="/musica/#contenido-ideas-para-el-sector" class="dropdown-item">Ideas para el sector</a>
							<a href="/musica/#contenido-identidad-y-produccion-bonaerense" class="dropdown-item">Identidad y producción bonaerense</a>
                        </div>
                    </div>
					<div class="dropdown px-lg-2 mb-2 my-lg-0">
                        <div class="dropdown-toggle" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Código Provincia
                        </div>
                        <div class="dropdown-menu border-0" aria-labelledby="dropdownMenu">
							<a href="/#" class="dropdown-item">Convocatoria</a>
							<a href="/#" class="dropdown-item">Laboratorio</a>
                        </div>
                    </div>
			    	<div class="dropdown mr-auto px-lg-2 mb-2 my-lg-0">
                        <div class="dropdown-toggle" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Ediciones anteriores
                        </div>
                        <div class="dropdown-menu border-0" aria-labelledby="dropdownMenu">
                            <a href="/videojuegos" class="dropdown-item"><i class="fas fa-gamepad"></i>  Videojuegos</a>
                            <a href="/diseno" class="dropdown-item"><i class="fas fa-swatchbook"></i>  Diseño</a>
							<a href="/audiovisual" class="dropdown-item"><i class="fas fa-film"></i>  Audiovisual</a>
                            <a href="/editorial" class="dropdown-item"><i class="fas fa-book"></i>  Editorial</a>
                        </div>
                    </div>
			    	<div class="navbar-sec d-md-flex my-2 my-lg-0">
					  	<div class="buscador mr-1 my-2 mb-md-0">
						    <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
								<label>
									<span class="screen-reader-text">Buscar:</span>
									<input type="search" class="search-field" placeholder="Buscar" value="" name="s">
								</label>
								<button type="submit" class="search-submit"><span class="fa fa-search"></span></button>
							</form>
						</div>
					  	<div class="redes">
					  		<a href="https://www.instagram.com/buenosairescultura/" target="_blank"><i class="mr-1 fab fa-instagram"></i></a>
					    	<a href="https://twitter.com/ba_cultura" target="_blank"><i class="mr-1 fab fa-twitter"></i></a>
					    	<a href="https://www.facebook.com/buenosairescultura" target="_blank"><i class="mr-1 fab fa-facebook"></i></a>
					    	<a href="https://www.youtube.com/channel/UC9oKeEOrfIrPCCLmfBuEWLw" target="_blank"><i class="mr-1 fab fa-youtube"></i></a>
					    </div>
					</div>
				</div>
	   		</nav>
	   	</div>
	</header>


