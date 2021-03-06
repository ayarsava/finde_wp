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

get_template_part( 'layouts/header', 'te-pu' ); 
?>

    <div id="content" class="home-gestion-cultural-publica">

        <section id="slide-principal">
            <div id="carouselCaptions" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <?php wp_showSlides_fullbg_portag('gestion-cultural-publica') ?>
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
        <section class="bg-light py-5" id="cultura-en-territorio">
            <div class="container">
                <h3><strong>Cultura en territorio</strong></h3>
                <p class="lead">Finde Cultura en Territorio es un espacio de encuentro entre los 135 municipios bonaerenses, para analizar y compartir experiencias de gestión cultural pública. En esta primera edición tendremos presentaciones y análisis de políticas públicas municipales, conferencias y talleres. Una herramienta para pensar la cultura pública en territorio desde los territorios y junto a invitadxs que son referentes de la gestión en otras provincias.</p>
                <div class="row mt-5" style="background:#e2e2e2;">
                    <div class="col-md-9 py-3">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Zlx9L0jzy3g?rel=0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="wrap pt-4 py-5 px-sm-5">
                            <h4>Apertura</h4>
                            <p>Augusto Costa, Ministro de Producción, Ciencia e Innovación Tecnológica de la provincia de Buenos Aires, le da la bienvenida a las provincias invitadas a participar de de Finde Cultura en Territorio. Una charla sobre gestionar cultura en territorios diversos junto a Peki Torres (San Juan), Jorge Llonch (Santa Fe), Mariela Quirós (Chaco), Sabrina Sansone(Salta) y Lucrecia Cardoso (Ministerio de Cultura de la Nación).</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--ATLAS DE EXPERIENCIAS-->
        <section id="atlas-de-experiencias" class="bg-white py-2 py-sm-5">
            <div class="container">
                <h3><strong>Atlas de experiencias</strong></h3>
                <div class="lead">
                Un inventario de políticas y eventos culturales públicos generados por los municipios bonaerenses. Un espacio para compartir experiencias de gestión, construir vínculos y aprender de nuestros pares: Cómo crean y gestionan acciones que transforman sus comunidades y activan el desarrollo.
                </div>
                
                <div class="slick x3 mt-5">
                    <?php wp_archive_experiencias_x_recurso('atlas-de-experiencias', 'gestion-cultural-publica') ?>
                </div>
            </div>
        </section>

        <!--CONFERENCIAS-->
        <section id="conferencias" class="bg-light py-2 py-sm-5">
            <div class="container">
                <h3><strong>Conferencias</strong></h3>
                <div class="lead">
                    Gestores culturales públicos de otras provincias comparten casos de gestión que produjeron un impacto en sus territorios.
                </div>
                <div class="slick-custom mt-5" data-slick='{"slidesToShow": 6, "slidesToScroll": 1}'>   
                    <div class="text-center">
                        <div class="profile-face mx-auto mb-3" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/territorio/sabrina-sansone.jpg');"></div>
                        <h5>Sabrina Sansone</h5>
                        <p class="h6">Salta</p>
                    </div>
                    <div class="text-center">
                        <div class="profile-face mx-auto mb-3" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/territorio/peki-torres.jpg');"></div>
                        <h5>Peki Torres</h5>
                        <p class="h6">San Juan</p>
                    </div>
                    <div class="text-center">
                        <div class="profile-face mx-auto mb-3" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/territorio/felix-fiore-sta-fe.jpg');"></div>
                        <h5>Felix Fiore</h5>
                        <p class="h6">Santa Fé</p>
                    </div>
                    <div class="text-center">
                        <div class="profile-face mx-auto mb-3" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/territorio/carolina-sampor.jpg');"></div>
                        <h5>Carolina Sampor</h5>
                        <p class="h6">Chaco</p>
                    </div>
                </div>
            </div>
        
            <div class="container-fluid bg-light py-2">
                <div class="container">
                    <div class="slick-custom mt-5" data-slick='{"slidesToShow": 2, "slidesToScroll": 1}'>
                        <?php wp_archive_experiencias_x_recurso('conferencias', 'gestion-cultural-publica') ?>
                    </div>
                </div>
            </div>
        </section>

        <!--CAPACITACIONES-->
        <section id="capacitaciones" class="bg-white py-2 py-sm-5">
            <div class="container">
                <h3><strong>Capacitaciones</strong></h3>
                <div class="lead">
                Un espacio de formación virtual permanente para gestores culturales públicos de la provincia de Buenos Aires.
                </div>
                <div class="slick x3 mt-5">
                    <?php wp_archive_experiencias_x_recurso('capacitaciones', 'gestion-cultural-publica') ?>
                </div>
            </div>
        </section>

        <!--PARTICIPA-->
        <section id="participa" class="bg-light py-5 participa" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/territorio/bk-territorio-01.png');">
            <div class="container">
                <div class="row">
                    <h3 class="col-12 mb-4 text-primary"><strong>Participá</strong></h3>
                    <div class="lead col-md-7">
                    ¿Trabajás en cultura en alguno de los 135 municipios de la provincia de Buenos Aires? ¿Querés compartir experiencias de gestión? ¿Generar lazos y aprendizajes con otros territorios? Te estamos esperando. Hacé <a href="https://docs.google.com/forms/d/e/1FAIpQLScKM27DelTXnmeA7lzORDxzrDEo8ejtLCANYAXLZAVPEC9bBw/viewform" target="_blank">click acá</a>.
                    </div>
                </div>
            </div>
        </section>

        <!--BANNERS-->
        <?php wp_archive_banners('gestion-cultural-publica');?>


<?php 
get_template_part( 'layouts/footer', 'te-pu' ); 
