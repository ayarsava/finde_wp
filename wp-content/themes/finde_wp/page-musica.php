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

    <div id="content" class="music">
        <section id="slide-principal">
            <div id="carouselCaptions" class="carousel slide" data-ride="carousel">

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <?php wp_showSlides_fullbg_musica() ?>
              </div>

              <!-- Controls -->
              <!-- Carousel nav -->
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
                        <div class="h4">#FINDEAPURAMÚSICA</div>
                        <div class="h1 pb-3"><strong>Un finde para escuchar música y apoyar a la cultura local</strong></div>
                        <div class="lead">Finde te propone un fin de semana dedicado a la música, a descubrir y compartir el placer que desatan los discos. Una iniciativa para comprar, regalar, recomendar y descargar música, y apoyar a los creadores locales.</div>
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


        <!--ENTRADA AL CATALOGO DE MÚSICA-->
        <section id="categorias" class="opb-music text-center">
            <div class="d-md-flex flex-md-equal w-100">
                <div class="py-3 px-5 pt-md-5 px-md-5 text-center overflow-hidden position-relative" style="background: #38ccfe;">
                    <a href="/rubro_mu/instrumentos-musicales/?post_type=music" class="stretched-link"></a>
                    <div class="mx-lg-5 mx-sm-2 px-lg-5 px-md-3 px-sm-2 py-4">
                        <img src="/wp-content/themes/finde_wp/assets/img/icono-instrumentos.png" class="img-fluid px-5" style="max-height:250px;">
                        <h2 class="display-5 font-weight-bold">Instrumentos</h2>
                        <p class="lead">Guitarras, bajos, baterías, teclados, bombos, ukeleles, etc.</p>
                    </div>
                </div>
                <div class="py-3 px-5 pt-md-5 px-md-5 text-center overflow-hidden position-relative" style="background: #f0456e;">
                    <a href="/rubro_mu/musica/?post_type=music" class="stretched-link"></a>
                    <div class="mx-lg-5 mx-sm-2 px-lg-5 px-md-3 px-sm-2 py-4">
                        <img src="/wp-content/themes/finde_wp/assets/img/icono-musica.png" class="img-fluid px-5 pb-4" style="width:250px;">
                        <h2 class="display-5 font-weight-bold">Música</h2>
                        <p class="lead">Vinilos, Digital, CDs, etc.</p>
                    </div>
                </div>
            </div>
            <div class="d-md-flex flex-md-equal w-100">
                <div class="py-3 px-5 pt-md-5 px-md-5 text-center overflow-hidden position-relative" style="background: #01d79e;">
                    <a href="/rubro_mu/audio-profesional/?post_type=music" class="stretched-link"></a>
                    <div class="mx-lg-5 mx-sm-2 px-lg-5 px-md-3 px-sm-2 py-4">
                        <img src="/wp-content/themes/finde_wp/assets/img/icono-audio.png" class="img-fluid px-5 pb-4" style="width:250px;">
                        <h2 class="display-5 font-weight-bold">Audio</h2>
                        <p class="lead">Micrófonos, Auriculares, Parlantes, Consolas, Bandejas, etc.</p>
                    </div>
                </div>
                <div class="py-3 px-5 pt-md-5 px-md-5 text-center overflow-hidden position-relative" style="background: #fefe7a;">
                    <a href="/rubro_mu/estudios/?post_type=music" class="stretched-link"></a>
                    <div class="mx-lg-5 mx-sm-2 px-lg-5 px-md-3 px-sm-2 py-4">
                        <img src="/wp-content/themes/finde_wp/assets/img/icono-estudios.png" class="img-fluid px-5 pb-4" style="width:250px;">
                        <h2 class="display-5 font-weight-bold">Estudios</h2>
                        <p class="lead">Mezcla, Grabación, Mastering, etc.</p>
                    </div>
                </div>
            </div>
            <div class="d-md-flex flex-md-equal w-100">
                <div class="py-3 px-5 pt-md-5 px-md-5 text-center overflow-hidden position-relative" style="background: #a39e8d;">
                    <a href="/rubro_mu/agregadoras-digitales/?post_type=music" class="stretched-link"></a>
                    <div class="mx-lg-5 mx-sm-2 px-lg-5 px-md-3 px-sm-2 py-4">
                        <img src="/wp-content/themes/finde_wp/assets/img/icono-distribuidoras.png" class="img-fluid px-5 pb-4" style="width:250px;">
                        <h2 class="display-5 font-weight-bold">Distribuidoras digitales</h2>
                        <p class="lead">Agregadoras de contenido</p>
                    </div>
                </div>
            </div>
        </section>

        <!--AGENDA-->
        <section id="agenda" class="bg-card py-5">
            <div class="container">
                <h1 class="mb-3">Agenda  <a href="/en-vivo" title="Agenda de eventos" class="btn btn-outline-primary"><i class="fas fa-video"></i> En vivo </a></h1>

                <div class="row">
                    <?php 
                    $args = array(
                        'post_type'             => 'agenda',
                        'category_name'         => 'musica',
                        'posts_per_page'        => 13,
                        'meta_query'            => array(
                            'fecha_clause'      => array(
                                'key'           => 'fecha_id',
                            ),
                            'destacado_clause'  => array(
                                'key'           => 'destacado_id',
                            ), 
                        ),
                        'orderby'               => array( 
                            'destacado_clause'  => 'DESC',
                            'fecha_clause'      => 'ASC',
                        ),
                    );

                    // The Query
                    $query_agenda = new WP_Query( $args );
                    if ( $query_agenda->have_posts() ) : ?>

                        <?php
                        /* Start the Loop */
                        $count = 1;
                        while ( $query_agenda->have_posts() ) :
                            $query_agenda->the_post();

                            /*
                             * Include the Post-Type-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                             */
                            get_template_part( 'template-parts/content', get_post_type() );

                        $count++;
                        endwhile;


                    else :

                        get_template_part( 'template-parts/content', 'none' );

                    endif;
                    ?>
                </div><!-- #main -->
                <?php 
                if ($count > '13') {
                        echo '<div class="row"><div class="col-15"><div class="border-top mt-3 py-3"><a href="/agenda-editorial"><strong>+ Ver agenda completa</strong></a></div></div></div>';
                    }
                ?>
            </div>
        </section>



<?php 
get_template_part( 'layouts/footer', 'mu' ); 
