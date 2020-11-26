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

$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
$url = rwmb_meta( 'mbox_url' );
$image_tapa = rwmb_meta( 'mbox_tapa', array( 'limit' => 1, 'size' => 'small' ) );
$tapa = reset( $image_tapa );
$subtitulo = rwmb_meta('mbox_subtitulo');
$autor = rwmb_meta('mbox_autor');

echo '<div class="card card-libro">';
echo '<div class="row no-gutters">';
    echo '<div class="col-5">';
        echo '<img src="'.$tapa['url'].'" class="card-img" alt="...">';
    echo '</div>';
    echo '<div class="col-10"><div class="card-body">';
        echo '<h5 class=""><a href="' . get_the_permalink() .'" rel="slidemark" class="stretched-link">'. get_the_title() .'</a></h5>';
        if ($subtitulo) {
            echo '<div class="mb-2">'.$subtitulo.'</div>';
        }
        if ($autor) {
            echo '<div class="autores text-primary mb-2 card-text"><em>'.$autor.'</em></div>';
        }
        if( has_excerpt() ){
            echo '<div class="card-text">'. wp_trim_words( wp_strip_all_tags(get_the_excerpt() ), 18, '...' ) .'</div>';
        } else {
            echo '<div class="card-text">' . wp_trim_words( wp_strip_all_tags( get_the_content() ), 18, '...' ) .'</div>';
        }
    echo '</div></div>';
echo '</div>';
echo '</div>';
?>