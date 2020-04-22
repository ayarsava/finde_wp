<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package finde
 */

get_header(); ?>
Hola soy Videojuegos
<div class="container page-wrap">
	<div class="row">
		<div id="primary" class="content-area col-sm-10 col-sm-offset-1">
			<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'slide' ); ?>
			<?php endwhile; // End of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
</div>


<?php while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'partials/section', 'producto' ); ?>
<?php endwhile; // End of the loop. ?>
<?php get_footer(); ?>
