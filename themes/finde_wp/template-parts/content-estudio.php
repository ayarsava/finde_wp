<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finde_WP
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
	<header class="branding-header pt-3">
		<div class="container pb-5">
			<div class="line"></div>
			<div class="col-md-8 mx-auto py-4">
			<?php
			the_title( '<h1 class="entry-title extra-grande text-white">', '</h1>' );
			?>
			<div class="lead text-white text-weight-bold">
				<?php
				the_content();
				?>
			</div>
			<ul class="list-unstyled">
				<li><?php echo rwmb_meta( 'address' ) ?></li>
				<li><a href="<?php echo rwmb_meta( 'mbox_url' ) ?>" target="_blank" class="text-light"><?php echo rwmb_meta( 'mbox_url' ) ?></a></li>
				<li>Fundada en <?php echo rwmb_meta( 'founded' ) ?></li>
			</ul>
		</div>

		<?php 
		$page_bg_image     = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'small' );
    	$page_bg_image_url = $page_bg_image[0]; // This returns just the URL of the image.
	    ?>
		<div class="mini-profile-img mx-auto" style="background-image: url('<?php echo $page_bg_image_url; ?>');"></div>
	</header><!-- .entry-header -->
	
	<div class="container py-5">
		
		<div class="row">
			<div class="col-md-6 mx-auto text-center pt-3">
				<h2>Juegos</h2><hr>
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
				    $plataformas = rwmb_meta( 'mbox_plataforma' );
				    
				    $terms = get_the_terms( $post->ID, 'rubro' );
				    $dterms = get_the_terms( $post->ID, 'descuento' );

				    echo '<div class="mb-3"';
				    echo 'data-category="';
				    foreach( $terms as $term ) echo $term->slug. ' ';
				    echo '" data-descuento="';
				    foreach( $dterms as $dterm ) echo $dterm->slug. ' ';
				    echo '">';
				    echo '<a href="' . get_the_permalink() .'" rel="slidemark" class="stretched-link"></a>';
				    echo '<div class="grid-item-content card">';
				    if ( has_post_thumbnail() ) {
				      echo get_the_post_thumbnail( $post_id, 'small', array( 'class' => 'img-fluid card-img-top' ) );
				    }
				    echo '<div class="card-body">';
				    echo '<h5 class="card-title">' . get_the_title() . '</h5>';
				    echo '<div class="card-text over-content d-none">' . get_the_content() . '</div>';
				    echo '<div class="rubro">';
				    foreach( $terms as $term ) echo '<span><a href="' . get_the_permalink($term) .'">' . $term->name . '</a></span>', ' ';
				    foreach ( $plataformas as $plataforma ) {
				    echo '<span>' . $plataforma . '</span>', ' ';
				    }
				    echo '</div></div><small class="card-footer text-muted text-sm">';
				    echo '</small></div></div>';
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
		</div><!-- .col-md-6 .mx-auto -->
	</div><!-- .container -->
</article><!-- #post-<?php the_ID(); ?> -->
