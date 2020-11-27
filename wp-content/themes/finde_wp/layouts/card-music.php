<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Finde_WP
 */

?>

<?php

        $images = rwmb_meta( 'image_ed', array( 'limit' => 1 ,'size' => 'medium') );
        $image = reset( $images );
        $url = rwmb_meta( 'mbox_url' );
        $instagram = rwmb_meta( 'mbox_instagram' );
        $twitter = rwmb_meta( 'mbox_twitter' );
        $facebook = rwmb_meta( 'mbox_facebook' );
        $libreria = rwmb_meta( 'mbox_libreria' );
        $whatsapp = rwmb_meta( 'mbox_whatsapp' );

        $terms = get_the_terms( $post->ID, 'rubro_mu' );
        $dterms = get_the_terms( $post->ID, 'descuento_mu' );
        $productos = MB_Relationships_API::get_connected( [
            'id'   => 'productomusica_to_musica',
            'to' => get_the_ID(),
        ] );

        echo '<div class="card-music item mb-1"';
        if ($terms) {
            echo ' data-category="';
            foreach( $terms as $term ) echo $term->slug. ' ';
            echo '" ';
        }
        if ($dterms) {
            echo ' data-descuento="';
            foreach( $dterms as $dterm ) echo $dterm->slug. ' ';
            echo '"';
        }
        echo '>';
        
        
        echo '<div class="card">';
        if ($image) {
            echo '<div class="img-wrapper p-0"><img data-lazy="'.$image['url'].'" class="img-fluid"></div>';
        }
        echo '<div class="card-body">';
        echo '<a href="' . get_the_permalink() .'" rel="slidemark" class="stretched-link"></a>';
        echo '<h5 class="card-title">' . get_the_title() . '</h5>';
        if ( get_the_excerpt() ) {
            echo '<div class="card-text">' . wp_trim_words( wp_strip_all_tags( get_the_excerpt() ), 18, '...' ) .'</div>';
        } else {
            echo '<div class="card-text">' . wp_trim_words( wp_strip_all_tags( get_the_content() ), 18, '...' ) .'</div>';
        }
        
        if ($terms) {
            echo '<div class="rubro_mu">';
            foreach( $terms as $term ) { echo '<span><a href="'.get_term_link($term->slug, 'rubro_mu').'" class="badge badge-primary text-white mt-1 os">'.$term->name.'</a></span>', ' ';}
            echo '</div>';
        }
        if ($dterms) {
            echo '<div class="descuento_mu">';
            foreach( $dterms as $term ) { echo '<a href="'.get_term_link($term->slug, 'descuento_mu').'" class="badge badge-dark mt-1 os">'.$term->name.'</a></span>', ' ';}
            echo '</div>';
        }
        if ($url || $instagram || $facebook || $twitter) {
            echo '<div class="contacto mt-2">';
            if ($url) { echo '<li class="list-inline-item"><a href="'. $url . '" target="_blank" class="os"><i class="fas fa-globe-americas"></i></a></li>';}
            if ($libreria) { echo '<li class="list-inline-item"><a href="'. $libreria . '" target="_blank" class="os"><i class="fas fa-shopping-cart"></i></a></li>';}
            if ($instagram) { echo '<li class="list-inline-item"><a href="'. $instagram. '" target="_blank" class="os"><i class="fab fa-instagram"></i></a></li>';}
            if ($facebook) { echo '<li class="list-inline-item"><a href="'. $facebook. '" target="_blank" class="os"><i class="fab fa-facebook"></i></a></li>';}
            if ($twitter) { echo '<li class="list-inline-item"><a href="'. $twitter. '" target="_blank" class="os"><i class="fab fa-twitter"></i></a></li>';}
            if ($whatsapp) { echo '<li class="list-inline-item"><a href="https://api.whatsapp.com/send?phone='. $whatsapp . '" target="_blank" class="os"><i class="fab fa-whatsapp"></i></a></li>';}
            echo '</div>';
        }
        
        echo '</div><!--End .card-body-->';
        
        if ($productos) {
            echo '<small class="card-footer text-muted text-sm lista">';
            echo 'Productos u ofertas:<ul class="pl-3">'; foreach ( $productos as $producto ) {
            echo '<li><span><strong><a href="'.get_permalink($producto).'" class="os">' .$producto->post_title.'</a></strong></span></li> ';
            }
            echo '</ul></small>';
        }
        echo '</div></div>';
?>