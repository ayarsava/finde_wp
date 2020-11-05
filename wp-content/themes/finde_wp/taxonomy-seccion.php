<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finde_WP
 */


get_template_part( 'layouts/header', 'au' );

$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); 
if ($term->slug == 'cine' ) {?>
<div class="title-head" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-cine-elpoetaenlaluna.jpg')">
<?php } else if ($term->slug == 'series' ) { ?>
<div class="title-head" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-series.jpg')">
<?php } else if ($term->slug == 'youtubers' ) { ?>
<div class="title-head" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-youtube.jpg')">
<?php } else { ?>
<div class="title-head" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-cine-elpoetaenlaluna.jpg')">
<?php } ?>
<?php 
echo '<div class="wrap"><div class="container py-5">';
the_archive_title( '<h1 class="page-title">', '</h1>' );
the_archive_description( '<div class="archive-description">', '</div>' );
echo '</div></div>';
?>
</div class="title-head">

<div class="container mt-4">
	<div id="primary" class="content-area">
			<main id="main" class="site-main">
			<?php if ( have_posts() ) : ?>
				<div class="row py-3">
				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_type() );

				endwhile;

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
		</div>

			</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_template_part( 'layouts/footer', 'au' ); 
