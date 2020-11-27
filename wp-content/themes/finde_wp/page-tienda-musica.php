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

get_template_part( 'layouts/header', 'mu' ); 
?>

    <div id="content" class="tienda-musica">

        <!--OPB-->
        <?php the_content();?>

        <!--TIENDA-->
        <section id="tienda-musica-slick" class="bg-light py-5">
            <div class="container">
                <h1 class="mb-4"><strong>Tienda</strong></h1>
            </div>
            <div class="container-fluid">
                <?php wp_archive_catalogomuxrubro('instrumentos-musicales'); ?>
                <?php wp_archive_catalogomuxrubro('estudios'); ?>
                <?php wp_archive_catalogomuxrubro('audio-profesional'); ?>
                <?php wp_archive_catalogomuxrubro('musica'); ?>

            </div><!-- #main -->
        </section>


<?php 
get_template_part( 'layouts/footer', 'mu' ); 
