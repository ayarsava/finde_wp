<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finde_WP
 */

get_template_part( 'layouts/header', 'vj' );
?>
<div id="agenda" class="main-content bg-card listado-agenda">
    <div class="container py-5">
        
        <h1 class="extra-grande mb-4">Programación</h1>
        <?php wp_archive_agenda_destacado('videojuegos'); ?>
        <hr>
        <h2 class="font-weight-bold my-5">Programación completa</h2>
        <?php 
        $args = array(
            'post_type'              => 'agenda',
            'posts_per_page'         => -1,
            'category_name'          => 'videojuegos',
            'meta_query'             => array(
                'fecha_clause'       => array(
                    'key'            => 'fecha_id',
                ),
            ),
            'orderby'                => array( 
                'fecha_clause'       => 'ASC',
            ),
        );

        // The Query
        $query_agenda = new WP_Query( $args );
        if ( $query_agenda->have_posts() ) : ?>
            <?php
            /* Start the Loop */
            
            while ( $query_agenda->have_posts() ) : $query_agenda->the_post();
            echo '<div class="row mb-4">';
                get_template_part('layouts/card-agenda');
            echo '</div>';
            endwhile;

        else :

            get_template_part( 'template-parts/content', 'none' );

        endif;
        ?>    
    </div><!-- .container -->

<?php
get_template_part( 'layouts/footer', 'vj' ); 
