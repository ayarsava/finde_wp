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
$tapas = reset( $images );

    echo '<div class="card card-vidriera" style="width: 18rem;">';
    echo '<a href="' . get_the_permalink() .'" rel="slidemark" class="stretched-link"></a>';
    
    if ($tapas) { 
    echo '<img src="'. esc_url($tapas['url']) .'" class="card-img-top mx-auto" alt="...">';
    }
    echo '<div class="card-body">';
    echo '<h5>'.get_the_title().'</h5>';
    echo '<p class="card-text">$'.$precio.'.-</p>';
    echo '</div></div>';
?>