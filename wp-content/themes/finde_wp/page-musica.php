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

<div id="content" class="home-music">
    <section id="slide-principal">
        <div id="carouselCaptions" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php wp_showSlides_fullbg_portag('musica') ?>
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

    <!--ENTRADA AL CATALOGO DE MÚSICA-->
    <section id="tienda" class="text-center bg-light pt-5">
        <div class="container text-left">
            <h2 class="font-weight-bold pb-3">Tienda  <a href="/musica/tienda"  class="btn btn-outline-primary"> <i class="fas fa-store"></i> Ver todos</a></h2>
        </div>
        <div class="d-md-flex flex-md-equal w-100 sectores">
            <div class="py-5 px-3 text-center overflow-hidden position-relative sector hvr-grow w-100 " style="background: #38ccfe;">
                <div class="pt-4 pb-4">
                    <h4 style="font-weight: 600 !important;" class="display-5 text-dark"><a href="/rubro_mu/instrumentos-musicales/?post_type=music" class="stretched-link text-dark">Instrumentos</a></h4>
                </div>
            </div>
            <div class="py-5 px-3 text-center overflow-hidden position-relative sector hvr-grow w-100" style="background:#fefe7a;">
                <div class="pt-4 pb-4">
                    <h4 style="font-weight: 600 !important;" class="display-5 text-dark"><a href="/rubro_mu/estudios/?post_type=music" class="stretched-link text-dark">Estudios</a></h4>
                </div>
            </div>
            <div class="py-5 px-3 text-center overflow-hidden position-relative sector hvr-grow w-100 text-dark" style="background: #01d79e;">
                <div class="pt-4 pb-4">
                    <h4 style="font-weight: 600 !important;" class="display-5 text-dark"><a href="/rubro_mu/audio-profesional/?post_type=music" class="stretched-link text-dark">Audio</a></h4>
                </div>
            </div>
            <div class="py-5 px-3 text-center overflow-hidden position-relative sector hvr-grow w-100" style="background: #f0456e;">
                <div class="pt-4 pb-4">
                    <h4 style="font-weight: 600 !important;" class="display-5 text-dark"><a href="/rubro_mu/musica/?post_type=music" class="stretched-link text-dark">Música</a></h4>
                </div>
                <!--<div class="caption">Catálogo</div>-->
            </div>
        </div>
    </section>

    <!--VIDRIERA-->
    <section id="vidriera-slick" class="py-5" style="background: #f6f5f3;">
        <div class="container">
            <h2 class="mb-4"><strong>Ofertas Destacadas</strong> <a href="/productosmusica" title="Ofertas Destacadas" class="btn btn-outline-primary">Ver todos los productos</a></h2>
        </div>
        <div class="container-fluid pb-3">
            <div class="slick vidriera">
                <?php wp_musica_vidriera(-1,''); ?>
            </div>
        </div><!-- #main -->
        <div class="container">
            <div class="row">
                <div class="col-15">
                    <div class="mt-3 py-3">
                        <a href="/productos-musica"><strong>+ Ver todos los productos</strong></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--CONTENIDO - EX AGENDA-->
    <section id="contenido-slick" class="bg-light py-5">
        <div class="container">
            <h2 class="mb-4"><strong>Contenidos: Experiencias de gestión</strong></h2>
            
            <?php wp_archive_contenido('musica','experiencias-de-gestion'); ?>
        </div><!-- #main -->

        <div class="container">
            <h2 class="mb-4"><strong>Contenidos: Ideas para el sector</strong></h2>
            
            <?php wp_archive_contenido('musica','ideas-para-el-sector'); ?>
        </div><!-- #main -->

        <div class="container">
            <h2 class="mb-4"><strong>Contenidos: Identidad y producción bonaerense</strong></h2>
            
            <?php wp_archive_contenido('musica','identidad-y-produccion-bonaerense'); ?>
            <div class="row">
                <div class="col-15">
                    <div class="border-top mt-3 py-3">
                        <a href="/agenda-musica"><strong>+ Ver todos los contenidos</strong></a>
                    </div>
                </div>
            </div>
        </div><!-- #main -->
    </section>

    <!--BANNERS-->
    <section class="bg-white">
        <?php wp_archive_banners('musica');?>
    </section> 

    <!--Partner destacado-->
    <section class="bg-light pb-5" style="background:#e2e2e2;">
        <div class="container">
            <div class="row mt-md-5">
                <div class="col-md-6">
                    <div class="wrap pt-5 pr-sm-5">
                        <h5>Partner destacado</h5>
                        <h2>Lorem ipsum</h2>
                        <p class="mt-5">Lorem ipsum...</p>
                        <a href="#" class="btn btn-outline-primary badge-pill px-5 my-3">Ver más</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://player.vimeo.com/video/348240535" class="embed-responsive-item" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen style="border:solid 3px #FFF; border-radius:3px;padding:1px"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php 
get_template_part( 'layouts/footer', 'mu' ); 
