<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finde_WP
 */

get_template_part( 'layouts/header', 'di' ); 
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); 
				
?>
<div class="main-content disenio archive-disenio">
	<?php if ($term->slug == 'moda' ) {
	echo '<section class="spotlight bg-cover" style="background-color:#ea07c4;background-image: url(/wp-content/themes/finde_wp/assets/img/diseno-bg.jpg); background-size:cover; background-position:center center; min-height:350px;">';
	} elseif ($term->slug == 'muebles-y-objetos' ) {
	echo '<section class="spotlight bg-cover" style="background-color:#ea07c4;background-image: url(/wp-content/themes/finde_wp/assets/img/diseno-muebles.jpg); background-size:cover; background-position:center center; min-height:350px;">';
	} elseif ($term->slug == 'servicios-de-diseno' ) {
	echo '<section class="spotlight bg-cover" style="background-color:#ea07c4;background-image: url(/wp-content/themes/finde_wp/assets/img/diseno-servicios.jpg); background-size:cover; background-position:center center; min-height:350px;">';
	} elseif ($term->slug == 'ilustracion-y-piezas-graficas' ) {
	echo '<section class="spotlight bg-cover" style="background-color:#ea07c4;background-image: url(/wp-content/themes/finde_wp/assets/img/diseno-ilustracion.jpg); background-size:cover; background-position:center center; min-height:350px;">';
	} elseif ($term->slug == 'artesanias' ) {
	echo '<section class="spotlight bg-cover" style="background-color:#ea07c4;background-image: url(/wp-content/themes/finde_wp/assets/img/diseno-artesanias.jpg); background-size:cover; background-position:center center; min-height:350px;">';
	} else {}
	?>

		<div class="spotlight-holder pt-5 pb-7 py-lg-0">
			<span class="mask bg-gradient-primary opacity-6"></span>
		</div>
	</section>

	<section id="filtros" class="bg-light p-0 m-0">
		<div class="container position-relative">
			<ul id="form-ui" class="list-inline"  style="margin-top:-120px;">
				<?php 
				if ($term->slug == 'moda' ) {
					echo '<h1 class="page-title">Moda</h1>';
				} elseif ($term->slug == 'muebles-y-objetos' ) {
					echo '<h1 class="page-title">Muebles, objetos y juguetes</h1>';
				} elseif ($term->slug == 'servicios-de-diseno' ) {
					echo '<h1 class="page-title">Servicios de diseño</h1>';
				} elseif ($term->slug == 'ilustracion-y-piezas-graficas' ) {
					echo '<h1 class="page-title">Ilustración y piezas gráficas</h1>';
				} elseif ($term->slug == 'artesanias' ) {
					echo '<h1 class="page-title">Artesanías</h1>';
				} else {
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				}
				?>

				<div id="" class="form-ui list-inline">
					<div class="row">
						<div class="col-md-15">
						<?php
							$term = get_term_by( 'slug', get_query_var('term'), get_query_var('taxonomy') );
							$term_id = $term->term_id;
							$taxonomy_name = 'rubro_di';
							$termchildren = get_term_children( $term_id, $taxonomy_name );
						
							if( $termchildren ){ ?>
							<ul class="list-unstyled text-left mt-2">
								<?php
								foreach ( $termchildren as $child ) {
									$term = get_term_by( 'id', $child, $taxonomy_name );
									// Skip empty terms
									if( $term->count <= 0 ) {
										continue;
									}
									echo '<li class="list-inline-item '.$term->slug.'"><label><input type="checkbox" value="'.$term->slug.'" class="category" autocomplete="off"><div  class="icon-box">  ' . $term->name . '</div></label></li>';
								}
								?>
							</ul>
							<?php } ?>

							<?php 
							$descuento = get_terms('descuento_di');
							if( $descuento ){ ?>
							<hr>
							<div class="">
								<ul class="list-unstyled text-left">
									<?php 
									foreach ($descuento as $cat ) {?>
									<li class="list-inline-item"><label><input type="checkbox" value="<?php echo $cat->slug; ?>" class="discount" autocomplete="off"><div  class="icon-box"> <?php echo $cat->name; ?></div></label></li>
									<?php } ?>
								</ul>
							</div>
						<?php } ?>
						</div>
					</div>
				</div>
			</ul>
	</section>

	<!--CATALOGO-->
	<div class="container py-4">
		<div class="row">
			<div class="col mx-auto">
				<div id="load" class="lds-wrap">Estamos preparando el catálogo<br><div class="lds-hourglass"></div></div>
				<div id="container" class="grid loadable collapsed">
				<!-- 2 col grid @ xs, 3 col grid @ sm, 4 col grid @ md -->
				<div class="grid-sizer"></div>
				<?php wp_archive_catalogodi() ?>
			</div>
		</div>
	</div>
				


	

<?php
get_template_part( 'layouts/footer', 'di' ); 
