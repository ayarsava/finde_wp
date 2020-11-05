<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finde_WP
 */


get_template_part( 'layouts/header', 'te' );
?>
<div class="container">
	<div id="primary" class="content-area">
			<main id="main" class="site-main">
			<?php if ( have_posts() ) : ?>

				<header class="page-header py-3">
					<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
					?>
				</header><!-- .page-header -->
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
                    echo '<div class="col-md-5">';
                    get_template_part( 'layouts/card', 'experiencias' );
                    echo '</div>';

				endwhile;

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
		</div>

			</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_template_part( 'layouts/footer', 'te' ); 
