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

    <div id="content" class="home-diseno">

        <section id="slide-principal">
            <div id="carouselCaptions" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <?php wp_showSlides_fullbg_portag('diseno') ?>
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
        <section id="tienda" class="opb-music text-center bg-light py-5" style="background: #f5f5f4;">
            <div class="container text-left">
                <h2 class="extra-grande font-weight-bold py-3">Tienda</h2>
            </div>
            <div class="d-md-flex flex-md-equal w-100">
                <div class="py-5 px-3 text-center overflow-hidden position-relative" style="background: #38ccfe;">
                    <a href="/rubro_di/moda/?post_type=disenio" class="stretched-link"></a>
                    <div class="py-5">
                        <h4 class="display-5 font-weight-bold">Moda</h4>
                    </div>
                </div>
                <div class="py-5 px-3 text-center overflow-hidden position-relative" style="background: #f0456e;">
                    <a href="/rubro_di/muebles-y-objetos/?post_type=disenio" class="stretched-link"></a>
                    <div class="py-5">
                        <h4 class="display-5 font-weight-bold">Muebles, objetos y otros</h4>
                    </div>
                </div>
                <div class="py-5 px-3 text-center overflow-hidden position-relative" style="background: #01d79e;">
                    <a href="/rubro_di/servicios-de-diseno/?post_type=disenio" class="stretched-link"></a>
                    <div class="py-5">
                        <h4 class="display-5 font-weight-bold">Servicios de diseño</h4>
                    </div>
                </div>
                <div class="py-5 px-3 text-center overflow-hidden position-relative" style="background: #fefe7a;">
                    <a href="/rubro_di/ilustracion-y-piezas-graficas/?post_type=disenio" class="stretched-link"></a>
                    <div class="py-5">
                        <h4 class="display-5 font-weight-bold">Ilustración y piezas gráficas</h4>
                    </div>
                </div>
                <div class="py-5 px-3 text-center overflow-hidden position-relative" style="background: #a39e8d;">
                    <a href="/rubro_di/artesanias/?post_type=disenio" class="stretched-link"></a>
                    <div class="py-5">
                        <h4 class="display-5 font-weight-bold">Artesanías</h4>
                    </div>
                </div>
            </div>
        </section>

        <!--AGENDA-->
        <section id="agenda-slick" class="bg-light py-5">
            <div class="container">
                <h1 class="mb-4"><strong>Agenda</strong> <a href="/en-vivo" title="Agenda de eventos" class="btn btn-outline-primary"><i class="fas fa-video"></i> En vivo </a></h1>
                
                <?php wp_archive_agenda('diseno'); ?>
                <div class="row">
                    <div class="col-15">
                        <div class="border-top mt-3 py-3">
                            <a href="/agenda-diseno"><strong>+ Ver agenda completa</strong></a>
                        </div>
                    </div>
                </div>
            </div><!-- #main -->
        </section>



        <!--BANNERS-->
        <section class="bg-dark">
            <div class="container-fluid">
                <div class="container banner-slick">


                    <div class="item" style="background:white!important;">
                        <a href="https://instagram.com/laferiadelamusica?igshid=1s7wzxtot7mln" target="_blank" title="Enlace al sitio web de La feria de la Música">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/banners/Banner_Feria_De_La_Musica_Infinito.gif" class="img-fluid d-none d-sm-block" alt="La feria de la Música">
                        </a>
                        <a href="https://instagram.com/laferiadelamusica?igshid=1s7wzxtot7mln" target="_blank" title="Enlace al sitio web de La feria de la Música">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/banners/Banner_Feria_De_La_Musica_Mobile.gif" class="mx-auto img-fluid d-block d-sm-none" alt="La feria de la Música">
                        </a>
                    </div>
                    
                    <div class="item" style="background:white!important;">
                        <a href="http://aatia.com.ar/" target="_blank" title="Enlace al sitio web de AATIA">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/banners/Banner_AATIA.gif" class="img-fluid d-none d-sm-block" alt="AATIA">
                        </a>
                        <a href="http://aatia.com.ar/" target="_blank" title="Enlace al sitio web de AATIA">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/banners/Banner_AATIA_Mobile.gif" class="mx-auto img-fluid d-block d-sm-none" alt="AATIA">
                        </a>
                    </div>

                    <div class="item" style="background:white!important;">
                        <a href="http://www.caimavi.org.ar/" target="_blank" title="Enlace al sitio web de CAIMAVI">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/banners/Banner_Caimavi.png" class="img-fluid d-none d-sm-block" alt="CAIMAVI">
                        </a>
                        <a href="http://www.caimavi.org.ar/" target="_blank" title="Enlace al sitio web de CAIMAVI">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/banners/Banner_Caimavi_Mobile.gif" class="mx-auto img-fluid d-block d-sm-none" alt="CAIMAVI">
                        </a>
                    </div>

                    <div class="item" style="background:white!important;">
                        <a href="https://www.instagram.com/cafimoficial/" target="_blank" title="Enlace al sitio web de CAFIM">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/banners/Banner_Cafim.gif" class="img-fluid d-none d-sm-block" alt="CAFIM">
                        </a>
                        <a href="https://www.instagram.com/cafimoficial/" target="_blank" title="Enlace al sitio web de CAFIM">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/banners/Banner_Cafim_Mobile.gif" class="mx-auto img-fluid d-block d-sm-none" alt="CAFIM">
                        </a>
                    </div>

                    <div class="item" style="background:white!important;">
                        <a href="https://asiar.musica.ar/" target="_blank" title="Enlace al sitio web de ASIAr">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/banners/Banner_ASIAr.png" class="img-fluid d-none d-sm-block" alt="ASIAr">
                        </a>
                        <a href="https://asiar.musica.ar/" target="_blank" title="Enlace al sitio web de ASIAr">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/banners/Banner_ASIAr_Mobile.png" class="mx-auto img-fluid d-block d-sm-none" alt="ASIAr">
                        </a>
                    </div>
                </div>
            </div>
        </section>


<?php 
get_template_part( 'layouts/footer', 'di' ); 
