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
$partidos = get_the_terms( $post->ID, 'partido' );
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
$imagenes_contar = rwmb_meta( 'image_contar', array( 'size' => 'large' ) );
$image_contar = reset( $imagenes_contar );


    
    echo '<div class="card card-cartelera';
        if ($image_contar) { 
            echo ' tengo-background" style="background-image: url('. esc_url($image_contar['url']) .');">'; 
        } else {
            echo '">';
        }
        echo '<a href="' . get_the_permalink() .'" rel="slidemark" class="stretched-link">';
        echo '<i class="fas fa-play-circle"></i>';
        echo '<div class="data"><h5>'.get_the_title().'</h5></div></a>';
    echo '</div>';
   
    
?>