<?php
/**
 * Template part for displaying posts.
 *
 * @package Finde_WP
 */

?>

<div id="carouselCaptions" class="carousel slide" data-ride="carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <?php wp_showSlides_fullbg() ?>
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