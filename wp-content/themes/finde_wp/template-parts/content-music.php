<?php
/**
 * Template part for displaying posts.
 *
 * @package Finde_WP
 */
?>

<?php
/* Start the Loop */
		$url = rwmb_meta( 'mbox_url' );
        $images = rwmb_meta( 'image_mu', array( 'size' => 'medium' ) );
        $instagram = rwmb_meta( 'mbox_instagram' );
        $twitter = rwmb_meta( 'mbox_twitter' );
        $facebook = rwmb_meta( 'mbox_facebook' );
        $libreria = rwmb_meta( 'mbox_libreria' );
        $whatsapp = rwmb_meta( 'mbox_whatsapp' );


        $terms = get_the_terms( $post->ID, 'rubro_mu' );
        $dterms = get_the_terms( $post->ID, 'descuento_mu' );


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
			// slick
	        if ($images) {
	            echo '<div class="galeria-slick">';
	            foreach ( $images as $image ) {
	                echo '<a href="' . get_the_permalink() .'"><img data-lazy="'. $image['url']. '"></a>';
	            }    
	            echo '</div>';
	        }
			echo '<div class="grid-item-content card h-100"><a href="' . get_the_permalink() .'" rel="slidemark" class="stretched-link">';
			echo '</a><div class="card-body">';
			echo '<h5 class="card-title">' . get_the_title() . '</h5>';
			if( has_excerpt() ){
				echo '<div class="card-text">'. get_the_excerpt() .'</div>';
			} else {
				echo '<div class="card-text">' . wp_trim_words( wp_strip_all_tags( get_the_content() ), 18, '...' ) .'</div>';
			}
			if ($terms) {
			echo '<div class="rubro_mu">';
			foreach( $terms as $term ) { echo '<a href="'.get_term_link($term->slug, 'rubro_mu').'" class="badge badge-dark mt-1 os">'.$term->name.'</a>', ' ';}
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
			echo '</div></div>';
?>

