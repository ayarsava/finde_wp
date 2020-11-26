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
$images = rwmb_meta( 'mbox_tapa', array( 'size' => 'large' ) );
$precio = rwmb_meta ('mbox_precio');
$url = rwmb_meta ('mbox_url');
$tapas = reset( $images );

    echo '<div class="card card-vidriera h-100" style="width: 18rem;">';
    echo '<a href="' . get_the_permalink() .'" rel="slidemark" class="stretched-link"></a>';
    
    if ($tapas) { 
    echo '<img src="'. esc_url($tapas['url']) .'" class="card-img-top mx-auto" alt="...">';
    }
    echo '<div class="card-body">';
    echo '<h5>'.get_the_title().'</h5>';
    if ($precio || $url) { 
        echo '<p class="card-text">';
        if ($precio) {
            echo $precio;
        }
        if ($url) {
            echo '<a href="'.$url.'" target="_blank" title="Comprar" class="btn btn-sm btn-outline-primary os ml-2"> <span class="fas fa-shopping-cart"></span> </a>';
        }
        echo '</p>';
    }
    echo '</div></div>';
?>