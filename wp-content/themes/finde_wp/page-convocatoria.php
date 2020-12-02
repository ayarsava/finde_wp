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

    <div id="content" class="page-codigo-provincia">

        <section class="archive-agenda spotlight bg-cover" style="background-image: url('/wp-content/themes/finde_wp/assets/img/music-lab.jpg'); background-size:cover; background-position:center center; height:400px;">
            <div class="spotlight-holder pt-5 pb-7 py-lg-0">
                <span class="mask bg-gradient-primary opacity-6"></span>
                <div class="container d-flex align-items-bottom">
                    <div class="col">
                        <div class="row">
                            <div class="info">
                                <h1 class="text-white extra-grande">Código Provincia | Convocatoria</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--OPB-->
        <div class="container py-5">
        <?php the_content();?>
        </div>

        
<?php 
get_template_part( 'layouts/footer', 'mu' ); 
