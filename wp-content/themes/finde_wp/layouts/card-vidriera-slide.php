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
$tapas = reset( $images );
    echo '<div class="card card-vidriera"';
    if ($tapas) { 
        echo ' style="background-image: url('. esc_url($tapas['url']) .');">'; 
    } else {
        echo '">';
    }
    echo '<a href="' . get_the_permalink() .'" rel="slidemark" class="stretched-link">';
    echo '<i class="fas fa-eye"></i>';
    echo '<div class="data sr-only"><h5>'.get_the_title().'</h5></div></a>';
    echo '</div>';
?>