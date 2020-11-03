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
    <div id="soon" style="display:none;">
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


        <div id="content" class="home-territorio">
            <!--CCK-->
            <section class="bg-white cck">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="w-100 w-md-50 h-100 text-center text-white d-flex justify-content-center align-items-center position-relative" style="background-color:#153243;min-height:350px;">
                            <a href="/territorio/gestion-cultural-publica" title="Gestión Cultural Pública" class="stretched-link"></a>
                            <h4>Gestión Cultural Pública</h4>
                        </div>
                        <div class="w-100 w-md-50 h-100 text-center text-white d-flex justify-content-center align-items-center position-relative" style="background-color:#284B63;min-height:350px;">
                            <a href="/territorio/gestion-cultural-independiente" title="Gestión Cultural Independiente" class="stretched-link"></a>
                            <h4>Gestión Cultural Independiente</h4>
                        </div>
                    </div>
                </div>
            </section>

            <!--BANNERS-->
            <?php wp_archive_banners('territorio');?>

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
					<li><a href="/territorio/gestion-cultural-independiente/" class="text-light">Finde Territorio Cultura Independiente</a></li>
					<li><a href="/territorio/gestion-cultural-publica/" class="text-light">Finde Territorio Gestión Pública</a></li>
			      	<li><a href="/preguntas-frecuentes/" class="text-light">Preguntas frecuentes</a></li>
                    </ul>
                    </div>
                    <div class="col-lg-7 col-md-7 ml-auto text-right">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-cultura-gobierno-blanco.png" class="logo-cultura img-fluid">
                    </div>
                </div>
            </div><!-- .container -->
        </footer><!-- #colophon -->
    </div>

    <div id="clock" class="mx-auto py-5 text-dark h-100 w-100 text-center" style="min-height: 100vh;display:flex;align-items:center;background:#e0e3d8; display:none;">
        <ul class="list-unstyled">
            <li><span id="days" class="font-weight-bold"></span>días</li>
            <li><span id="hours" class="font-weight-bold"></span>horas</li>
            <li><span id="minutes" class="font-weight-bold"></span>minutos</li>
            <li><span id="seconds" class="font-weight-bold"></span>segundos</li>
        </ul>
        <div class="col-md-8 mx-auto mb-5">
        <div class="embed-responsive embed-responsive-16by9" style="border:solid 3px #FFF;border-radius:3px;">
            <iframe class="embed-responsive-item"  src="https://www.youtube.com/embed/PKS-gzTRTdA?rel=0" allowfullscreen></iframe>
        </div>
        </div>
        <h3><strong>Cultura en Territorio</strong></h3>
        <div class="lead">Herramientas, intercambio de experiencias, conversaciones para gestorxs culturales.</div>
    </div>

<?php wp_footer(); ?>
<script type="text/javascript">
jQuery(function($) {
    const second = 1000,
    minute = second * 60,
    hour = minute * 60,
    day = hour * 24;

    let countDown = new Date('2020-10-05T00:00:01'.replace(/\s/, 'T')).getTime(),
    x = setInterval(function() {    

    let now = new Date().getTime(),
    distance = countDown - now;

    document.getElementById('days').innerText = Math.floor(distance / (day)),
    document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
    document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
    document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);

    //do something later when date is reached
    if (distance > 0) {
        document.getElementById("clock").style.display = "block";
    } else {
        clearInterval(x);
        document.getElementById("soon").style.display = "block";
    }

    }, second)
});
</script>

</body>
</html>

