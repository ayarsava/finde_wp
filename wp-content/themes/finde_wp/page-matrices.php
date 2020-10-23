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

<div class="m-0 p-0 w-100">
<iframe width="100%" height="640" style="width: 100%; height: 640px; border: none; max-width: 100%;" frameborder="0" allowfullscreen allow="xr-spatial-tracking; gyroscope; accelerometer" scrolling="yes" src="https://kuula.co/share/collection/7P13v?fs=1&vr=0&zoom=1&sd=1&gyro=0&thumbs=3&inst=0&info=0&logo=-1"></iframe>


<?php 
get_template_part( 'layouts/footer', 'di' ); 
