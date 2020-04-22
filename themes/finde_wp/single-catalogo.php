<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Finde_WP
 */

get_header();
?>

	<div class="container">
  	<div class="row">
      <div class="col-12 col-md-8">
  			<div id="primary" class="content-area">
					<main id="main" class="site-main">

						<?php

						// Start the Loop.
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content', 'single' );
							
						endwhile; // End the loop.
						?>

					</main><!-- #main -->
				</div><!-- #primary -->
    	</div><!-- .col-12 .col-md-8 -->
    </div><!-- .row -->

<?php
get_footer();
