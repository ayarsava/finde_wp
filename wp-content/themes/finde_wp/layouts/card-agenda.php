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
    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
    $fecha = rwmb_meta( 'fecha_id' ); 
    $destacado = rwmb_meta( 'destacado_id' );
        echo '<div class="col-15">';
            echo '<div class="row pb-4 border-bottom">';
                echo '<a href="'. get_permalink().'" class="stretched-link"></a>';
                echo '<div class="col-md-3">';
                    echo '<span class="dia">'.date('d-m', $fecha).'</span>';
                    echo '<span class="hora">'.date('H:i', $fecha).'hs</span>';
                echo '</div>';

                if ($featured_img_url) { 
                    echo '<div class="col-md-3 img-wrapper img-fluid" style="background-image: url('. esc_url($featured_img_url) .');">';
                    if ($destacado == 1) { echo '<div class="ribbon ribbon-top-left"><span></span></div>'; }
                    echo '</div>';
                }
                
                echo '<div class="col-md-9 pl-md-4">';
                    if ($featured_img_url) { 
                        the_title( '<h4 class="card-title font-weight-bold">', '</h4>' );
                    } else {
                        the_title( '<h4 class="h2 card-title font-weight-bold">', '</h4>' );
                    }
                    if ( get_the_excerpt() ) {
                    echo '<div class="card-text mb-2">' . get_the_excerpt() .'</div>';
                    } else {
                    echo '<div class="card-text mb-2">' . wp_trim_words( wp_strip_all_tags( get_the_content() ), 18, '...' ) .'</div>';
                    }
                    $post_tags = get_the_tags();
                    if ( $post_tags ) {
                        echo '<div class="etiquetas">';
                        foreach( $post_tags as $tag ) {
                        echo '<span class="badge badge-primary mr-2">' .$tag->name . '</span>'; 
                        }
                        echo '</div>';
                    }
                echo '</div>';
            echo '</div>';
        echo '</div><!-- fin-de-item -->';
?>