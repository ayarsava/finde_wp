<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Finde_WP
 */

get_template_part( 'layouts/header', 'mu' );
?>
<?php 
    $address = rwmb_meta( 'address' );
    $url = rwmb_meta( 'mbox_url' );
    $instagram = rwmb_meta( 'mbox_instagram' );
    $twitter = rwmb_meta( 'mbox_twitter' );
    $facebook = rwmb_meta( 'mbox_facebook' );
    $libreria = rwmb_meta( 'mbox_libreria' );
    $whatsapp = rwmb_meta( 'mbox_whatsapp' );
    $images = rwmb_meta( 'image_ed', array( 'size' => 'large' ) );
?>

<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
    <header class="branding-header pt-3 bg-editorial">
        <div class="container pb-5">
            <div class="col-lg-8 col-md-12 mx-auto py-4">
                <?php
                the_title( '<h1 class="entry-title extra-grande text-white">', '</h1>' );
                ?>
                <ul class="list-unstyled text-light">
                    <?php 
                        if ($address) { echo '<li>'. $address .'</li>';}
                    ?>
                </ul>

                <ul class="list-unstyled list-inline text-center h4">
                    <?php
                        if ($url || $instagram || $facebook || $twitter) {
                            echo '<div class="contacto mt-2">';
                            if ($url) { echo '<li class="list-inline-item"><a href="'. $url . '" target="_blank" class="os text-white"><i class="fas fa-globe-americas"></i></i></a></li>';}
                            if ($libreria) { echo '<li class="list-inline-item"><a href="'. $libreria . '" target="_blank" class="os text-white"><i class="fas fa-shopping-cart"></i></a></li>';}
                            if ($instagram) { echo '<li class="list-inline-item"><a href="'. $instagram. '" target="_blank" class="os text-white"><i class="fab fa-instagram"></i></a></li>';}
                            if ($facebook) { echo '<li class="list-inline-item"><a href="'. $facebook. '" target="_blank" class="os text-white"><i class="fab fa-facebook"></i></a></li>';}
                            if ($twitter) { echo '<li class="list-inline-item"><a href="'. $twitter. '" target="_blank" class="os text-white"><i class="fab fa-twitter"></i></a></li>';}
                            if ($whatsapp) { echo '<li class="list-inline-item"><a href="https://api.whatsapp.com/send?phone='. $whatsapp . '" target="_blank" class="os text-white"><i class="fab fa-whatsapp"></i></a></li>';}
                            echo '</div>';
                        }
                        
                    ?>
                </ul>
                </ul>
            </div>
        </div>
    </header><!-- .entry-header -->
    
    <div class="container py-5">

        <div class="row">
            <div class="col-lg-8 col-md-12 mx-auto my-5">
                <?php
                // slick
                if ($images) {
                    echo '<div class="profile-slick" style="min-height:500px!important;">';
                foreach ( $images as $image ) {
                    echo '<a href="' . get_the_permalink() .'"><img src="', $image['url'], '"></a>';
                }    
                    echo '</div>';
                }
                ?>
                <?php
                the_content();
                ?>
            </div>
        </div>
    </div><!-- .container -->


    <?php 

			$args = array(
			  	'post_type'              => 'productomusica',
			  	'order'                  => 'ASC',
			  	'orderby'                => 'title',
			  	'relationship' => [
				    'id'   => 'productomusica_to_musica',
				    'to' => get_the_ID(), // You can pass object ID or full object
				],
				'nopaging'     => true,
			);

			// The Query
			$query_catalogo = new WP_Query( $args );
			// The Loop
			if ( $query_catalogo->have_posts() ) {
                echo '<div class="container py-5"><div class="text-center py-3"><h2>Productos</h2><div class="row py-3 justify-content-md-center">';
			    while ( $query_catalogo->have_posts() ) : $query_catalogo->the_post();
                    $estudios = MB_Relationships_API::get_connected( [
                    'id'   => 'productomusica_to_musica',
                    'to' => get_the_ID(),
                    ] );
                    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
                    $url = rwmb_meta( 'mbox_url' );
                    
                    
                    $terms = get_the_terms( $post->ID, 'rubro' );
                    $dterms = get_the_terms( $post->ID, 'descuento' );

                    echo '<div class="col-md-4 mb-1 text-left">';
                    echo '<a href="' . get_the_permalink() .'" rel="slidemark" class="stretched-link"></a>';
                    echo '<div class="grid-item-content card h-100 mb-3">';
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
                    echo '</div>';
                    echo '</div></div>';
                endwhile;
                wp_reset_postdata();
                echo '</div></div></div><!-- .container -->';
			}


			// termino loop
			?>
		
</article><!-- #post-<?php the_ID(); ?> -->

<?php
endwhile; // End the loop.
// Restore original Post Data
wp_reset_postdata();
?>
<?php get_template_part( 'layouts/footer', 'mu' ); 
