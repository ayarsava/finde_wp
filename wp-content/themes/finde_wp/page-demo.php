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

get_template_part( 'layouts/header', 'di' ); 
?>
<div class="bg-dark" style="background-color:#111!important;">
<div class="container py-5">
<iframe width="100%" style="width: 100%; height:90vh; border: none; max-width: 100%; border-radius: 5px;" frameborder="0" allowfullscreen scrolling="yes" src="https://s3.arsat.com.ar/finde-demo/v1/index.html"></iframe>
</div>

<?php 
get_template_part( 'layouts/footer', 'di' ); 
