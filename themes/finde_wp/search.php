<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Finde_WP
 */

get_header();
?>

	<div class="container">
		<div class="row">
			<div class="col">
				<section id="primary" class="content-area py-5">
					<main id="main" class="site-main">

					<?php if ( have_posts() ) : ?>

						<header class="page-header">
							<h1 class="page-title h3 mb-4">
								<?php
								/* translators: %s: search query. */
								printf( esc_html__( 'Buscando %s', 'finde_wp' ), '<span>' . get_search_query() . '</span>' );
								?>
							</h1>
						</header><!-- .page-header -->
						<ul>
						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );

						endwhile;
						echo '</ul>';

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>

					</main><!-- #main -->
				</section><!-- #primary -->
			</div>
		</div>
	</div>


<?php
get_footer();
