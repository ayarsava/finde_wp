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

get_template_part( 'layouts/header', 'te' ); 
?>

    <div id="content" class="home-territorio">
        <!--CCK-->
        <section class="bg-white cck">
            <div class="container-fluid">
                <div class="row ">
                    <div class="w-100 w-md-50 h-100 text-center text-white d-flex justify-content-center align-items-center position-relative" style="background-color:#153243;min-height:350px;">
                        <a href="/territorio/gestion-cultural-publica" title="Gestión Cultural Pública" class="stretched-link"></a>
                        <h4>Gestión Cultural Pública</h4>
                    </div>
                    <div class="w-100 w-md-50 h-100 text-center text-white d-flex justify-content-center align-items-center position-relative" style="background-color:#284B63;min-height:350px;">
                        <a href="/territorio/gestion-cultural-independiente" title="Gestión Cultural Independiente" class="stretched-link"></a>
                        <h4>Gestión Cultural Independiente</h4>
                    </div>
                </div>
            </div>
        </section>

        <!--BANNERS-->
        <?php wp_archive_banners('territorio');?>


<?php 
get_template_part( 'layouts/footer', 'te' ); 
