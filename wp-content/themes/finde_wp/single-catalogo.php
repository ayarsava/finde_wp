<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Finde_WP
 */

get_template_part( 'layouts/header', 'vj' );

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
			$media = rwmb_meta( $post->ID, 'oembed' );
?>

	<div class="container">
			<div class="row">
					<div class="col">
						<div id="primary" class="content-area">
							<main id="main" class="site-main my-5">

					<?php
					while ( have_posts() ) :
						the_post();
						?>
							<div class="row no-gutters">
								<?php 
								$images = rwmb_meta( 'image_vj', array( 'size' => 'medium' ) );
									
								echo '<div class="col-md-7">';
									echo '<div class="slick fullmedia">';
										$url = get_post_meta( get_the_ID(), 'oembed', true );
										$embed = wp_oembed_get( $url, $args );
										if ( ! $embed ) {
											$embed = $GLOBALS['wp_embed']->shortcode( $args, $url );
										}
										if ( $embed ) {
											echo '<div>';
											echo $embed;
											echo '</div>';
										}
										if ($featured_img_url) { 
											echo '<div>';
											the_post_thumbnail('full', array('class' => 'img-fluid'));
											echo '</div>';
										}
										if ($images) {
											// slick
											foreach ( $images as $image ) {
												echo '<div>';
												echo '<img src="', $image['url'], '">';
												echo '</div>';
											}    
										}
										

									echo '</div>';
								echo '</div>';
								?>
								
								<div class="<?php if ($featured_img_url) { echo 'col-md-8'; } ?>">
									<div class="card-body">

										<?php
										if ($terms) {
										echo '<div class="rubro mb-2">';
										foreach( $terms as $term ) { echo '<a href="'.get_term_link($term->slug, 'rubro').'" class="badge badge-dark mt-1 os">'.$term->name.'</a></span>', ' ';}
										echo '</div>';
										}
										the_title( '<h1 class="card-title">', '</h1>' );
										
										if ($estudios) {
												echo 'Desarrollador: '; foreach ( $estudios as $estudio ) {
													echo '<a href="' . get_the_permalink($estudio) .'" rel="slidemark" class="os">' .$estudio->post_title.'</a> ';
												}}
										if( has_excerpt() ){
											echo '<div class="mt-2 lead">'. get_the_excerpt() .'</div>';
										}
										echo '<div class="mt-2 d-block">' . get_the_content().'</div>';
										if ($descargas) {
										echo 'Descargas:';
										echo '<small class="descargas mt-2 d-block">';
										foreach ( $descargas as $descarga ) {
										echo '<a href="'.$descarga['d_url'].'" class="os btn btn-sm btn-outline-dark mr-1 mb-1 descarga" target="_blank"><span>' . $descarga['d_name'] .'</span></a>';
										}
										echo '</small>';
										echo '</div>';
										}
										echo '</div></div></div>';
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


<?php get_template_part( 'layouts/footer', 'vj' ); 
