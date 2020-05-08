<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finde_WP
 */

get_template_part( 'layouts/header', 'ed' ); 
?>
<div class="main-content editorial archive-editoriales">
	<section class="spotlight bg-cover" style="background-color:#ff677c;background-image: url('/wp-content/uploads/2020/05/4633915022_1ec66bf99b_k.jpg'); background-size:cover; background-position:center center; min-height:350px;">
		<div class="spotlight-holder pt-5 pb-7 py-lg-0">
			<span class="mask bg-gradient-primary opacity-6"></span>
		</div>
	</section>

	<section id="filtros" class="bg-white p-0 m-0">
		<div class="container position-relative">
			<ul id="form-ui" class="list-inline"  style="margin-top:-120px;">
			<h1 class="">Editoriales</h1>
					<div class="row mt-4">
					<div class="col-md-3">
						<h5><strong>Categorías</strong></h5>
					</div>
					<ul class="col-md-12">
						<?php 
						$rubros = get_terms('rubro_ed');
						if( $rubros ){ foreach ($rubros as $cat ) {?>
						<li class="list-inline-item <?php echo $cat->slug; ?>"><label><input type="checkbox" value="<?php echo $cat->slug; ?>" class="category" autocomplete="off"> <?php echo $cat->name; ?></label></li>
						<?php  } }?>
					</ul>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-3">
						<h5><strong>Promociones</strong></h5>
					</div>
					<ul class="col-md-12">
						<?php 
						$descuento = get_terms('descuento_ed');
						if( $descuento ){ foreach ($descuento as $cat ) {?>
						<li class="list-inline-item"><label><input type="checkbox" value="<?php echo $cat->slug; ?>" class="discount" autocomplete="off"> <?php echo $cat->name; ?></label></li>
						<?php  } }?>
					</ul>
				</div>
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
					<?php wp_archive_catalogoed() ?>
				</div>
			</div>
		</section>
</div>

<?php
get_template_part( 'layouts/footer', 'ed' ); 
