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
				
				<div id="clock" class="mx-auto text-white" style="display:none;">
					<ul class="list-unstyled">
						<li><span id="days"></span>días</li>
						<li><span id="hours"></span>horas</li>
						<li><span id="minutes"></span>minutos</li>
						<li><span id="seconds"></span>segundos</li>
					</ul>
				</div>
			</div>
			<?php
				the_content();
			?>
			<div class="col-lg-12 col-md-15 mx-auto">
				<div class="card-deck my-1 text-center">
					<div class="w-100">
						<div class="w-50 bg-transparent mb-4 mx-auto">
							<div class="card text-center shadow hover-shadow">
									<div class="py-3 col-md-8 mx-auto">
											<img src="/wp-content/themes/finde_wp/assets/img/icon-musica.png" class="img-fluid icon">
									</div>
									<div class="pb-1 text-white">
										<h3><strong>PRÓXIMA EDICIÓN<br>MÚSICA</strong></h3>
										<p>Del 3 AL 6 DE DICIEMBRE</p>
										<div class="mb-3" id="activo" style="display:none;"><a href="/musica" class="btn btn-outline-light" title="Accedé a la Edición de Música">Accedé</a></div>
										<button id="soon" type="button" class="btn btn-outline-light mb-3" disabled style="display:none;">Muy pronto</button>
									</div>
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
									<p>Del 19 AL 22 DE NOVIEMBRE</p>
									<div class="mb-3"><a href="/editorial" title="Accedé a la Edición de Editorial" class="btn btn-outline-light">Revivila</a></div>
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
									<p>Del 6 AL 8 DE NOVIEMBRE</p>
									<div class="mb-3"><a href="/audiovisual" title="Accedé a la Edición de Audiovisual" class="btn btn-outline-light">Revivila</a></div>
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
									<p>Del 22 AL 25 DE OCTUBRE</p>
									<div class="mb-3"><a href="/diseno" title="Accedé a la Edición de Diseño" class="btn btn-outline-light">Revivila</a></div>
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
									<p>Del 8 AL 11 DE OCTUBRE</p>
									<div class="mb-3"><a href="/videojuegos" title="Accedé a la Edición de Videojuegos" class="btn btn-outline-light">Revivila</a></div>
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

	<script type="text/javascript">
		 jQuery(function($) {
			const second = 1000,
			minute = second * 60,
			hour = minute * 60,
			day = hour * 24;

			<?php $splash_countdown = get_option( 'launching_date' );?>  // Field Name
			//let countDown = new Date('2020-12-04T19:00:00'.replace(/\s/, 'T')).getTime(),
			let countDown = new Date('<?php echo $splash_countdown;?>'.replace(/\s/, 'T')).getTime(),
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
				document.getElementById("soon").style.display = "inline-block";
			} else {
				clearInterval(x);
				document.getElementById("activo").style.display = "inline-block";
				document.getElementById("clock").style.display = "none";
				document.getElementById("soon").style.display = "none";
			}

			}, second)
			});
	</script>
