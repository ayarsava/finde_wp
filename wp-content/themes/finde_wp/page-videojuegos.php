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

        <!--BP-->
        <section class="bg-white pt-5">
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

        <!--AGENDA-->
        <section id="agenda" class="bg-light py-5">
            <div class="container">
                <h1 class="mb-4"><strong>Agenda</strong> <a href="/en-vivo" title="Agenda de eventos" class="btn btn-outline-primary"><i class="fas fa-video"></i> En vivo </a></h1>
                <?php wp_archive_agenda('videojuegos'); ?>
                <div class="row">
                    <div class="col-15">
                        <div class="border-top mt-3 pt-3">
                            <a href="/agenda-videojuegos"><strong>+ Ver agenda completa</strong></a>
                        </div>
                    </div>
                </div>
            </div><!-- #main -->
        </section>

        <!--GJ-->
        <section class="bg-white py-5">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <a href="/gamejam" title="Game Jam">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-game-jam-desktop.gif" class="img-fluid d-none d-sm-block" alt="Game Jam">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-game-jam-mobile.gif" class="mx-auto img-fluid d-block d-sm-none" alt="Game Jam">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--LB-->
        <?php
        $date_now = date("Y-m-d"); // this format is string comparable

        if ($date_now == '2020-10-10') {
            echo '<section id="game-time" class="d-none mx-auto pt-5 pb-4 text-white" style="background:#222;">
                <div class="container">
                    <div class="row">
                        <div class="col-15 text-center gamepad my-3 embed-responsive embed-responsive-16by9">
                            <iframe src="https://emlabollita.com/space/" class="embed-responsive-item"  frameborder="0" scrolling="no" align="center"></iframe>
                        </div>
                    </div>
                </div>
            </section>';
        } else if ($date_now == '2020-10-11') {
            echo '<section id="game-time" class="d-none mx-auto pt-5 pb-4 text-white" style="background:#222;">
                <div class="container">
                    <div class="row">
                        <div class="col-15 text-center gamepad my-3 embed-responsive embed-responsive-16by9">
                            <iframe src="https://emlabollita.com/flappy/" class="embed-responsive-item"  frameborder="0" scrolling="no" align="center"></iframe>
                        </div>
                    </div>
                </div>
            </section>';
        } else {
            echo '<section id="game-time" class="d-none mx-auto pt-5 pb-4 text-white" style="background:#222;">
                <div class="container">
                    <div class="row">
                        <div class="col-15 text-center gamepad my-3 embed-responsive embed-responsive-16by9">
                            <iframe src="https://emlabollita.com/space/" class="embed-responsive-item"  frameborder="0" scrolling="no" align="center"></iframe>
                        </div>
                    </div>
                </div>
            </section>';
        }
        ?>
        



<?php get_template_part( 'layouts/footer', 'vj' ); 