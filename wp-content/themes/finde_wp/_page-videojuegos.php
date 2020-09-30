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

        <!--JUEGO DESTACADO-->
        <section class="py-5 bg-light">
            <div class="container">
                <div id="juego-destacado" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php wp_archive_destacadovj() ?>
                    </div>
                    <!-- Controls -->
                    <a class="carousel-control-prev" href="#juego-destacado" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#juego-destacado" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>  
        </section>

        <!--CATALOGO-->
        <section id="catalogo" class="bg-white py-5">
            <div class="container">
                <h1 class="mb-4"><strong>Juegos</strong></h1>
                <!--
                <ul id="form-ui" class="list-inline">
                    <div class="row">
                        <div class="col-md-3">
                            <h5>Categorías</h5>
                        </div>
                        <ul class="col-md-12">
                            <?php 
                            $rubros = get_terms('rubro');
                            if( $rubros ){ foreach ($rubros as $cat ) {?>
                            <li class="list-inline-item <?php echo $cat->slug; ?>"><label><input type="checkbox" value="<?php echo $cat->slug; ?>" class="category" autocomplete="off"> <?php echo $cat->name; ?></label></li>
                            <?php  } }?>
                        </ul>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <h5>Precio</h5>
                        </div>
                        <ul class="col-md-12">
                            <?php 
                            $descuento = get_terms('descuento');
                            if( $descuento ){ foreach ($descuento as $cat ) {?>
                            <li class="list-inline-item"><label><input type="checkbox" value="<?php echo $cat->slug; ?>" class="discount" autocomplete="off"> <?php echo $cat->name; ?></label></li>
                            <?php  } }?>
                        </ul>
                    </div>
                </ul>
                <div id="load" class="lds-wrap">Estamos preparando el catálogo<br><div class="lds-hourglass"></div></div>-->
                
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

        <!--AGENDA-->
        <section id="agenda-slick" class="bg-light py-5">
            <div class="container">
                <h1 class="mb-4"><strong>Agenda</strong> <a href="/en-vivo" title="Agenda de eventos" class="btn btn-outline-primary"><i class="fas fa-video"></i> En vivo </a></h1>
                <!--<div id="external-buttons">
                    <a data-target="08-10">08-10</a>
                    <a data-target="09-10">09-10</a>
                    <a data-target="10-10">10-10</a>
                    <a data-target="11-10">11-10</a>
                </div>-->
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



<?php get_template_part( 'layouts/footer', 'vj' ); 