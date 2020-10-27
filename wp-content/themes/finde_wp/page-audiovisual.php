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

        <!--ENTRADA AL CATALOGO DE MÚSICA-->
        <section id="tienda" class="text-center bg-light pt-5">
            <div class="container text-left">
                <h2 class="extra-grande font-weight-bold pb-3">Tienda  <a href="/diseno/tienda"  class="btn btn-outline-primary"> <i class="fas fa-store"></i> Ver todos</a></h2>
            </div>
            <div class="d-md-flex flex-md-equal w-100 sectores">
                <div class="py-5 px-3 text-center overflow-hidden position-relative sector hvr-grow w-100 " style="background: #ef476f;">
                    <div class="pt-5 pb-4">
                        <h4 style="font-weight: 600 !important;" class="display-5 text-white"><a href="/rubro_di/moda/?post_type=disenio" class="stretched-link text-white">Moda</a></h4>
                    </div>
                </div>
                <div class="py-5 px-3 text-center overflow-hidden position-relative sector hvr-grow w-100" style="background:#f98510;">
                    <div class="pt-5 pb-4">
                        <h4 style="font-weight: 600 !important;" class="display-5 text-white"><a href="/rubro_di/muebles-y-objetos/?post_type=disenio" class="stretched-link text-white">Muebles<br>Objetos<br>Juguetes</a></h4>
                    </div>
                </div>
                <div class="py-5 px-3 text-center overflow-hidden position-relative sector hvr-grow w-100 text-dark" style="background: #05c793;">
                    <div class="pt-5 pb-4">
                        <h4 style="font-weight: 600 !important;" class="display-5 text-white"><a href="/rubro_di/ilustracion-y-piezas-graficas/?post_type=disenio" class="stretched-link  text-white">Ilustración<br>Piezas gráficas</a></h4>
                    </div>
                </div>
                <div class="py-5 px-3 text-center overflow-hidden position-relative sector hvr-grow w-100" style="background: #118ab2;">
                    <div class="pt-5 pb-4">
                        <h4 style="font-weight: 600 !important;" class="display-5 text-white"><a href="/rubro_di/servicios-de-diseno/?post_type=disenio" class="stretched-link text-white">Servicios de diseño</a></h4>
                    </div>
                    <div class="caption">Catálogo</div>
                </div>
                <div class="py-5 px-3 text-center overflow-hidden position-relative sector hvr-grow w-100 text-dark" style="background: #c2c6a9;">
                    <div class="pt-5 pb-4">
                        <h4 style="font-weight: 600 !important;" class="display-5"><a href="/rubro_di/artesanias/?post_type=disenio" class="stretched-link text-dark">Artesanías</a></h4>
                    </div>
                    <div class="caption">Sector invitado</div>
                </div>
            </div>
        </section>

        <!--AGENDA-->
        <section id="agenda-slick" class="bg-light py-5">
            <div class="container">
                <h1 class="mb-4"><strong>Agenda</strong> <a href="/en-vivo" title="Agenda de eventos" class="btn btn-outline-primary"><i class="fas fa-video"></i> En vivo </a></h1>
                
                <?php wp_archive_agenda('audiovisual'); ?>
                <div class="row">
                    <div class="col-15">
                        <div class="border-top mt-3 py-3">
                            <a href="/agenda-diseno"><strong>+ Ver agenda completa</strong></a>
                        </div>
                    </div>
                </div>
            </div><!-- #main -->
        </section>

        <!--CCK-->
        <section class="bg-white cck">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9 full-img">
                        <a href="/diseno/matrices" title="Enlace a la muestra virtual de CCK" class="stretched-link"></a>
                        <video poster="<?php echo get_template_directory_uri(); ?>/assets/img/diseno-cck.jpg" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" >
                            <source src="<?php echo get_template_directory_uri(); ?>/assets/img/cck.mp4" type="video/mp4"></source>
                        </video>
                        <div class="cck-frontend">
                            <div class="titulos">
                                <h4>Matrices: Mujeres del diseño</h4>
                                <p>Recorrido virtual</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row h-100">
                            <div class="col-md-15 full-img h-50 position-relative" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/diseno-desafio.jpg')">
                                <a href="/diseno/desafio" title="Enlace a la convocatoria" class="stretched-link"></a>
                                <div class="titulos">
                                    <h5>Desafío Afiche</h5>
                                    <p>Participá</p>
                                </div>
                            </div>
                            <div class="col-md-15 full-img h-50 position-relative" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/diseno-etnografia.jpg')">
                                <a href="/diseno/etnografia" title="Enlace a la convocatoria" class="stretched-link"></a>
                                <div class="titulos">
                                    <h5>15 cosas de uso diario esenciales en tu cuarentena</h5>
                                    <p>Convocatoria</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--BANNERS-->
        <?php wp_archive_banners('audiosivual');?>


<?php 
get_template_part( 'layouts/footer', 'au' ); 
