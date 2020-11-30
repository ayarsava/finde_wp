<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Finde_WP
 */

get_template_part( 'layouts/header', 'mu' );

    $address = rwmb_meta( 'address' );
    $url = rwmb_meta( 'mbox_url' );
    $instagram = rwmb_meta( 'mbox_instagram' );
    $twitter = rwmb_meta( 'mbox_twitter' );
    $facebook = rwmb_meta( 'mbox_facebook' );
    $libreria = rwmb_meta( 'mbox_libreria' );
    $whatsapp = rwmb_meta( 'mbox_whatsapp' );
    $images = rwmb_meta( 'image_ed', array( 'size' => 'large' ) );
    $terms = get_the_terms( $post->ID, 'rubro_mu' );
	$dterms = get_the_terms( $post->ID, 'descuento_mu' );
?>

<div id="content">
<div id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
    <header class="branding-header bg-music text-dark pt-3 <?php if ($featured_img_url) { echo 'tengo-background'; } ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 mx-auto pt-4">
                    <?php
                    the_title( '<h1 class="entry-title extra-grande">', '</h1>' );
                    ?>
                    <ul class="list-unstyled">
                        <?php 
                            if ($address) { echo '<li><i class="fas fa-map-marker-alt"></i>  '. $address .'</li>';}
                        ?>
                    </ul>

                    <ul class="list-unstyled list-inline text-center h4">
                        <?php
                            if ($url || $instagram || $facebook || $youtube || $twitter || $pinterest || $tiktok) {
                                echo '<div class="contacto mt-2 text-white">';
                                if ($url) { echo '<li class="list-inline-item"><a href="'. $url . '" target="_blank" class="os"><i class="fas fa-globe-americas"></i></a></li>';}
                                if ($instagram) { echo '<li class="list-inline-item"><a href="'. $instagram. '" target="_blank" class="os"><i class="fab fa-instagram"></i></a></li>';}
                                if ($facebook) { echo '<li class="list-inline-item"><a href="'. $facebook. '" target="_blank" class="os"><i class="fab fa-facebook"></i></a></li>';}
                                if ($youtube) { echo '<li class="list-inline-item"><a href="'. $youtube . '" target="_blank" class="os"><i class="fab fa-youtube"></i></a></li>';}
                                if ($twitter) { echo '<li class="list-inline-item"><a href="'. $twitter. '" target="_blank" class="os"><i class="fab fa-twitter"></i></a></li>';}
                                if ($pinterest) { echo '<li class="list-inline-item"><a href="'. $pinterest . '" target="_blank" class="os"><i class="fab fa-pinterest"></i></a></li>';}
                                if ($tiktok) { echo '<li class="list-inline-item"><a href="'. $tiktok . '" target="_blank" class="os"><i class="fab fa-tiktok"></i></a></li>';}
                                
                                
                                if ($whatsapp) { echo '<li class="list-inline-item"><a href="https://api.whatsapp.com/send?phone='. $whatsapp . '" target="_blank" class="os"><i class="fab fa-whatsapp"></i></a></li>';}
                            }
                            
                        ?>
                    </ul>
                </div>
            </div>
            <?php
                $tapas = reset( $images );
                echo '<div class="mt-3 mb-5 row position-relative" style="top:49px;"><div class="col mx-auto my-5 border-bottom">';
                echo '<div class="mini-profile-img">';
                echo get_the_post_thumbnail( $post_id, 'small', array( 'class' => 'img-fluid img-profile' ) );
                echo '<img src="'. esc_url($tapas['url']) .'" class="img-fluid img-profile">';
                echo '</div></div></div>';
            ?>
        </div>
    </header><!-- .entry-header -->
    
    
    <div class="container py-5">
        <div class="row">
            <?php
                
                    
                echo '<div class="col-md-7 mb-2">';
                    echo '<div class="slick fullmedia">';                       
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
                        
            <div class="col-md-8">
                <?php
                    if ($terms) {
                        echo '<div class="rubro mb-1">';
                            foreach( $terms as $term ) { echo '<a href="'.get_term_link($term->slug, 'rubro_mu').'" class="badge badge-secondary text-white mt-1 os">'.$term->name.'</a></span>', ' ';}
                        echo '</div>';
                    }
                    if( has_excerpt() ){
                        echo '<div class="mt-2 lead">'. get_the_excerpt() .'</div>';
                    }
                    echo '<div class="mt-2 d-block">' . get_the_content().'</div>';
                    if ($dterms) {
                        echo '<div class="rubro mb-1">';
                            foreach( $dterms as $dterm ) { echo '<a href="'.get_term_link($dterm->slug, 'descuento_mu').'" class="badge badge-dark mt-1 os">'.$dterm->name.'</a></span>', ' ';}
                        echo '</div>';
                    }
                    
                    $tienda = rwmb_meta( 'mbox_tienda' );
                    if ($tienda) {
                        echo '<div class="d-block mt-4"><a href="'.$tienda.'" class="boton-3d" title="Ir a tienda virtual" target="_blank">Ir a Tienda virtual</a></div>';
                    }
                ?>


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
                    $query_libros = new WP_Query( $args );
                    // The Loop
                    if ( $query_libros->have_posts() ) {
                        echo '<h5 class="mt-5">Artículos destacados</h5>';
                        echo '<hr>';
                        echo '<div class="row">';
                        while ( $query_libros->have_posts() ) : $query_libros->the_post();
                    
                            $libros = MB_Relationships_API::get_connected( [
                                'id'   => 'productomusica_to_musica',
                                'to' => get_the_ID(),
                            ] );
                            echo '<div class="col-15 col-lg-7-5 mb-3">';
                            get_template_part( 'layouts/card', 'vidriera-slide' );
                            echo '</div>';

                        endwhile;
                        echo '</div>';
                        wp_reset_postdata();
                    }

                    // Restore original Post Data
                    wp_reset_postdata();

                    // termino loop
                ?>
            </div>
        </div>
            
        </div>
    </div><!-- .container -->
</div><!-- #post-<?php the_ID(); ?> -->


<?php get_template_part( 'layouts/footer', 'mu' );