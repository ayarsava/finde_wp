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

get_template_part( 'layouts/header', 'vj' );
?>

    <div id="content" class="home-vj">
        <section id="slide-principal">
            <?php get_template_part( 'template-parts/content', 'slide' ); ?>
        </section>


        <!--OPB-->
        <section id="finde-vj">
            <div class="container-fluid py-5 bg-primary">
                <div class="container">
                    <div class="col-md-8 mx-auto text-center text-white py-5">
                        <div class="h4">#FINDEJUGANDO</div>
                        <div class="h1 pb-3"><strong>Un finde para jugar y apoyar a los creadores locales</strong></div>
                        <div class="lead">FINDE te propone un fin de semana dedicado a jugar, aprender y descubrir nuevas experiencias digitales. Una iniciativa para que puedas comprar, regalar, descargar juegos y apoyar a los creadores durante la cuarentena.</div>
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


        <!--CATALOGO-->
        <section id="catalogo" class="bg-white py-5">
            <div class="container">
                <h1 class="mb-4"><strong>Juegos</strong></h1>
                
                <h3>Noches de terror</h3>
                <div class="slick ntflx mb-5">
                    <?php wp_archive_catalogovj_tiny('noches-de-terror') ?>
                </div>

                <h3>Poder femenino</h3>
                <div class="slick ntflx mb-5">
                    
                    <?php wp_archive_catalogovj_tiny('poder-femenino') ?>
                </div>

                <h3>Apocalipsis</h3>
                <div class="slick ntflx mb-5">
                    
                    <?php wp_archive_catalogovj_tiny('apocalipsis') ?>
                </div>
            </div>
        </section>

        <!--GJ-->
        <section class="bg-white">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <a href="#" target="_blank" title="Enlace al sitio web del Banco Provincia">
                            Banner GameJam
                                <!--<img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-banco-provincia.gif" class="img-fluid d-none d-sm-block" alt="Banco Provincia">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-banco-provincia_m.gif" class="mx-auto img-fluid d-block d-sm-none" alt="Banco Provincia">-->
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--AGENDA-->
        <section id="agenda-slick" class="bg-light py-5">
            <div class="container">
                <h1 class="mb-4"><strong>Agenda</strong> <a href="/en-vivo" title="Agenda de eventos" class="btn btn-outline-primary"><i class="fas fa-video"></i> En vivo </a></h1>
                <?php wp_archive_agenda('videojuegos'); ?>
                <div class="row">
                    <div class="col-15">
                        <div class="border-top mt-3 py-3">
                            <a href="/agenda-musica"><strong>+ Ver agenda completa</strong></a>
                        </div>
                    </div>
                </div>
            </div><!-- #main -->
        </section>

        <!--LB-->
        <section class="mx-auto d-none d-lg-block pb-4">
            <div class="container-fluid text-center">
                <iframe src="http://emlabollita.com/finde/flappy-bird/" width="100%" height="620px" frameborder="0" align="center" scrolling="no"></iframe>
            </div>
        </section>



<?php get_template_part( 'layouts/footer', 'vj' ); 