<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Finde_WP
 */

get_template_part( 'layouts/header', 'di' ); 
?>

    <div id="content" class="tienda-diseno">

        <!--OPB-->
        <?php the_content();?>

        <!--TIENDA-->
        <section id="agenda-slick" class="bg-light py-5">
            <div class="container">
                <h1 class="mb-4"><strong>Tienda</strong></h1>
                
                <?php wp_archive_catalogodixrubro('moda'); ?>
                <?php wp_archive_catalogodixrubro('muebles-y-objetos'); ?>
                <?php wp_archive_catalogodixrubro('ilustracion-y-piezas-graficas'); ?>
                <?php wp_archive_catalogodixrubro('servicios-de-diseno'); ?>
                <?php wp_archive_catalogodixrubro('artesanias'); ?>

            </div><!-- #main -->
        </section>


<?php 
get_template_part( 'layouts/footer', 'di' ); 
