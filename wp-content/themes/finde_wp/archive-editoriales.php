<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finde_WP
 */

get_header();
?>
<div class="main-content bg-card editorial">
	<section class="archive-agenda spotlight bg-cover" style="background-image: url('/wp-content/uploads/2020/05/4633915022_1ec66bf99b_k.jpg'); background-size:cover; background-position:center center; height:400px;">
		<div class="spotlight-holder pt-5 pb-7 py-lg-0">
			<span class="mask bg-gradient-primary opacity-6"></span>
			<div class="container d-flex align-items-bottom">
				<div class="col">
					<div class="row">
						<div class="info">
							<h1 class="text-white extra-grande">Editorial</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	
	<div class="container py-5">
		<div class="row">
			<div class="col mx-auto">

				<div id="form-ui" class="list-inline">
					<div class="row">
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
				</div>
				<hr>
				<div class="row">
					<div class="col-md-3">
						<h5><strong>Oferta</strong></h5>
					</div>
					<ul class="col-md-12">
						<?php 
						$descuento = get_terms('descuento_ed');
						if( $descuento ){ foreach ($descuento as $cat ) {?>
						<li class="list-inline-item"><label><input type="checkbox" value="<?php echo $cat->slug; ?>" class="discount" autocomplete="off"> <?php echo $cat->name; ?></label></li>
						<?php  } }?>
					</ul>
				</div>


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
			</div><!-- #main -->
		</div>
	</div><!-- #primary -->
</div>

<?php
get_footer();
