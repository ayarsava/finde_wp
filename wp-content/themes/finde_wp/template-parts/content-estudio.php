<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finde_WP
 */

?>

<?php 
	$address = rwmb_meta( 'address' );
	$url = rwmb_meta( 'mbox_url' );
	$instagram = rwmb_meta( 'mbox_instagram' );
	$twitter = rwmb_meta( 'mbox_twitter' );
	$facebook = rwmb_meta( 'mbox_facebook' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
	<header class="branding-header pt-3">
		<div class="container pb-5">
			<div class="col-md-8 mx-auto py-4">
				<?php
				the_title( '<h1 class="entry-title extra-grande text-white">', '</h1>' );
				?>
				<div class="lead text-white text-weight-bold">
					<?php
					the_content();
					?>
				</div>
				<ul class="list-unstyled text-light">
					<?php 
						if ($address) { echo '<li>'. $address .'</li>';}
					?>
				</ul>
				<ul class="list-unstyled list-inline text-center h4 text-light">
					<?php
						if ($instagram) { echo '<li class="list-inline-item"><a href="'. $instagram. '" target="_blank"><i class="ml-1 fab fa-instagram"></i></a></li>';}
						if ($twitter) { echo '<li class="list-inline-item"><a href="'. $twitter. '" target="_blank"><i class="ml-1 fab fa-twitter"></i></a></li>';}
						
						if ($facebook) { echo '<li class="list-inline-item"><a href="'. $facebook. '" target="_blank"><i class="ml-1 fab fa-facebook"></i></a></li>';}
						if ($url) { echo '<li class="list-inline-item"><a href="'. $url . '" target="_blank"><i class="ml-1 fas fa-globe-americas"></i></i></a></li>';}
						
					?>
				</ul>
				</ul>
			</div>

			<?php 
			//$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
			$page_bg_image     = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'small' );
	    	$page_bg_image_url = $page_bg_image[0]; // This returns just the URL of the image.
		    ?>
			<div class="mini-profile-img mx-auto">
				<?php if ( has_post_thumbnail() ) {
			      echo get_the_post_thumbnail( $post_id, 'small', array( 'class' => 'img-fluid img-profile' ) );
			    }?>
			</div>
		</div>
	</header><!-- .entry-header -->
	
	<div class="container py-5">
		<div class="text-center py-3">
			<h2>Juegos</h2>
			<div class="row py-3 justify-content-md-center">
			<?php 

			$args = array(
			  	'post_type'              => 'catalogo',
			  	'order'                  => 'ASC',
			  	'orderby'                => 'title',
			  	'relationship' => [
				    'id'   => 'catalogo_to_estudios',
				    'to' => get_the_ID(), // You can pass object ID or full object
				],
				'nopaging'     => true,
			);

			// The Query
			$query_catalogo = new WP_Query( $args );
			// The Loop
			if ( $query_catalogo->have_posts() ) {
			  while ( $query_catalogo->have_posts() ) : $query_catalogo->the_post();
			    $estudios = MB_Relationships_API::get_connected( [
			      'id'   => 'catalogo_to_estudios',
			      'to' => get_the_ID(),
			    ] );
			    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
			    $url = rwmb_meta( 'mbox_url' );
			    $descargas = rwmb_meta( 'descarga_id' );
		
			    
			    $terms = get_the_terms( $post->ID, 'rubro' );
			    $dterms = get_the_terms( $post->ID, 'descuento' );

			    echo '<div class="col-md-4 mb-1 text-left"';
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
				echo '<a href="' . get_the_permalink() .'" rel="slidemark" class="stretched-link"></a>';
				echo '<div class="grid-item-content card h-100">';
				if ( has_post_thumbnail() ) {
					echo get_the_post_thumbnail( $post_id, 'small', array( 'class' => 'img-fluid card-img-top' ) );
				}
				echo '<div class="card-body">';
				echo '<h5 class="card-title">' . get_the_title() . '</h5>';
				if( has_excerpt() ){
					echo '<div class="card-text">'. get_the_excerpt() .'</div>';
				} else {
					echo '<div class="card-text">' . wp_trim_words( wp_strip_all_tags( get_the_content() ), 18, '...' ) .'</div>';
				}
				if ($terms) {
				echo '<div class="rubro">';
				foreach( $terms as $term ) { echo '<a href="'.get_term_link($term->slug, 'rubro').'" class="badge badge-dark mt-1 os">'.$term->name.'</a></span>', ' ';}
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
			  endwhile;
			  wp_reset_postdata();
			} else {
			  echo 'No hemos encontrado productos o servicios asociados al estudio.';
			}

			// Restore original Post Data
			wp_reset_postdata();

			// termino loop
			?>
		</div>
		</div>
	</div><!-- .container -->
</article><!-- #post-<?php the_ID(); ?> -->
