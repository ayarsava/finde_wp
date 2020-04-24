<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Finde_WP
 */

$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
$fecha = rwmb_meta( 'fecha_id' ); 
get_header();
?>

	<div class="container">
  		<div class="row">
      		<div class="col-12">
      			<div id="primary" class="content-area">
        			<main id="main" class="site-main my-5">

					<?php
					while ( have_posts() ) :
						the_post();
						?>
						  <div class="row no-gutters" style="min-height:350px;">
						  	<a href="<?php echo get_permalink();?>" class="stretched-link"></a>
						    <?php if ($featured_img_url) { 
						    	echo '<div class="col-md-5">';
						    	the_post_thumbnail('full', array('class' => 'img-fluid'));
						    	echo '</div>';
						    } ?>
						    
						    <div class="<?php if ($featured_img_url) { echo 'col-md-7'; } else { echo 'col-md-12';} ?>">
						      <div class="card-body">

						        <ul class="list-unstyled">
									<li><?php echo date( 'j F, Y', $fecha); ?></li>
								</ul>
						      	<?php
								the_title( '<h1 class="card-title">', '</h1>' );
								?>
						        <p class="card-text"><?php the_content(); ?></p>
						      </div>
						    </div>
						  </div>
<?
					endwhile; // End of the loop.
					?>

					</main><!-- #main -->
      			</div><!-- #primary -->
    		</div><!-- .col-12 .col-md-8 -->
		</div><!-- .row -->

<?php
get_footer();
