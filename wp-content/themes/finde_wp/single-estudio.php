<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Finde_WP
 */

get_template_part( 'layouts/header', 'vj' );
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php

			// Start the Loop.
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', get_post_type() );
			endwhile; // End the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_template_part( 'layouts/footer', 'vj' ); 
