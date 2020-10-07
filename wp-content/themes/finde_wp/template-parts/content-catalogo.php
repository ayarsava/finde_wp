<?php
/**
 * Template part for displaying posts.
 *
 * @package Finde_WP
 */
?>

<?php
/* Start the Loop */
$estudios = MB_Relationships_API::get_connected( [
	'id'   => 'catalogo_to_estudios',
	'from' => get_the_ID(),
] );

$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
$url = rwmb_meta( 'mbox_url' );
$descargas = rwmb_meta( 'descarga_id' );

$terms = get_the_terms( $post->ID, 'rubro' );
$dterms = get_the_terms( $post->ID, 'descuento' );


			echo '<div class="grid-item item mb-1"';
			if ($terms) {
			echo ' data-category="';
			foreach( $terms as $term ) echo $term->slug. ' ';
			echo '" ';
			}
			if ($terms) {
			echo ' data-descuento="';
			foreach( $dterms as $dterm ) echo $dterm->slug. ' ';
			echo '"';
			}
			echo '>';
			echo '';
			echo '<div class="grid-item-content card h-100"><a href="' . get_the_permalink() .'" rel="slidemark" class="stretched-link">';
			if ( has_post_thumbnail() ) {
				echo get_the_post_thumbnail( $post_id, 'small', array( 'class' => 'img-fluid card-img-top' ) );
			}
			echo '</a><div class="card-body">';
			echo '<h5 class="card-title">' . get_the_title() . '</h5>';
			if( has_excerpt() ){
				echo '<div class="card-text">'. get_the_excerpt() .'</div>';
			} else {
				echo '<div class="card-text">' . wp_trim_words( wp_strip_all_tags( get_the_content() ), 18, '...' ) .'</div>';
			}
			if ($terms) {
			echo '<div class="rubro">';
			foreach( $terms as $term ) { echo '<a href="'.get_term_link($term->slug, 'rubro').'" class="badge badge-dark mt-1 os">'.$term->name.'</a>', ' ';}
			echo '</div>';
			}
			if ($descargas) {
			echo '<small class="descargas mt-2 d-block">';
			foreach ( $descargas as $descarga ) {
				 echo '<a href="'.$descarga['d_url'].'" class="os btn btn-sm btn-outline-dark mr-1 mb-1 descarga" target="_blank"><span>' . $descarga['d_name'] .'</span></a>';
			}
			echo '</small>';
			}
			echo '</div>';
			if ($estudios) {
				echo '<small class="card-footer text-muted text-sm lista">';
				echo 'Por '; foreach ( $estudios as $estudio ) {
						echo '<span><a href="' . get_the_permalink($estudio) .'" rel="slidemark" class="os">' .$estudio->post_title.'</a></span> ';
				}
				echo '</small>';
			}
			echo '</div></div>';
?>

