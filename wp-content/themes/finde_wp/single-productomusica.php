<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Finde_WP
 */

get_template_part( 'layouts/header', 'mu' );

    $image_tapa = rwmb_meta( 'mbox_tapa', array( 'limit' => 1, 'size' => 'full' ) );
    $tapa = reset( $image_tapa );
    $destacado_id = rwmb_meta('mbox_destacado_id');
    $fecha_publicacion = rwmb_meta('mbox_fecha_publicacion');
    $precio = rwmb_meta('mbox_precio');
    $url = rwmb_meta('mbox_url');
    $musica = MB_Relationships_API::get_connected( [
        'id'   => 'productomusica_to_musica',
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
                    </div>
                    <?php 
                    if ($url) {
                        echo '<a href="'.$url.'" target="_blank" title="Comprar en tienda" class="btn btn-outline-primary btn-block">Comprar</a>';
                    }
                    ?>
                    <?php
                    echo '<!--Metadata--><dl class="ficha-tecnica border-left pl-3 mt-2">';
                    
                    if ($precio) {
                        echo '<dt>Precio</dt>';
                        echo '<dd>'.$precio.'</dd>';
                    }
                    echo '<!--Fin Metadata-->';
                    ?>

                    

                    <?php 
                    if ($musica) {
                        foreach ( $musica as $music ) {
                            
                            $connected = new WP_Query( [
                                'relationship' => [
                                    'id'   => 'productomusica_to_musica',
                                    'to' => $music->ID,
                                ],
                                'nopaging'     => true,
                                'post__not_in'   => array( $post->ID )
                            ] );

                            $the_count = $connected->found_posts;
                            if ( ( $connected->have_posts() ) && ( $the_count > 1 ) ) :

                                echo '<h5 class="mb-3">Otros productos de <strong><a href="'.get_permalink( $music ).'" id="'.$music->ID.'">' .$music->post_title.'</a></strong><h5> ';

                                while ( $connected->have_posts() ) : $connected->the_post();
                                echo '<div class="w-100 mb-3">';
                                    get_template_part( 'layouts/card', 'libro' );
                                echo '</div>';
                                endwhile;
                                wp_reset_postdata();
                            else:
                                echo '<h5 class="mb-3">Un producto de <strong><a href="'.get_permalink( $music ).'" id="'.$music->ID.'">' .$music->post_title.'</a></strong><h5>';
                            endif;
                        }
                    }
                    ?>
                </div>
                <div class="col-md-10">
                    <?php the_title( '<h1 class="entry-title extra-grande">', '</h1>' ); ?>
                    <?php 
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
    

<?php get_template_part( 'layouts/footer', 'mu' ); 
