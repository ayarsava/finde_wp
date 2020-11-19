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

get_template_part( 'layouts/header', 'ed' ); 
?>

    <div id="content" class="editorial">
        <section id="slide-principal">
            <div id="carouselCaptions" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <?php wp_showSlides_fullbg_portag('editorial') ?>
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
        <section id="finde-vj">
            <div class="container-fluid py-5 bg-primary">
                <div class="container">
                    <div class="col-md-8 mx-auto text-center text-white py-5">
                        <div class="h4">#FINDELEYENDO</div>
                        <div class="h1 pb-3"><strong>Un finde para leer y apoyar a la cultura local</strong></div>
                        <div class="lead">Finde te propone un fin de semana dedicado a la lectura, a descubrir y compartir el placer que desatan los libros. Una iniciativa para comprar, regalar, recomendar y descargar libros, y apoyar a los creadores locales.</div>
                    </div>
                </div>
            </div>
        </section>

        <!--BP-->
        <section class="bg-white">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <a href="https://www.bancoprovincia.com.ar/cuentadni/index?url=cdniIndividuos" target="_blank" title="Enlace al sitio web del Banco Provincia">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-banco-provincia.gif" class="img-fluid d-none d-sm-block" alt="Banco Provincia">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-banco-provincia_m.gif" class="mx-auto img-fluid d-block d-sm-none" alt="Banco Provincia">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--ENTRADA AL CATALOGO DE EDITORIALES-->
        <section class="opb-editoriales">
            <div class="opb-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-10 col-sm-15 pt-lg-5 p-3 cta-info">
                            <div class="">
                                <h1 class="extra-grande mt-4">Entrá a la oferta de editoriales independientes que participan en Finde</h1>
                                <div class="lead my-3">Apoyá tu circuito cultural local.</div>
                                <a href="/editoriales" class="hvr-icon-forward"><strong>Conocé las editoriales</strong> <i class="fas fa-angle-double-right hvr-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cta-galeria">
                    <div class="slick-fade">
                        <a href="#"><img src="/wp-content/themes/finde_wp/assets/img/galerias/estudio-mafia3.jpg"></a>
                        <a href="#"><img src="/wp-content/themes/finde_wp/assets/img/galerias/La-Cebra-1.jpg"></a>
                        <a href="#"><img src="/wp-content/themes/finde_wp/assets/img/galerias/Magicas-Naranjas-1.jpg"></a>
                        <a href="#"><img src="/wp-content/themes/finde_wp/assets/img/galerias/estudio-mafia4.jpg"></a>
                        <a href="#"><img src="/wp-content/themes/finde_wp/assets/img/galerias/Monada.jpg"></a>
                        <a href="#"><img src="/wp-content/themes/finde_wp/assets/img/galerias/Club-Hem.jpg"></a>
                        <a href="#"><img src="/wp-content/themes/finde_wp/assets/img/galerias/Vox.jpg"></a>
                        <a href="#"><img src="/wp-content/themes/finde_wp/assets/img/galerias/UMC1.jpg"></a>
                        <a href="#"><img src="/wp-content/themes/finde_wp/assets/img/galerias/Loco-rabia-3.jpg"></a>
                        <a href="#"><img src="/wp-content/themes/finde_wp/assets/img/galerias/Dagas2.jpg"></a>
                        <a href="#"><img src="/wp-content/themes/finde_wp/assets/img/galerias/Mil-Botellas.jpg"></a>
                        <a href="#"><img src="/wp-content/themes/finde_wp/assets/img/galerias/UMC3.jpg"></a>
                    </div>
                </div>
                
            </div>
        </section>

        <!--VIDRIERA-->
        <section id="vidriera-slick" class="py-5" style="background: #f6f5f3;">
            <div class="container">
                <h1 class="mb-4"><strong>Vidriera</strong> <a href="/libros" title="Vidriera" class="btn btn-outline-primary">Ver todos</a></h1>
            </div>
            <div class="container-fluid pb-3">
                <div class="slick vidriera">
                    <?php wp_editorial_vidriera(-1,''); ?>
                </div>
            </div><!-- #main -->
            <div class="container">
                <div class="row">
                    <div class="col-15">
                        <div class="mt-3 py-3">
                            <a href="/libros"><strong>+ Ver todos los libros</strong></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--AGENDA-->
        <section id="agenda-slick" class="bg-light py-5">
            <div class="container">
                <h1 class="mb-4"><strong>Agenda</strong></h1>
                <?php wp_archive_agenda('editorial'); ?>
                <div class="row">
                    <div class="col-15">
                        <div class="border-top mt-3 py-3">
                            <a href="/agenda-editorial"><strong>+ Ver agenda completa</strong></a>
                        </div>
                    </div>
                </div>
            </div><!-- #main -->
        </section>

        <!--BLOQUES-->
        <section id="proyecciones" class="cck" style="background:#000;">
            <div class="container-fluid">
                <div class="row h-100">
                    <div class="col-md-9 full-img position-relative" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/editorial-encuesta.jpg'); min-height:500px;">
                        <a href="https://finde.gba.gob.ar/1era-encuesta-de-editoriales-independientes-bonaerenses/" title="Editorial | 1era Encuesta de Editoriales Bonaerenses" class="stretched-link"></a>
                        <div class="titulos">
                            <h4>1era Encuesta de Editoriales Bonaerenses</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row h-100">
                            <div class="col-md-15 full-img h-50 position-relative" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/editorial-duatlon.jpg')">
                                <a href="https://finde.gba.gob.ar/duatlon-poetico/" title="Editorial | Desafío Duatlón Poético" class="stretched-link"></a>
                                <div class="titulos">
                                    <h5>Desafío Duatlón Poético</h5>
                                    <p>¡Sumate!</p>
                                </div>
                            </div>
                            <div class="col-md-15 full-img h-50 position-relative" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/editorial-memes.jpg')">
                                <a href="https://finde.gba.gob.ar/torneo-de-memes-literarios/" title="Editorial | Concurso Memes Literarios" class="stretched-link"></a>
                                <div class="titulos">
                                    <h5>Concurso Memes Literarios</h5>
                                    <p>Participá</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--SPOTIFY-->
        <section class="bg-white py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe src="https://www.youtube.com/embed/videoseries?list=PLTzRO-Kx1pr2yyC6EFaemth3dw-yUOqDk" class="embed-responsive-item" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen style="border:solid 3px #FFF; border-radius:3px;padding:1px"></iframe>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="wrap pt-5 pr-sm-5">
                            <h2 class="font-weight-bold">Lista de recomendaciones</h2>
                            <p class="mt-5">Editorxs y escritorxs recomiendan libros bonaerenses y cuentan sus proyectos en formato breve. </p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        <!--RECOMENDACIONES-->
        <section class="bg-light py-5" style="background:#e2e2e2;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="wrap pt-5 pr-sm-5">
                            <h2 class="font-weight-bold">Podcast</h2>
                            <p class="mt-5">Te presentamos nuestro podcast sobre el oficio de hacer libros. En este primer episodio visitamos a Nico Biebel de editorial Econautas, en San Miguel del Monte, provincia de Buenos Aires</p>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe src="https://www.youtube.com/embed/zi2Yap9VJ6A" class="embed-responsive-item" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen style="border:solid 3px #FFF; border-radius:3px;padding:1px"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--ENTRADA AL CATALOGO DE LIBRERÍAS-->
        <section class="bg-white">
            <div class="position-relative" style="min-height: 400px;">
                <div class="cta-librerias d-none d-md-block">
                    <img src="/wp-content/themes/finde_wp/assets/img/galerias/librerias.jpg">
                </div>
                <div class="container">
                    <div class="col-lg-10 col-md-9 ml-auto p-lg-5 p-3 cta-info">
                        <div class="ml-lg-5">
                            <h2 class="font-weight-bold mt-5 pt-5">Después de Finde, seguí comprando los libros de las editoriales independientes en librerías de la Provincia</h2>
                            <div class="lead my-3">Apoyá tu circuito cultural local.</div>
                            <a href="/librerias" class="hvr-icon-forward"><strong>Conocé las librerías</strong> <i class="fas fa-angle-double-right hvr-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--BANNERS-->
        <?php wp_archive_banners('editorial');?>



<?php 
get_template_part( 'layouts/footer', 'ed' ); 
