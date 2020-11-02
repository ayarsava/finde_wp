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
/* grab the url for the full size featured image */
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
$partidos = get_the_terms( $post->ID, 'partido' );
$ciudades = get_the_terms( $post->ID, 'ciudad' );
$hacedor = get_the_terms( $post->ID, 'hacedor' );
$url = rwmb_meta( 'mbox_url' );
$instagram = rwmb_meta( 'mbox_instagram' );
$twitter = rwmb_meta( 'mbox_twitter' );
$facebook = rwmb_meta( 'mbox_facebook' );
$youtube = rwmb_meta( 'mbox_youtube' );
$pinterest = rwmb_meta( 'mbox_pinterest' );
$tiktok = rwmb_meta( 'mbox_tiktok' );
$whatsapp = rwmb_meta( 'mbox_whatsapp' );
$email = rwmb_meta( 'mbox_email' );
$cargo = rwmb_meta( 'mbox_cargo' );
?>

<div id="content">
    <div id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>

<?php if( has_term( 'atlas-de-experiencias', 'recurso' ) || has_term( 'radar', 'recurso' )) { ?>
<!--ATLAS DE EXPERIENCIAS O RADAR-->
        <header class="branding-header bg-light text-dark pt-3<?php if ($featured_img_url) { echo ' tengo-background" style="background-image: url('. esc_url($featured_img_url) .'); background-size: cover; min-height:450px;">'; 
        } ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 text-left py-5">
                        <?php
                        the_title( '<h1 class="entry-title text-white extra-grande mt-5">', '</h1>' );
                        ?>
                        <ul class="list-unstyled text-white">
                            <?php 
                                if ($ciudades) {
                                    foreach($ciudades as $ciudad) {
                                    $ciudadestring[] = $ciudad->name;
                                    }
                                    $list = implode(', ', $ciudadestring);
                                    echo '<i class="fas fa-map-marker-alt"></i> ' .rtrim($list,',');
                                }
                                if ($partidos) {
                                    foreach($partidos as $partido) {
                                    $partidostring[] = $partido->name;
                                    }
                                    $list = implode(', ', $partidostring);
                                    echo ', ' .rtrim($list,',');
                                }
                                
                            ?>
                        </ul>

                        <ul class="list-unstyled list-inline h4">
                            <?php
                                if ($url || $instagram || $facebook || $youtube || $twitter || $pinterest || $tiktok || $email) {
                                    echo '<div class="contacto mt-2 text-white">';
                                    if ($url) {
                                        foreach ( $url as $web ) {
                                            echo '<li class="list-inline-item mb-3 mr-3"><a href="'. $web . '" target="_blank" class="btn btn-outline-light text-white">Visitar sitio web</a></li>';
                                        }
                                        echo '<br>';
                                    }
                                    if ($instagram) { echo '<li class="list-inline-item"><a href="'. $instagram. '" target="_blank" class="os text-white"><i class="fab fa-instagram"></i></a></li>';}
                                    if ($facebook) { echo '<li class="list-inline-item"><a href="'. $facebook. '" target="_blank" class="os text-white"><i class="fab fa-facebook"></i></a></li>';}
                                    if ($youtube) { echo '<li class="list-inline-item"><a href="'. $youtube . '" target="_blank" class="os text-white"><i class="fab fa-youtube"></i></a></li>';}
                                    if ($twitter) { echo '<li class="list-inline-item"><a href="'. $twitter. '" target="_blank" class="os text-white"><i class="fab fa-twitter"></i></a></li>';}
                                    if ($pinterest) { echo '<li class="list-inline-item"><a href="'. $pinterest . '" target="_blank" class="os text-white"><i class="fab fa-pinterest"></i></a></li>';}
                                    if ($tiktok) { echo '<li class="list-inline-item"><a href="'. $tiktok . '" target="_blank" class="os text-white"><i class="fab fa-tiktok"></i></a></li>';}
                                    
                                    
                                    if ($whatsapp) { echo '<li class="list-inline-item"><a href="https://api.whatsapp.com/send?phone='. $whatsapp . '" target="_blank" class="os text-white"><i class="fab fa-whatsapp"></i></a></li>';}
                                    if ($email) { echo '<li class="list-inline-item"><a href="mailto:'. $email . '" target="_blank" class="os text-white"><i class="fas fa-envelope-open-text"></i></a></li>';}
                                }
                                
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </header><!-- .entry-header -->

        <div class="container py-5">
            <div class="w-md-70 mx-auto">
                <?php 
                    if( has_excerpt() ){
                        echo '<div class="mt-2 lead">'. get_the_excerpt() .'</div>';
                    }
                    echo '<div class="mt-2 d-block">' . get_the_content().'</div>';
                ?>
            </div>
            <?php
                $url = get_post_meta( get_the_ID(), 'oembed', true );
                $embed = wp_oembed_get( $url, $args );
                if ( ! $embed ) {
                    $embed = $GLOBALS['wp_embed']->shortcode( $args, $url );
                }
                if ( $embed ) {
                    echo '<div class="mt-5"><div class="embed-responsive embed-responsive-16by9">';
                    echo $embed;
                    echo '</div></div>';
                }
                if ($hacedor) {
                    echo '<div class="mt-2">';
                    foreach($hacedor as $hacedxr) {
                    $hacedortring[] = $hacedxr->name;
                    }
                    $list = implode(', ', $hacedortring);
                    echo '<strong>';
                    echo '' .rtrim($list,',');
                    echo '</strong>';
                    if ($cargo) {
                        echo ', '.$cargo.'';
                    };
                    echo '</div>';
                }
                
            ?>
        </div>
        <div class="container-fluid p-0">
        <?php 
            $images = rwmb_meta( 'image_te', array( 'size' => 'medium' ) );
            echo '<div class="sl-galeria">';
                $url = get_post_meta( get_the_ID(), 'oembed', true );
                $embed = wp_oembed_get( $url, $args );
                if ($images) {
                    // slick
                    foreach ( $images as $image ) {
                        echo '<div>';
                        echo '<img src="', $image['url'], '">';
                        echo '</div>';
                    }    
                }   
            echo '</div>';
        ?>
        </div>

<?php } else { ?>
<!--NI ATLAS DE EXPERIENCIAS NI RADAR-->
        <header class="branding-header p-0" style="background:#111;"> 
            <div class="container text-left py-5">
                <?php the_title( '<h1 class="entry-title text-white extra-grande mt-5">', '</h1>' ); ?>
                <ul class="list-unstyled text-white">
                    <?php 
                        if ($ciudades) {
                            foreach($ciudades as $ciudad) {
                            $ciudadestring[] = $ciudad->name;
                            }
                            $list = implode(', ', $ciudadestring);
                            echo '<i class="fas fa-map-marker-alt"></i> ' .rtrim($list,',');
                        }
                        if ($partidos) {
                            foreach($partidos as $partido) {
                            $partidostring[] = $partido->name;
                            }
                            $list = implode(', ', $partidostring);
                            echo ', ' .rtrim($list,',');
                        }
                        
                    ?>
                </ul>

                <ul class="list-unstyled list-inline h4">
                    <?php
                        if ($url || $instagram || $facebook || $youtube || $twitter || $pinterest || $tiktok || $email) {
                            echo '<div class="contacto mt-2 text-white">';
                            if ($url) {
                                foreach ( $url as $web ) {
                                    echo '<li class="list-inline-item mb-3 mr-3"><a href="'. $web . '" target="_blank" class="btn btn-outline-light text-white">Visitar sitio web</a></li>';
                                }
                                echo '<br>';
                            }
                            if ($instagram) { echo '<li class="list-inline-item"><a href="'. $instagram. '" target="_blank" class="os text-white"><i class="fab fa-instagram"></i></a></li>';}
                            if ($facebook) { echo '<li class="list-inline-item"><a href="'. $facebook. '" target="_blank" class="os text-white"><i class="fab fa-facebook"></i></a></li>';}
                            if ($youtube) { echo '<li class="list-inline-item"><a href="'. $youtube . '" target="_blank" class="os text-white"><i class="fab fa-youtube"></i></a></li>';}
                            if ($twitter) { echo '<li class="list-inline-item"><a href="'. $twitter. '" target="_blank" class="os text-white"><i class="fab fa-twitter"></i></a></li>';}
                            if ($pinterest) { echo '<li class="list-inline-item"><a href="'. $pinterest . '" target="_blank" class="os text-white"><i class="fab fa-pinterest"></i></a></li>';}
                            if ($tiktok) { echo '<li class="list-inline-item"><a href="'. $tiktok . '" target="_blank" class="os text-white"><i class="fab fa-tiktok"></i></a></li>';}
                            
                            
                            if ($whatsapp) { echo '<li class="list-inline-item"><a href="https://api.whatsapp.com/send?phone='. $whatsapp . '" target="_blank" class="os text-white"><i class="fab fa-whatsapp"></i></a></li>';}
                            if ($email) { echo '<li class="list-inline-item"><a href="mailto:'. $email . '" target="_blank" class="os text-white"><i class="fas fa-envelope-open-text"></i></a></li>';}
                        }
                        
                    ?>
                </ul>
            </div>
            <?php
            $url = get_post_meta( get_the_ID(), 'oembed', true );
            $embed = wp_oembed_get( $url, $args );
            if ( ! $embed ) {
                $embed = $GLOBALS['wp_embed']->shortcode( $args, $url );
            }
            if ( $embed ) {
                echo '<div class="container py-5"><div class="embed-responsive embed-responsive-16by9">';
                echo $embed;
                echo '</div></div>';
            ?>
            <?php } ?>
        </header><!-- .entry-header -->

        <?php if( has_excerpt() || !empty( get_the_content() ) ) {?>
            <div class="container py-5">
                <div class="w-md-70 mx-auto">
                <?php 
                    if( has_excerpt() ){
                        echo '<div class="mt-2 lead">'. get_the_excerpt() .'</div>';
                    }
                    echo '<div class="mt-2 d-block">' . get_the_content().'</div>';
                ?>
                </div>            
            </div>
        <?php } ?>

<?php } ?>

    </div><!-- #post-<?php the_ID(); ?> -->


    