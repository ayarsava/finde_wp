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
                    <div class="libro-slick" style="margin-top:0px!important;">
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
                    <?php
                    echo '<!--Metadata--><dl class="ficha-tecnica border-left pl-3 mt-2">';
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
                    <?php 
                    if ($editoriales) {
                        echo '<ul class="list-unstyled my-4">'; foreach ( $editoriales as $editorial ) {
                        echo '<li><h5 class="mb-3">Otros títulos de editorial <strong><a href="'.get_permalink( $editorial ).'" id="'.$editorial->ID.'">' .$editorial->post_title.'</a></strong><h5></li> ';
                        
                        $connected = new WP_Query( [
                            'relationship' => [
                                'id'   => 'productoeditorial_to_editoriales',
                                'to' => $editorial->ID,
                            ],
                            'nopaging'     => true,
                            'post__not_in'   => array( $post->ID )
                        ] );
                        while ( $connected->have_posts() ) : $connected->the_post();
                        echo '<div class="w-100">';
                            get_template_part( 'layouts/card', 'libro' );
                        echo '</div>';
                        endwhile;
                        wp_reset_postdata();

                        }
                        echo '</ul>';
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

                    if ($quote) {
                        echo '<div class="py-4 gutemberg row">';
                            echo '<div class="item col-md-12 lead text-primary"><em>';
                                echo $quote;
                            echo '</em></div>';
                        echo '</div>';
                    }
                    if ($traductor) {
                    echo '<div class="traductor">Traducción por: '.$traductor.'</div>';
                    }
                    if ($ilustrador) {
                    echo '<div class="traductor">Ilustraciones de: '.$ilustrador.'</div>';
                    }
                    $post_tags = get_the_tags();
                    if ( $post_tags ) {
                        echo '<div class="tags">';
                        foreach( $post_tags as $tag ) {
                        echo '<span class="badge badge-rounded badge-primary"> ' .$tag->name . ' </span> '; 
                        }
                        echo '</div>';
                    }
                    echo '<div class="mt-4">';
                    echo the_content();
                    echo '</div>';
                    ?>

                    
                </div>
            </div>
        </div>
    </div><!-- #post-<?php the_ID(); ?> -->
    

<?php get_template_part( 'layouts/footer', 'ed' ); 
