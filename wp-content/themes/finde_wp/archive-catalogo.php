<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finde_WP
 */

get_template_part( 'layouts/header', 'vj' ); 
?>
<div class="main-content bg-card">
	<section class="archive-agenda spotlight bg-cover" style="background-image: url('/wp-content/themes/finde_wp/assets/img/bg_vj.png'); background-size:cover; background-position:center center; height:400px;">
		<div class="spotlight-holder pt-5 pb-7 py-lg-0">
			<span class="mask bg-gradient-primary opacity-6"></span>
			<div class="container d-flex align-items-bottom">
				<div class="col">
					<div class="row">
						<div class="info">
							<h1 class="text-white extra-grande">Juegos</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	
	<div class="container py-5">
		<div class="row">
			<div class="col mx-auto">

					<ul id="form-ui" class="list-inline">
					<div class="row">
						<div class="col-md-3">
							<h5><strong>Categorías</strong></h5>
						</div>
						<ul class="col-md-12">
							<?php 
							$rubros = get_terms('rubro');
							if( $rubros ){ foreach ($rubros as $cat ) {?>
							<li class="list-inline-item <?php echo $cat->slug; ?>"><label><input type="checkbox" value="<?php echo $cat->slug; ?>" class="category" autocomplete="off"> <?php echo $cat->name; ?></label></li>
							<?php  } }?>
						</ul>
					</div>
					<!--<hr>
					<div class="row">
						<div class="col-md-3">
							<h5><strong>Precio</strong></h5>
						</div>
						<ul class="col-md-12">
							<?php 
							$descuento = get_terms('descuento');
							if( $descuento ){ foreach ($descuento as $cat ) {?>
							<li class="list-inline-item"><label><input type="checkbox" value="<?php echo $cat->slug; ?>" class="discount" autocomplete="off"> <?php echo $cat->name; ?></label></li>
							<?php  } }?>
						</ul>
					</div>-->

				</ul>
				<div id="load" class="lds-wrap">Estamos preparando el catálogo<br><div class="lds-hourglass"></div></div>
				<div id="container" class="grid">
					<div class="p-0">
						<!-- 2 col grid @ xs, 3 col grid @ sm, 4 col grid @ md -->
						<div class="grid-sizer"></div>
							<?php /* Start the Loop */
							while ( have_posts() ) :
								the_post();

								/*
								 * Include the Post-Type-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', get_post_type() );

							endwhile; ?>
						</div>
					</div>
				</div>
			</div><!-- #main -->
	</div><!-- #primary -->

<?php
get_template_part( 'layouts/footer', 'vj' ); 
