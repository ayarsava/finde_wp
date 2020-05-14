<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finde_WP
 */

get_template_part( 'layouts/header', 'mu' ); 
?>
<div class="main-content music archive-music">
	<section class="spotlight bg-cover" style="background-color:#7db003;background-image: url('/wp-content/themes/finde_wp/assets/img/musica_002.jpg'); background-size:cover; background-position:center center; min-height:350px;">
		<div class="spotlight-holder pt-5 pb-7 py-lg-0">
			<span class="mask bg-gradient-primary opacity-6"></span>
		</div>
	</section>

	<section id="filtros" class="bg-white p-0 m-0">
		<div class="container position-relative">
			<ul id="form-ui" class="list-inline"  style="margin-top:-120px;">
			<?php 
			$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); 
			if ($term->slug == 'instrumentos-musicales' ) {
				echo '<h1 class="page-title">Instrumentos</h1><div class="lead mb-5">Guitarras, Bajos, Teclados, Baterías y mucho más.</div>';
			} elseif ($term->slug == 'musica' ) {
				echo '<h1 class="page-title">Sellos discográficos</h1><div class="lead mb-5">Vinilos, Digital y CDs</div>';
			} elseif ($term->slug == 'audio-profesional' ) {
				echo '<h1 class="page-title">Audio</h1><div class="lead mb-5">Profesional y Hogareño</div>';
			} elseif ($term->slug == 'estudios' ) {
				echo '<h1 class="page-title">Estudios</h1><div class="lead mb-5">Grabación, Mezcla y Mastering</div>';
			} elseif ($term->slug == 'agregadoras-digitales' ) {
				echo '<h1 class="page-title">Distribuidoras Digitales</h1><div class="lead mb-5">Agregadoras de contenido</div>';
			} else {
			the_archive_title( '<h1 class="page-title">', '</h1>' );
			}
			?>


			<?php
			$term = get_term_by( 'slug', get_query_var('term'), get_query_var('taxonomy') );
			$term_id = $term->term_id;
			$taxonomy_name = 'rubro_mu';
			$termchildren = get_term_children( $term_id, $taxonomy_name );
			 
				if( $termchildren ){ ?>
				<div class="row mt-4">
					<div class="col-md-3">
						<h5><strong>Categorías</strong></h5>
					</div>
					<ul class="col-md-12">
						<?php
						foreach ( $termchildren as $child ) {
					    	$term = get_term_by( 'id', $child, $taxonomy_name );
					    	// Skip empty terms
						    if( $term->count <= 0 ) {
						        continue;
						    }
					    	echo '<li class="list-inline-item '.$term->slug.'"><label><input type="checkbox" value="'.$term->slug.'" class="category" autocomplete="off"> ' . $term->name . '</label></li>';
						}
						?>
					</ul>
				</div>
				<?php } ?>

				<?php 
				$descuento = get_terms('descuento_mu');
				if( $descuento ){ ?>
				<hr>
				<div class="row">
					<div class="col-md-3">
						<h5><strong>Promociones</strong></h5>
					</div>
					<ul class="col-md-12">
						<?php 
						foreach ($descuento as $cat ) {?>
						<li class="list-inline-item"><label><input type="checkbox" value="<?php echo $cat->slug; ?>" class="discount" autocomplete="off"> <?php echo $cat->name; ?></label></li>
						<?php } ?>
					</ul>
				</div>
				<?php } ?>
			</ul>
		</div>
	</section>

	<!--CATALOGO-->
	<section id="catalogo" class="bg-white py-5">
		<div class="container position-relative">
			<div id="load" class="lds-wrap">Cargando...<br><div class="lds-hourglass"></div></div>
			<div id="container" class="grid loadable collapsed">
				<!-- 2 col grid @ xs, 3 col grid @ sm, 4 col grid @ md -->
				<div class="grid-sizer"></div>
				<?php wp_archive_catalogomu() ?>
			</div>
		</div>
	</section>

<?php
get_template_part( 'layouts/footer', 'mu' ); 
