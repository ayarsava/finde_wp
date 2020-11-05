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
$tipo_au = get_the_terms( $post->ID, 'tipo_au' );
$genero_au = get_the_terms( $post->ID, 'genero_au' );
$calificacion_au = get_the_terms( $post->ID, 'calificacion_au' );
$duracion = rwmb_meta('mbox_duracion');
    echo '<div class="col-md-5 mb-3 item-audiovisual">';
        echo '<div class="card">';
            echo '<div class="card-header position-relative" style="background-image:url('. esc_url($image_contar['url']) .'">';?>
            <div class="etiquetas position-absolute" style="bottom: 10px; left:0;">
                <?php if ($duracion) { ?>
                    <div><span class="mr-1"><i class="far fa-clock"></i> Duración: <?php echo $duracion;?></span></div>
                <?php } ?>
                <?php
                if ($tipo_au) {
                    echo '<div><span class="mr-1"><i class="fas fa-film"></i>  ';
                    foreach($tipo_au as $tipo) {
                    $tipo_autring[] = $tipo->name;
                    }
                    $list = implode(', ', $tipo_autring);
                    echo rtrim($list,',');
                    echo '</span></div>';
                }
                ?>
                <?php
                if ($genero_au) {
                    echo '<div><span class="mr-1"><i class="fas fa-eye"></i>  ';
                    foreach($genero_au as $genero) {
                    $genero_autring[] = $genero->name;
                    }
                    $list = implode(', ', $genero_autring);
                    echo rtrim($list,',');
                    echo '</span></div>';
                }
                ?>
                <?php
                if ($calificacion_au) {
                    echo '<div><span class="mr-1"><i class="far fa-hand-paper"></i>  ';
                    foreach($calificacion_au as $calificacion) {
                    $calificacion_autring[] = $calificacion->name;
                    }
                    $list = implode(', ', $calificacion_autring);
                    echo rtrim($list,',');
                    echo '</span></div>';
                }
                ?>
            </div>
            <?php
            echo '</div>';
            echo '<div class="card-body">';
                echo '<h5 class="card-title font-weight-bold">'.get_the_title().'</h5>';
                if( has_excerpt() ){
                    echo '<p class="card-text">'. get_the_excerpt() .'</p>';
                } else {
                    echo '<p class="card-text">'. wp_trim_words( wp_strip_all_tags( get_the_content() ), 35, '...' )  .'</p>';
                }
            echo '<a href="' . get_the_permalink() .'" rel="slidemark" class="stretched-link"></a>';
            echo '</div>';
        echo '</div>';
    echo '</div>';
?>