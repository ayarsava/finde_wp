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
        echo '<div class="mb-1">';
        echo '<div class="card w-100">';
        $hacedores = get_the_terms( $post->ID, 'hacedor' );
        $partidos = get_the_terms( $post->ID, 'partido' );

        $url = get_post_meta( get_the_ID(), 'oembed', true );
        $embed = wp_oembed_get( $url, $args );
        if ( ! $embed ) {
            $embed = $GLOBALS['wp_embed']->shortcode( $args, $url );
        }
        if ( $embed ) {
            echo '<div class="embed-responsive embed-responsive-16by9">';
            echo $embed;
            echo '</div>';
        }
        echo '<div class="card-body">';
        echo '<h5 class="card-title font-weight-bold"><a href="' . get_the_permalink() .'" rel="slidemark">' . get_the_title() . '</a></h5>';
        echo '<p>';
        if ($hacedores) {
            foreach($hacedores as $hacedor) {
            $hacedorestring[] = $hacedor->name;
            }
            $list = implode(', ', $hacedorestring);
            echo rtrim($list,',');
        }
        if ($partidos) {
            echo ' (';
            foreach($partidos as $partido) {
            $partidostring[] = $partido->name;
            }
            $list = implode(', ', $partidostring);
            echo rtrim($list,',');
            echo ')';
        }
        echo '</p>';

        
        echo '</div></div></div>';
    
?>