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

$tipo = $_GET['tipo'];
$area = $_GET['area'];
if ($area == 'gestion-cultural-publica') {
    get_template_part( 'layouts/header', 'te-pu' ); 
} else if ($area == 'gestion-cultural-independiente') {
    get_template_part( 'layouts/header', 'te-in' ); 
} else {
    get_template_part( 'layouts/header', 'te' ); 
}
?>

    <div id="content" class="home-gestion-cultural-publica">

        <!--ATLAS DE EXPERIENCIAS-->
        <section id="atlas-de-experiencias" class="bg-white py-2 py-sm-5">
            <div class="container">
                <?php 
                if ($area == 'gestion-cultural-publica') {
                    if ($tipo == 'atlas-de-experiencias') {
                        echo '<h3><strong>Atlas de experiencias</strong></h3>';
                        echo '<div class="lead">Un inventario de políticas y eventos culturales públicos generados por los municipios bonaerenses. Un espacio para compartir experiencias de gestión, construir vínculos y aprender de nuestros pares: Cómo crean y gestionan acciones que transforman sus comunidades y activan el desarrollo.</div>';
                    } else if ($tipo == 'conferencias') {
                        echo '<h3><strong>Conferencias</strong></h3>';
                        echo '<div class="lead">Gestores culturales públicos de otras provincias comparten casos de gestión que produjeron un impacto en sus territorios.</div>';
                    } else if ($tipo == 'capacitaciones') {
                        echo '<h3><strong>Capacitaciones</strong></h3>';
                        echo '<div class="lead">Un espacio de formación virtual permanente para gestores culturales públicos de la provincia de Buenos Aires.</div>';
                    }
                } else if ($area == 'gestion-cultural-independiente') {
                    if ($tipo == 'atlas-de-experiencias') {
                        echo '<h3><strong>Atlas de experiencias</strong></h3>';
                        echo '<div class="lead">Un inventario de proyectos independientes y de gestión mixta que estimulan la potencia de la cultura bonaerense. Un espacio para compartir experiencias, construir vínculos y aprender de nuestros pares: Cómo crean y gestionan acciones que transforman sus comunidades y territorios.
                        </div>';
                    } else if ($tipo == 'conversaciones') {
                        echo '<h3><strong>Conversaciones</strong></h3>';
                        echo '<div class="lead">Referentes de proyectos colectivos, festivales y espacios culturales intercambian miradas, experiencias y desafíos en conversaciones sobre las singularidades de producir cultura en la provincia de Buenos Aires.</div>';
                    } else if ($tipo == 'capacitaciones') {
                        echo '<h3><strong>Capacitaciones</strong></h3>';
                        echo '<div class="lead">Un espacio de formación virtual permanente para gestores culturales independientes de la provincia de Buenos Aires.</div>';
                    }
                }?>
                
                <div class="slick x3 mt-5">
                    <?php wp_archive_experiencias_x_recurso($tipo, $area) ?>
                </div>
            </div>
        </section>

        <!--PARTICIPA-->
        <section id="participa" class="bg-light py-5 participa" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/territorio/bk-territorio-01.png');">
            <div class="container">
                <div class="row">
                    <h3 class="col-12 mb-4 text-primary"><strong>Participá</strong></h3>
                    <div class="lead col-md-7">
                    ¿Trabajás en cultura en alguno de los 135 municipios de la provincia de Buenos Aires? ¿Querés compartir experiencias de gestión? ¿Generar lazos y aprendizajes con otros territorios? Te estamos esperando. Hacé <a href="https://docs.google.com/forms/d/e/1FAIpQLScKM27DelTXnmeA7lzORDxzrDEo8ejtLCANYAXLZAVPEC9bBw/viewform" target="_blank">click acá</a>.
                    </div>
                </div>
            </div>
        </section>

        <!--BANNERS-->
        <?php wp_archive_banners('gestion-cultural-publica');?>


<?php 
if ($area == 'gestion-cultural-publica') {
    get_template_part( 'layouts/footer', 'te-pu' ); 
} else if ($area == 'gestion-cultural-independiente') {
    get_template_part( 'layouts/footer', 'te-in' ); 
} else {
    get_template_part( 'layouts/footer', 'te' ); 
} 
