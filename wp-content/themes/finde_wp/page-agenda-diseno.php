<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finde_WP
 */

get_template_part( 'layouts/header', 'di' );
?>
<div id="agenda" class="main-content bg-card listado-agenda">
    <div class="container py-5">
        
        <h1 class="extra-grande mb-4">Agenda</h1>
        <?php wp_archive_agenda_destacado('diseno'); ?>
    </div><!-- .container -->
    <div class="container-fluid bg-white py-5">
        <div class="container">
            <?php wp_archive_agenda_por_dia('diseno');?>
        </div>
    </div>
<?php
get_template_part( 'layouts/footer', 'di' ); 
