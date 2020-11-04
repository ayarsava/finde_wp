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
    echo '<div class="col-md-5">';
        echo '<div class="card">';
            echo '<img src="'. esc_url($image_contar['url']) .'" class="card-img-top" alt="...">';
            echo '<div class="card-body">';
                echo '<h5 class="card-title">'.get_the_title().'</h5>';
                if( has_excerpt() ){
                    echo '<p class="card-text">'. get_the_excerpt() .'</p>';
                } else {
                    echo '<p class="card-text">'. wp_trim_words( wp_strip_all_tags( get_the_content() ), 18, '...' )  .'</p>';
                }
            echo '<a href="' . get_the_permalink() .'" rel="slidemark" class="stretched-link"></a>';
            echo '</div>';
        echo '</div>';
    echo '</div>';
?>