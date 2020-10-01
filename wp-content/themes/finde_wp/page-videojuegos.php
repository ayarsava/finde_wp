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
        <?php the_content();?>

        <!--BP
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
        </section>-->


        <!--CATALOGO-->
        <section id="catalogo" class="bg-white py-5">
            <div class="container">
                <h1 class="mb-5"><strong>Juegos</strong> <a href="/catalogo" title="Catalogo de videojuegos" class="btn btn-outline-primary"><i class="fas fa-gamepad"></i> Ver todos los juegos </a></h1>
                
                
                    <?php wp_archive_catalogovj_tiny('rapidos-y-furiosos') ?>
                    <?php wp_archive_catalogovj_tiny('concentracion-y-destreza') ?>
                    <?php wp_archive_catalogovj_tiny('grandes-aventuras') ?>
                
                
                <div class="row">
                    <div class="col-15">
                        <div class="border-top mt-3 py-3">
                            <a href="/catalogo" title="Catalogo de videojuegos" ><strong>+ Ver todos los juegos</strong></a>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!--GJ-->
        <section class="bg-white">
            <div class="container-fluid">
                <div class="container">
                    <div class="row pb-4">
                        <div class="col">
                            <a href="#" target="_blank" title="Enlace al sitio web del Banco Provincia">
                                <img src="https://picsum.photos/seed/picsum/1120/157" class="img-fluid d-none d-sm-block" alt="Banco Provincia">
                                <img src="https://picsum.photos/seed/picsum/354/120" class="mx-auto img-fluid d-block d-sm-none" alt="Banco Provincia">
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
                            <a href="/agenda-videojuegos"><strong>+ Ver agenda completa</strong></a>
                        </div>
                    </div>
                </div>
            </div><!-- #main -->
        </section>

        <!--LB-->
        <section class="mx-auto d-none d-lg-block py-5 text-white" style="background:#222;">
            <div class="container mb-5">
                <div class="row">
                    <h1 class="col-12 mb-4"><strong>Titulo del juego</strong></h1>
                    <p class="col-md-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                    <iframe src="//emlabollita.com/finde/flappy-bird/" width="100%" height="620px" frameborder="0" align="center" scrolling="no"></iframe>
                </div>
            </div>
        </section>



<?php get_template_part( 'layouts/footer', 'vj' ); 