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
    <meta name="description" content="Feria virtual de cultura independiente de la Provincia de Buenos Aires">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
    
    <meta property="og:type" content="website">
	<meta property="og:title" content="Finde | Feria virtual de cultura independiente de la Provincia de Buenos Aires">
	<meta property="og:description" content="Feria virtual de cultura independiente de la Provincia de Buenos Aires">
	<meta property="og:url" content="https://finde.gba.gob.ar">
	<meta property="og:image" content="https://finde.gba.gob.ar/wp-content/themes/finde_wp/assets/img/finde-logo-azul.png" />
    <meta property="og:url" content="<?php echo home_url( $wp->request ) ?>">
	<meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@ba_cultura">
    <meta name="twitter:title" content="Finde ">


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
			        <a class="main-logo mt-3" href="/">
			          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/finde_te_logo.png" class="navbar-brand-img img-fluid" alt="Logo Finde" width="260">
			        </a>
			    </div>
			    <div class="col-md-7 d-none d-md-block pt-4 text-right ml-auto">
				    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-cultura-gobierno-blanco.png" class="img-fluid ml-auto" width="340">
				</div>
			</div>
		</div>
	</header>


