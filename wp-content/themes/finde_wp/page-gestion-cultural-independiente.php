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

get_template_part( 'layouts/header', 'te-in' ); 
?>

    <div id="content" class="home-gestion-cultural-independiente">

        <section id="slide-principal">
            <div id="carouselCaptions" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <?php wp_showSlides_fullbg_portag('gestion-cultural-independiente') ?>
                </div>

                <a class="carousel-control-prev" href="#carouselCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>


        <!--OPB-->
        <?php the_content();?>

        <!--BIENVENIDA-->
        <section class="bg-light py-5">
            <div class="container">
                <h3 class="mb-4"><strong>Bienvenida</strong></h3>
                <p class="lead">Territorios Unidos es un espacio de encuentro entre los 135 municipios bonaerenses, Territorios Unidos es un espacio de encuentro entre los 135 municipios bonaerenses, Territorios Unidos es un espacio de encuentro entre los 135 municipios bonaerenses.</p>
            </div>
        </section>

        <!--ATLAS DE EXPERIENCIAS-->
        <section class="bg-white py-2 py-sm-5">
            <div class="container">
                <h3 class="mb-4"><strong>Atlas de experiencias</strong></h3>
                <div class="lead">
                    Un inventario de políticas y eventos culturales lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </div>
                
                <div class="slick x3 my-5">
                    <?php wp_archive_experiencias_x_recurso('atlas-de-experiencias', 'gestion-cultural-independiente') ?>
                </div>
            </div>
        </section>

        <!--CONFERENCIAS-->
        <section class="py-2 py-sm-5">
        
            <div class="container-fluid bg-light py-2">
                <div class="container">
                    <h3 class="mb-4"><strong>Conversaciones</strong></h3>
                    <div class="lead mb-4">
                        Gestores culturales públicos de otras provincias nos comparten casos de gestión que produjeron un impacto en sus territorios.
                    </div>
                    <div class="slick-custom my-5" data-slick='{"slidesToShow": 2, "slidesToScroll": 1}'>
                        <?php wp_archive_experiencias_x_recurso('conferencias', 'gestion-cultural-independiente') ?>
                    </div>
                </div>
            </div>
        </section>

        <!--CAPACITACIONES-->
        <section class="bg-white py-2 py-sm-5">
            <div class="container">
                <h3 class="mb-4"><strong>Capacitaciones</strong></h3>
                <div class="lead">
                   Un espacio de formación virtual permanente para gestores culturales públicos de la provincia de Buenos Aires
                </div>
                <div class="slick x3 my-5">
                    <?php wp_archive_experiencias_x_recurso('capacitaciones', 'gestion-cultural-independiente') ?>
                </div>
            </div>
        </section>

        <!--PARTICIPA-->
        <section class="bg-light py-5 participa" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/territorio/bk-territorio-01.png');">
            <div class="container">
                <div class="row">
                    <h3 class="col-12 mb-4 text-primary"><strong>Participá</strong></h3>
                    <div class="lead col-md-7">
                    ¿Trabajás en cultura de alguno de los 135 municipios de la provincia de Buenos Aires? ¿Querés compartir experiencias de gestión? ¿Generar lazos y aprendizajes con otros territorios? Te estamos esperando. Hacé <a href="/participa" target="_blank">click acá</a>.
                    </div>
                </div>
            </div>
        </section>

        <!--BANNERS-->
        <?php wp_archive_banners('gestion-cultural-independiente');?>


<?php 
get_template_part( 'layouts/footer', 'te-in' ); 
