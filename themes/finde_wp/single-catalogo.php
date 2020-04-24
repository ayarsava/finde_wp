<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Finde_WP
 */

get_header();

$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 

$estudios = MB_Relationships_API::get_connected( [
				'id'   => 'catalogo_to_estudios',
				'from' => get_the_ID(),
			] );
			
			$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
			$url = rwmb_meta( 'mbox_url' );
      		$descargas = rwmb_meta( 'descarga_id' );
			
			$terms = get_the_terms( $post->ID, 'rubro' );
			$dterms = get_the_terms( $post->ID, 'descuento' );

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
								<?php if ($featured_img_url) { 
						    	echo '<div class="col-md-5">';
						    	the_post_thumbnail('full', array('class' => 'img-fluid'));
						    	echo '</div>';
						    } ?>
								
								<div class="<?php if ($featured_img_url) { echo 'col-md-7'; } else { echo 'col-md-12';} ?>">
									<div class="card-body">

										<?php
										the_title( '<h1 class="card-title">', '</h1>' );
										
										if ($estudios) {
							      echo 'Por '; foreach ( $estudios as $estudio ) {
							          echo '<a href="' . get_the_permalink($estudio) .'" rel="slidemark" class="os">' .$estudio->post_title.'</a> ';
							      }}
										echo '<div class="mt-3 rubro">';
										foreach( $terms as $term ) echo '<span><a href="' . get_the_permalink($term) .'">' . $term->name . '</a></span>', ' ';
										echo '</div>';
										echo '<div class="descuento">';
										foreach( $dterms as $dterm ) echo '<span><a href="' . get_the_permalink($dterm) .'"> ' . $dterm->name . '</a></span>', ' /';
										echo '</div>';
										echo '<div class="mt-2 d-block">' . get_the_content().'</div>';

										echo '<div class="descargas mt-2">';
										foreach ( $descargas as $descarga ) {
							         echo '<a href="'.$descarga['d_url'].'" class="btn btn-outline-dark" target="_blank"><i class="fas fa-cloud-download-alt"></i> ' . $descarga['d_name'] .'</a>';
							      }
										echo '</div></div>';
										
										echo '</div></div>';
										?>
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
