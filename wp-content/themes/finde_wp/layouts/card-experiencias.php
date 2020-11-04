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
    
    echo '<div class="mb-1">';
    echo '<div class="card w-100">';
    echo '<a href="' . get_the_permalink() .'" rel="slidemark" class="stretched-link"></a>';
    if ($featured_img_url) { 
        echo '<div class="img-wrapper">';
        echo '<img src="'.$featured_img_url.'">';
        echo '</div>';
    }
    
    echo '<div class="card-body">';
    echo '<div class="badge badge-primary mb-3 px-2 py-1">';
    if ($partidos) {
        foreach($partidos as $partido) {
        $partidostring[] = $partido->name;
        }
        $list = implode(', ', $partidostring);
        echo rtrim($list,',');
    }
    echo '</div>';
    echo '<h5 class="card-title font-weight-bold">' . get_the_title() . '</h5>';
    if ( get_the_excerpt() ) {
        echo '<div class="card-text mb-2">' . get_the_excerpt() .'</div>';
        } else {
        echo '<div class="card-text mb-2">' . wp_trim_words( wp_strip_all_tags( get_the_content() ), 18, '...' ) .'</div>';
    }
    

    
    echo '</div></div></div>';

    
?>