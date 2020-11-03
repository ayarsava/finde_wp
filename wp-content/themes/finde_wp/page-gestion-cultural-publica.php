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

get_template_part( 'layouts/header', 'te-pu' ); 
?>

    <div id="content" class="home-gestion-cultural-publica">

        <section id="slide-principal">
            <div id="carouselCaptions" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <?php wp_showSlides_fullbg_portag('gestion-cultural-publica') ?>
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

        <!--BIENVENIDA-->
        <section class="bg-white py-5">
            <div class="container">
                <h3 class="mb-4"><strong>Cultura en territorio</strong></h3>
                <p class="lead">Finde Cultura en Territorio es un espacio de encuentro entre los 135 municipios bonaerenses, para analizar y compartir experiencias de gestión cultural pública. En esta primera edición tendremos presentaciones y análisis de políticas públicas municipales, conferencias y talleres. Tres secciones para pensar la cultura pública en territorio desde los territorios y junto a invitadxs que son referentes de la gestión en otras provincias.</p>
                <div class="row mt-5" style="background:#e2e2e2;">
                    <div class="col-md-9">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/OYTyE12K_mA?rel=0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="wrap pt-5 px-sm-5">
                            <h4>Mesa de Apertura</h4>
                            <p class="mt-5">Augusto Costa, Ministro de Producción, Ciencia e Innovación Tecnológica de la provincia de Buenos Aires, le da la bienvenida a las provincias invitadas a participar de esta primera edición de Finde Cultura en Territorio.</p>
                            <p class="">Una charla sobre gestionar cultura en territorios diversos junto a Peki Torres, Directora de PolÍticas e Industrias Culturales de San Juan, Jorge Llonch, MInistro de Cultura de Santa Fe, Mariela Quirós, Presidenta del Instituto Cultural de Chaco, Sabrina Sansone, Secretaria de Cultura de Salta y Lucrecia Cardoso, Secretaria de Desarrollo Cultural del Ministerio de Cultura de la Nación.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--ATLAS DE EXPERIENCIAS-->
        <section class="bg-white py-2 py-sm-5">
            <div class="container">
                <h3 class="mb-4"><strong>Atlas de experiencias</strong></h3>
                <div class="lead">
                Un inventario de políticas y eventos culturales públicos generados por los municipios bonaerenses. Un espacio para compartir experiencias de gestión, construir vínculos y aprender de nuestros pares: Cómo crean y gestionan acciones que transforman sus comunidades y activan el desarrollo.
                </div>
                
                <div class="slick x3 my-5">
                    <?php wp_archive_experiencias_x_recurso('atlas-de-experiencias', 'gestion-cultural-publica') ?>
                </div>
            </div>
        </section>

        <!--CONFERENCIAS-->
        <section class="bg-white py-2 py-sm-5">
            <div class="container">
                <h3 class="mb-4"><strong>Conferencias</strong></h3>
                <div class="lead">
                    Gestores culturales públicos de otras provincias comparten casos de gestión que produjeron un impacto en sus territorios.
                </div>
                <div class="slick-custom my-5" data-slick='{"slidesToShow": 3, "slidesToScroll": 1}'>           
                    <div class="text-center">
                        <div class="profile-face mx-auto mb-3" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/territorio/carolina-sampor.jpg');"></div>
                        <h4>Carolina Sampor</h4>
                        <p class="h5">Chaco</p>
                    </div>
                    <div class="text-center">
                        <div class="profile-face mx-auto mb-3" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/territorio/katia-bradford.jpg');"></div>
                        <h4>Katia Bradford</h4>
                        <p class="h5">Chaco</p>
                    </div>
                    <div class="text-center">
                        <div class="profile-face mx-auto mb-3" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/territorio/peki-torres.jpg');"></div>
                        <h4>Peki Torres</h4>
                        <p class="h5">San Juan</p>
                    </div>
                </div>
            </div>
        
            <div class="container-fluid bg-light py-2">
                <div class="container">
                    <div class="slick-custom my-5" data-slick='{"slidesToShow": 2, "slidesToScroll": 1}'>
                        <?php wp_archive_experiencias_x_recurso('conferencias', 'gestion-cultural-publica') ?>
                    </div>
                </div>
            </div>
        </section>

        <!--CAPACITACIONES-->
        <section class="bg-white py-2 py-sm-5">
            <div class="container">
                <h3 class="mb-4"><strong>Capacitaciones</strong></h3>
                <div class="lead">
                Un espacio de formación virtual permanente para gestores culturales públicos de la provincia de Buenos Aires.
                </div>
                <div class="slick x3 my-5">
                    <?php wp_archive_experiencias_x_recurso('capacitaciones', 'gestion-cultural-publica') ?>
                </div>
            </div>
        </section>

        <!--PARTICIPA-->
        <section class="bg-light py-5 participa" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/territorio/bk-territorio-01.png');">
            <div class="container">
                <div class="row">
                    <h3 class="col-12 mb-4 text-primary"><strong>Participá</strong></h3>
                    <div class="lead col-md-7">
                    ¿Trabajás en cultura en alguno de los 135 municipios de la provincia de Buenos Aires? ¿Querés compartir experiencias de gestión? ¿Generar lazos y aprendizajes con otros territorios? Te estamos esperando. Hacé <a href="/participa" target="_blank">click acá</a>.
                    </div>
                </div>
            </div>
        </section>

        <!--BANNERS-->
        <?php wp_archive_banners('gestion-cultural-publica');?>


<?php 
get_template_part( 'layouts/footer', 'te-pu' ); 
