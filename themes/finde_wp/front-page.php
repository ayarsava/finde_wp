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
	<div class="container text-center">
		<div class="row">
			<div class="col-md-8 mx-auto">
				<div class="logo mt-5 mb-4"><img src="/wp-content/themes/finde_wp/assets/img/finde-logo-azul.png" width="380" class="img-fluid"></div>
				
				<div id="clock" class="mx-auto text-white" style="display:none;">
					<ul class="list-unstyled">
						<li><span id="days"></span>días</li>
						<li><span id="hours"></span>horas</li>
						<li><span id="minutes"></span>minutos</li>
						<li><span id="seconds"></span>segundos</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-10 col-md-12 mx-auto">
				<h2 class="text-light"><strong>Próximas ediciones</strong><hr></h2>
				<div class="card-deck my-4 text-center">
					<div class="col-md-4 bg-transparent mb-4">
							<div class="card text-center shadow hover-shadow">
								<a href="#" class="stretched-link"></a>
									<div class="py-3 col-md-8 mx-auto">
											<img src="/wp-content/themes/finde_wp/assets/img/icon-vj.png" class="img-fluid icon">
									</div>
									<div class="pb-5 text-white">
											<h3><strong>Videojuegos</strong></h3>
											<p>30 ABRIL - 2 MAYO</p>
											<a href="#" class="btn btn-outline-light disabled">Muy pronto</a>
									</div>
							</div>
					</div>
					<div class="col-md-4 bg-transparent mb-4">
							<div class="card text-center shadow hover-shadow">
								<a href="#" class="stretched-link"></a>
									<div class="py-3 col-md-8 mx-auto">
											<img src="/wp-content/themes/finde_wp/assets/img/icon-editorial.png" class="img-fluid icon">
									</div>
									<div class="pb-5 text-white">
											<h3><strong>Libros</strong></h3>
											<p>7 MAYO - 10 MAYO</p>
											<a href="#" class="btn btn-outline-light disabled">Muy pronto</a>
									</div>
							</div>
					</div>
					<div class="col-md-4 bg-transparent mb-4">
						<div class="card text-center shadow hover-shadow">
							<a href="#" class="stretched-link"></a>
								<div class="py-3 col-md-8 mx-auto">
										<img src="/wp-content/themes/finde_wp/assets/img/icon-musica.png" class="img-fluid icon">
								</div>
								<div class="pb-5 text-white">
										<h3><strong>Música</strong></h3>
										<p>14 MAYO - 17 MAYO</p>
										<a href="#" class="btn btn-outline-light disabled">Muy pronto</a>
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

			let countDown = new Date('2020-04-30T00:00:00'.replace(/\s/, 'T')).getTime(),
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
				document.getElementById("clock").style.display = "none";
			}

			}, second)
			});
	</script>
