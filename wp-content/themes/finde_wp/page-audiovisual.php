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

get_template_part( 'layouts/header', 'au' ); 
?>

    <div id="content" class="home-audiovisual">

        <section id="slide-principal">
            <div id="carouselCaptions" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <?php wp_showSlides_fullbg_portag('audiovisual') ?>
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

        <!--BP-->
        <section class="bg-white py-5">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <a href="https://www.bancoprovincia.com.ar/cuentadni/index?url=cdniIndividuos" target="_blank" title="Enlace al sitio web del Banco Provincia">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-bp-large.gif" class="img-fluid d-none d-sm-block" alt="Banco Provincia">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-bp-small.gif" class="mx-auto img-fluid d-block d-sm-none" alt="Banco Provincia">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--CONVERSACIONES-->
        <section id="conversaciones" class="bg-light py-5">
            <div class="container text-left">
                <h2 class="extra-grande font-weight-bold">Conversaciones</h2>
                <div class="lead">Encuentros de creadorxs audiovisuales</div>
            </div>
            <div class="mt-5">
                <?php wp_archive_conversaciones('audiovisual') ?>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-15">
                        <div class="mt-3 py-3">
                            <a href="/agenda-audiovisual"><strong>+ Ver agenda de conversaciones     completa</strong></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--PROYECCIONES-->
        <section class="cck pt-5" style="background:#000;">
            <div class="container text-left" style="color:#F1F1F1;">
                <h2 class="extra-grande font-weight-bold">Proyecciones</h2>
                <div class="lead mb-4">Series interactivas, 360°, películas, cortos y canales de YouTube</div>
            </div>
            <div class="container-fluid">
                <div class="row h-100">
                    <div class="col-md-9 full-img position-relative" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-cine-elpoetaenlaluna.jpg'); min-height:500px;">
                        <a href="/catalogo-audiovisual/seccion/cine/" title="Cine. Selección curada por festivales" class="stretched-link"></a>
                        <div class="titulos">
                            <h4>Cine</h4>
                            <p>Selección curada por festivales</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row h-100">
                            <div class="col-md-15 full-img h-50 position-relative" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-series.jpg')">
                                <a href="/catalogo-audiovisual/seccion/series/" title="Series. Originales, interactivas , inmersivas" class="stretched-link"></a>
                                <div class="titulos">
                                    <h5>Series</h5>
                                    <p>Originales, interactivas , inmersivas</p>
                                </div>
                            </div>
                            <div class="col-md-15 full-img h-50 position-relative" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-youtube.jpg')">
                                <a href="/catalogo-audiovisual/seccion/youtubers/" title="Youtube. Nuevas narrativas" class="stretched-link"></a>
                                <div class="titulos">
                                    <h5>Youtube</h5>
                                    <p>Nuevas narrativas</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--CARTELERA-->
        <section id="cartelera-slick" class="bg-white py-5">
            <div class="container">
                <h1 class="mb-4"><strong>Cartelera</strong></h1>
            </div>
            <div class="container-fluid">
                <?php wp_archive_cartelera_destacada(); ?>
            </div><!-- #main -->
        </section>

        <!--ESTRENO EXCLUSIVO-->
        <section class="bg-light pb-5" style="background:#e2e2e2;">
            <div class="container">
                <div class="row mt-md-5">
                    <div class="col-md-6">
                        <div class="wrap pt-5 pr-sm-5">
                            <h5>ESTRENO EXCLUSIVO</h5>
                            <h2>PUNTO DE QUIEBRE</h2>
                            <p class="mt-5">En exclusiva, no te pierdas el estreno de la primera serie 360 de Argentina y la charla con su director, etc.</p>
                            <a href="/catalogo-audiovisual/punto-de-quiebre" class="btn btn-outline-primary badge-pill px-5 my-3">Ver  <i class="fas fa-play"></i></a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/xumjLk5xMas?rel=0" allowfullscreen style="border:solid 3px #FFF; border-radius:3px;padding:1px"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--ESTRENO DIGITAL-->
        <section class="py-5 bg-primary text-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/OX1ZXj2Qqt0?rel=0" allowfullscreen style="border:solid 3px #FFF; border-radius:3px;padding:1px"></iframe>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="wrap pt-5 px-sm-5">
                            <h5>ESTRENO DIGITAL</h5>
                            <h2>LAVA</h2>
                            <p class="mt-5">En exclusiva, no te pierdas el estreno de Lava, de Ayar Blasco y la charla con su director, etc.</p>
                            <a href="/catalogo-audiovisual/lava" class="btn btn-outline-light badge-pill px-5 my-3">Ver  <i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--PLAYLIST-->
        <section class="bg-light py-5" style="background:#e2e2e2;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="wrap pr-sm-5">
                            <h2>Música para ver</h2>
                            <p class="mt-5">Un continuado de videoclips que te hacen viajar por los paisajes, la mística y los paisajes bonaerenses. Desde El Mató a Calle 13, pasando por Conociendo a Rusia o Louta, entre otros.</p>
                            <a href="/catalogo-audiovisual/videoclips/" class="btn btn-outline-primary badge-pill px-5 my-3">Ver más</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/videoseries?list=PLY8H3O1gjtpOohfu5yLMxdSMP3C6zK6T4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="border:solid 3px #f2f2f2; border-radius:3px;padding:1px"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--BANNERS-->
        <?php wp_archive_banners('audiovisual');?>


<?php 
get_template_part( 'layouts/footer', 'au' ); 
