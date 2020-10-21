<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finde_WP
 */

if (has_category( 'Editorial' )) {
  get_template_part( 'layouts/header', 'ed' ); 
} elseif (has_category( 'Videojuegos' )) {
  get_template_part( 'layouts/header', 'vj' ); 
} elseif (has_category( 'Música' )) {
  get_template_part( 'layouts/header', 'mu' ); 
} elseif (has_category( 'Diseño' )) {
  get_template_part( 'layouts/header', 'di' ); 
} else {
get_header();
}
?>
<style>
	.entry-content > :not(.alignfull) {
		width: 60%;
		margin-left: auto;
		margin-right: auto;
	}

</style>

      			<div id="primary" class="content-area">
        			<main id="main" class="site-main">

					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', 'page' );

					endwhile; // End of the loop.
					?>

					</main><!-- #main -->
      			</div><!-- #primary -->
	
		<?php if (is_page( 'gamejam' )) { 
			get_template_part('layouts/block-gamejam');
		} ?>

<?php
if (has_category( 'Editorial' )) {
  get_template_part( 'layouts/footer', 'ed' ); 
} elseif (has_category( 'Videojuegos' )) {
  get_template_part( 'layouts/footer', 'vj' ); 
} elseif (has_category( 'Música' )) {
  get_template_part( 'layouts/footer', 'mu' ); 
} elseif (has_category( 'Diseño' )) {
  get_template_part( 'layouts/footer', 'di' ); 
} else {
get_footer();
}
