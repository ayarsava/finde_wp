<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Finde_WP
 */

get_template_part( 'layouts/header', 'au' );

    $youtubevimeo = rwmb_meta( $post->ID, 'youtubevimeo' );
    $contar = rwmb_meta('mbox_contar');
    $iframe = rwmb_meta( 'iframe' );
    $aclaracion = rwmb_meta('mbox_aclaracion');
    $image_contar = rwmb_meta( 'image_contar', array( 'limit' => 1, 'size' => 'full' ) );
    $image = reset( $image_contar );
    $tipo_au = get_the_terms( $post->ID, 'tipo_au' );
    $genero_au = get_the_terms( $post->ID, 'genero_au' );
    $calificacion_au = get_the_terms( $post->ID, 'calificacion_au' );
    $afiche = get_the_post_thumbnail_url(get_the_ID(),'full'); 
    $presentado_por = rwmb_meta('mbox_presentado-por');
    $seleccion = rwmb_meta('mbox_seleccion');
    $descripcion = rwmb_meta('mbox_descripcion');
    $duracion = rwmb_meta('mbox_duracion');
    $productora = rwmb_meta('mbox_productora');
    $direccion = rwmb_meta('mbox_direccion');
    $produccion = rwmb_meta('mbox_produccion');
    $guion = rwmb_meta('mbox_guion');
    $ano = rwmb_meta('mbox_ano');
    $elenco = rwmb_meta('mbox_elenco');

?>
<div id="content">
    <div id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
        <?php 
        $url = get_post_meta( get_the_ID(), 'youtubevimeo', true );
        $embed = wp_oembed_get( $url, $args );
        if ( $embed ) {
            echo '<header class="movie-container text-light py-3" style="background:#000;"><div class="container">';
            echo $embed;
            echo '</div></header>';
        } else if ($contar) {
            if ($iframe == 1) {
                echo '<iframe width="100%" height="640" style="width: 100%; height: 640px; border: none; max-width: 100%;" frameborder="0" allowfullscreen allow="xr-spatial-tracking; gyroscope; accelerometer" scrolling="yes" src="'.$contar.'"></iframe>';
            } else {
                echo '<header class="movie-container contar text-light py-3"';
                if ($image_contar) { 
                    echo ' style="background-image: url('.$image['url'].'">';
                    echo '<a href="'.$contar.'" target="_blank" class="goto-contar"><i class="fas fa-play-circle"></i></a>';
                    echo '</header>';
                } else {
                    echo '></header>';
                }
            }
        } else {
            echo '<header class="movie-container text-light py-3" style="background:#000;">
            <div class="container">No hemos encontrado contenido para ser mostrado</div></header>';
        }
        if ($contar && $iframe == 0) {
            if ($aclaracion) {
                echo '<!--Aclaración de redirección-->';
                echo '<div class="aclaracion" style="background:#F1F1F1; font-size:.8rem;"><div class="container py-3">';
                echo $aclaracion;
                echo '</div></div>';
            } else {
                echo '<!--Aclaración de redirección-->';
                echo '<div class="aclaracion" style="background:#F1F1F1; font-size:.8rem;"><div class="container py-3">Al dar play, serás redirigido al sitio web de Cont.ar. Si no sos miembro, registrate, lleva 2 minutos, es gratis y vas a poder ver cientos de series y películas.</div></div>';
            }
        } ?>
        <section class="bg-white">
            <div class="container py-4">
                <?php the_title( '<h1 class="entry-title extra-grande">', '</h1>' ); ?>
                <div class="etiquetas">
                <?php if ($duracion) { ?>
                    <span class="mr-1"><i class="far fa-clock"></i> Duración: <?php echo $duracion;?></span>
                <?php } ?>
                    <?php
                    if ($tipo_au) {
                        echo '<span class="mr-1"><i class="fas fa-film"></i>  ';
                        foreach($tipo_au as $tipo) {
                        $tipo_autring[] = $tipo->name;
                        }
                        $list = implode(', ', $tipo_autring);
                        echo rtrim($list,',');
                        echo '</span>';
                    }
                    ?>
                    <?php
                    if ($genero_au) {
                        echo '<span class="mr-1"><i class="fas fa-eye"></i>  ';
                        foreach($genero_au as $genero) {
                        $genero_autring[] = $genero->name;
                        }
                        $list = implode(', ', $genero_autring);
                        echo rtrim($list,',');
                        echo '</span>';
                    }
                    ?>
                    <?php
                    if ($calificacion_au) {
                        echo '<span class="mr-1"><i class="far fa-hand-paper"></i>  ';
                        foreach($calificacion_au as $calificacion) {
                        $calificacion_autring[] = $calificacion->name;
                        }
                        $list = implode(', ', $calificacion_autring);
                        echo rtrim($list,',');
                        echo '</span>';
                    }
                    ?>
                </div>
                <div class="lead py-4 gutemberg">
                    <?php 
                    echo the_content();
                    ?>
                </div>
            </div>
        </section>
        <section class="container-fluid no-gutters ficha">
            <div class="row">
            <?php if ($presentado_por) {?>
                <div class="item col-md-5 p-4">
                    <div class="titulo">Este contenido es presentado por</div>
                    <p class="text-light"><?php echo $presentado_por;?></p>
                </div>
            <?php } ?>
            <?php if ($descripcion) {?>
                <div class="item col-md-5 p-4">
                    <div class="titulo">Descripción</div>
                    <p><?php echo $descripcion;?></p>
                </div>
            <?php } ?>
            <?php if ($seleccion) {?>
                <div class="item col-md-5 p-4">
                    <div class="titulo">Curación</div>
                    <p class="text-light"><?php echo $seleccion;?></p>
                </div>
            <?php } ?>
            <?php if ($afiche) {?>
                <div class="item col-md-5 p-4">
                    <div class="titulo">Afiche</div>
                    <img src="<?php echo $afiche;?>" class="img-fluid px-4">
                </div>
            <?php } ?>
            <? if ($productora || $direccion || $produccion || $guion || $ano || $elenco) {?>
                <div class="item col-md-5 p-4">
                    <div class="titulo">Ficha técnica</div>
                    <ul class="list-unstyled ficha-tecnica">
                        <? 
                        if ($direccion) {
                            echo '<li><strong>Dirección:</strong> '.$direccion.'</li>';
                        }
                        if ($produccion) {
                            echo '<li><strong>Producción:</strong> '.$produccion.'</li>';
                        }
                        if ($guion) {
                            echo '<li><strong>Guión:</strong> '.$guion.'</li>';
                        }
                        if ($ano) {
                            echo '<li><strong>Año:</strong> '.$ano.'</li>';
                        }
                        if ($elenco) {
                            echo '<li><strong>Elenco:</strong> '.$elenco.'</li>';
                        }
                        if ($productora) {
                            echo '<li><strong>Productora:</strong> '.$productora.'</li>';
                        }
                        ?>
                    </ul>
                </div>
                <?php } ?>
                <?php 
                $url = get_post_meta( get_the_ID(), 'trailer', true );
                $trailer = wp_oembed_get( $url, $args );
                if ( $trailer ) {
                    echo '<div class="item col-md-5 p-4 trailer"><div class="titulo">Trailer</div>';
                    echo '<div>';
                    echo $trailer;
                    echo '</div></div>';
                }
                ?>
            </div>
        </section>

    </div><!-- #post-<?php the_ID(); ?> -->

<?php get_template_part( 'layouts/footer', 'au' ); 
