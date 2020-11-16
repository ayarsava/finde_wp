<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Finde_WP
 */

get_template_part( 'layouts/header', 'ed' );

    $image_tapa = rwmb_meta( 'mbox_tapa', array( 'limit' => 1, 'size' => 'full' ) );
    $tapa = reset( $image_tapa );
    $image_contratapa = rwmb_meta( 'mbox_contratapa', array( 'limit' => 1, 'size' => 'full' ) );
    $contratapa = reset( $image_contratapa );
    $quote = rwmb_meta('mbox_quote');
    $destacado_id = rwmb_meta('mbox_destacado_id');
    $subtitulo = rwmb_meta('mbox_subtitulo');
    $autor = rwmb_meta('mbox_autor');
    $traductor = rwmb_meta('mbox_traductor');
    $ilustrador = rwmb_meta('mbox_ilustrador');
    $isbn = rwmb_meta('mbox_isbn');
    $fecha_publicacion = rwmb_meta('mbox_fecha_publicacion');
    $paginas = rwmb_meta('mbox_paginas');
    $precio = rwmb_meta('mbox_precio');
    $formato = rwmb_meta('mbox_formato');
    $edicion = rwmb_meta('mbox_edicion');
    $impresion = rwmb_meta('mbox_impresion');
    $url = rwmb_meta('mbox_url');
    $editoriales = MB_Relationships_API::get_connected( [
        'id'   => 'productoeditorial_to_editoriales',
        'from' => get_the_ID(),
    ] );

?>
<div id="content">
    <div id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
        <div class="container">
            <div class="row py-5">
                <div class="col-md-5">
                    <div class="profile-slick" style="min-height:500px!important;margin-top:0px!important;">
                    <?php 
                        if ($image_tapa) { 
                            echo '<img src="'.$tapa['url'].'" class="img-fluid">';
                        }
                    ?>
                    <?php 
                        if ($image_contratapa) { 
                            echo '<img src="'.$contratapa['url'].'" class="img-fluid mt-2">';
                        }
                    ?>
                    </div>
                    <?php 
                    if ($url) {
                        echo '<a href="'.$url.'" target="_blank" title="Comprar en tienda" class="btn btn-outline-primary btn-block">Comprar</a>';
                    }
                    ?>
                </div>
                <div class="col-md-10">
                    <?php the_title( '<h1 class="entry-title extra-grande">', '</h1>' ); ?>
                    <?php 
                    if ($subtitulo) {
                    echo '<div class="lead font-weight-bold mb-2">'.$subtitulo.'</div>';
                    }
                    if ($autor) {
                    echo '<div class="autores">'.$autor.'</div>';
                    }
                    if ($traductor) {
                    echo '<div class="traductor">Traducción por: '.$traductor.'</div>';
                    }
                    if ($ilustrador) {
                    echo '<div class="traductor">Ilustraciones de: '.$ilustrador.'</div>';
                    }
                    if ($editoriales) {
                        echo 'Editorial:<ul class="list-unstyled">'; foreach ( $editoriales as $editorial ) {
                        echo '<li><span>Por editorial: <strong><a href="'.get_permalink( $editorial ).'">' .$editorial->post_title.'</a></strong></span></li> ';
                        }
                        echo '</ul>';
                    }
                    echo '<div class="mt-4">';
                    echo the_content();
                    echo '</div>';
                    ?>
                    <?php if ($quote) {?>
                    <div class="py-4 gutemberg">
                        <div class="item col-md-12 p-4">
                            <?php echo $quote;?>
                        </div>
                    </div>
                    <?php } ?>

                    <?php
                    echo '<!--Metadata--><dl class="ficha-tecnica">';
                    if ($isbn) {
                        echo '<dt>ISBN</dt>';
                        echo '<dd>'.$isbn.'</dd>';
                    }
                    if ($fecha_publicacion) {
                        echo '<dt>Fecha de publicación</dt>';
                        echo '<dd>'.date('d-m-Y', $fecha_publicacion);'</dd>';
                    }
                    if ($paginas) {
                        echo '<dt>Páginas</dt>';
                        echo '<dd>'.$paginas.'</dd>';
                    }
                    if ($precio) {
                        echo '<dt>Precio</dt>';
                        echo '<dd>'.$precio.'</dd>';
                    }
                    if ($formato) {
                        echo '<dt>Formato</dt>';
                        echo '<dd>'.$formato.'</dd>';
                    }
                    if ($edicion) {
                        echo '<dt>Edición</dt>';
                        echo '<dd>'.$edicion.'</dd>';
                    }
                    if ($impresion) {
                        echo '<dt>Impresión</dt>';
                        echo '<dd>'.$impresion.'</dd>';
                    }
                    echo '<!--Fin Metadata-->';
                    ?>
                </div>
            </div>
        </div>
        <section class="bg-white">
            <div class="container py-4">
                
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
    

<?php get_template_part( 'layouts/footer', 'ed' ); 
