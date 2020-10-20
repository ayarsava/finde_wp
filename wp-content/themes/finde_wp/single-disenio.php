<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Finde_WP
 */

get_template_part( 'layouts/header', 'di' );
			
            $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
			$url = rwmb_meta( 'mbox_url' );
            $descargas = rwmb_meta( 'descarga_id' );
            
            $address = rwmb_meta( 'address' );
            $url = rwmb_meta( 'mbox_url' );
            $instagram = rwmb_meta( 'mbox_instagram' );
            $twitter = rwmb_meta( 'mbox_twitter' );
            $facebook = rwmb_meta( 'mbox_facebook' );
            $youtube = rwmb_meta( 'mbox_youtube' );
            $pinterest = rwmb_meta( 'mbox_pinterest' );
            $tiktok = rwmb_meta( 'mbox_tiktok' );
            $whatsapp = rwmb_meta( 'mbox_whatsapp' );
            $images = rwmb_meta( 'image_ed', array( 'size' => 'large' ) );
            
			$terms = get_the_terms( $post->ID, 'rubro' );
			$dterms = get_the_terms( $post->ID, 'descuento' );
            $media = rwmb_meta( $post->ID, 'oembed' );

            $medios = rwmb_meta($post->ID,  'mbox_medios');


?>
<div id="content">
<div id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
    <header class="branding-header pt-3 bg-diseno <?php if ($featured_img_url) { echo 'tengo-background'; } ?>">
        <div class="container pb-5">
            <div class="col-lg-8 col-md-12 mx-auto py-4">
                <?php
                the_title( '<h1 class="entry-title extra-grande text-white">', '</h1>' );
                ?>
                <ul class="list-unstyled text-light">
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
    </header><!-- .entry-header -->
    
    <div class="container py-5">
        <div class="row">
            <?php
                $images = rwmb_meta( 'image_di', array( 'size' => 'medium' ) );
                    
                echo '<div class="col-md-7">';
                    echo '<div class="slick fullmedia">';                       
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
                        
            <div class="col-md-8">
                <?php
                    if ($terms) {
                    echo '<div class="rubro mb-2">';
                        foreach( $terms as $term ) { echo '<a href="'.get_term_link($term->slug, 'rubro').'" class="badge badge-dark mt-1 os">'.$term->name.'</a></span>', ' ';}
                    echo '</div>';
                    }
                    if( has_excerpt() ){
                        echo '<div class="mt-2 lead">'. get_the_excerpt() .'</div>';
                    }
                    echo '<div class="mt-2 d-block">' . get_the_content().'</div>';
                    
                    $medios = rwmb_meta( 'mbox_medios' );
                    if ($medios) {
                        echo '<div class="medios-de-pago">';
                        foreach ( $medios as $medio ) {
                            if ($medio == 'debito') :
                                echo '<span class="medio_digital '.$medio.'"><i class="fas fa-credit-card"></i> Tarjeta de débito</span>';
                            endif;
                            if ($medio == 'credito') :
                                echo '<span class="medio_digital '.$medio.'"><i class="far fa-credit-card"></i> Tarjeta de crédito</span>';
                            endif;
                            if ($medio == 'cuentadni') :
                                echo '<span class="medio_digital '.$medio.'"><i class="fas fa-money-check"></i> Cuenta DNI</span>';
                            endif;
                            if ($medio == 'mercadopago') :
                                echo '<span class="medio_digital '.$medio.'"><i class="fas fa-money-bill-wave"></i> Mercado Pago</span>';
                            endif;
                            if ($medio == 'transferencia') :
                                echo '<span class="medio_digital '.$medio.'"><i class="fas fa-money-check-alt"></i> Transferencia</span>';
                            endif;
                            if ($medio == 'paypal') :
                                echo '<span class="medio_digital '.$medio.'"><i class="fab fa-cc-paypal"></i> Paypal</span>';
                            endif;
                            if ($medio == 'otros') :
                                echo '<span class="medio_digital '.$medio.'"><i class="fas fa-wallet"></i> Otros</span>';
                            endif;
                        }
                        echo '</div>';
                    }

                    $envios = rwmb_meta( 'envios' );
                    if ($envios) {
                        echo '<p class="mt-3"><i class="fas fa-truck"></i> '.$envios.'</p>';
                    }

                    $tienda = rwmb_meta( 'mbox_tienda' );
                    if ($tienda) {
                        echo '<div class="d-block mt-4"></div><a href="'.$tienda.'" class="boton-3d" title="Ir a tienda virtual" target="_blank">Ir a Tienda virtual</a></div>';
                    }
                ?>
            </div>
            
            <?php
                $url = get_post_meta( get_the_ID(), 'oembed', true );
                $embed = wp_oembed_get( $url, $args );
                if ( ! $embed ) {
                    $embed = $GLOBALS['wp_embed']->shortcode( $args, $url );
                }
                if ( $embed ) {
                    echo '<div class="row"><div class="col-md-15 mt-3">';
                    echo $embed;
                    echo '</div></div>';
                }
            ?>
        </div>
    </div><!-- .container -->
</div><!-- #post-<?php the_ID(); ?> -->

<?php get_template_part( 'layouts/footer', 'di' ); 
