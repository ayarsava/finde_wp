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
<div class="main-content">
	<section class="archive-agenda spotlight bg-cover" style="background-image: url('/wp-content/themes/finde_wp/assets/img/bg_agenda_vj.jpg'); background-size:cover; background-position:center center; height:400px;">
		<div class="spotlight-holder pt-5 pb-7 py-lg-0">
			<span class="mask bg-gradient-primary opacity-6"></span>
			<div class="container d-flex align-items-bottom">
				<div class="col">
					<div class="row">
						<div class="info">
							<ul class="list-inline">
								<li class="list-inline-item text-white">FINDE. Edición Videojuegos</li>
							</ul>
							<h1 class="text-white extra-grande">Agenda</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	
	<div class="container py-5">
		<div class="row">
			<div class="col-md-8 mx-auto">
			<?php 
			$args = array(
		    'post_type'              => 'agenda',
		    'posts_per_page' => -1,
		    'meta_query' => array(
		        'fecha_clause' => array(
		            'key' => 'fecha_id',
		        ),
		    ),
		    'orderby' => array( 
		          'fecha_clause' => 'DESC',
		    ),
		  );

		  // The Query
		  $query_agenda = new WP_Query( $args );

			if ( $query_agenda->have_posts() ) : ?>

				<?php
				/* Start the Loop */
				while ( $query_agenda->have_posts() ) :
					$query_agenda->the_post();

					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_type() );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
				</div>
			</div><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
