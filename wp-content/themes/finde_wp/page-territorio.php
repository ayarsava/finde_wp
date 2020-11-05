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
    


        <div id="content" class="home-territorio" style="height:100vh;">
            <div id="logo-flotante" class="position-absolute" style="z-index:2;left:calc(50% - 90px);top: 100px;width:180px;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_finde_footer-te.png" class="img-fluid mb-5" width="180">
            </div>
            
            <section class="">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="w-100 w-md-50 text-center text-white d-flex justify-content-center align-items-end position-relative" style="height:100vh;background-color:#4e3e7c;min-height:650px;background-position:center;background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/gcp.jpg);background-size:cover;background-repeat:no-repeat;">
                            <div class="data">
                                <a href="/territorio/gestion-cultural-publica" title="Gestión Cultural Pública" class="stretched-link"></a>
                                <h4 class="font-weight-bold" style="color:#000;text-shadow: 1px 0px 3px #FFF;">Gestión Cultural Pública</h4>
                                <div class="lead px-5 pt-0 pb-3 font-weight-bold mx-3" style="text-shadow: 1px 0px 3px #FFF; color:#000; font-size:.8rem;">Sitio para Secretarías de Cultura y gestorxs culturales públicos</div>
                                <a href="/territorio/gestion-cultural-publica" class="boton-3d mt-3 mb-5">Entrar</a>
                            </div>
                        </div>
                        <div class="w-100 w-md-50 text-center text-white d-flex justify-content-center align-items-end position-relative" style="height:100vh;background-color:#dd0839;min-height:650px;background-position:center;background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/gci.jpg);background-size:cover;background-repeat:no-repeat;">
                            <div class="data">
                                <a href="/territorio/gestion-cultural-independiente" title="Gestión Cultural Independiente" class="stretched-link"></a>
                                <h4 class="font-weight-bold" style="color:#000;text-shadow: 1px 0px 3px #FFF;">Gestión Cultural Independiente</h4>
                                <div class="lead px-5 pt-0 pb-3 font-weight-bold mx-3" style="text-shadow: 1px 0px 3px #FFF; color:#000; font-size:.8rem;">Sitio para espacios, festivales y colectivos culturales independientes</div>
                                <a href="/territorio/gestion-cultural-independiente" class="boton-3d mt-3 mb-5">Entrar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div><!-- #content -->
<?php wp_footer(); ?>

</body>
</html>

