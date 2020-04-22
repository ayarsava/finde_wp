<?php
/**
 * Template part for displaying posts.
 *
 * @package finde
 */

?>

<div id="main-carousel" class="carousel slide" data-ride="carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php wp_showSlides_fullbg() ?>
  </div>

  <!-- Controls -->
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#main-carousel" data-slide="prev"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i></a>
  <a class="carousel-control right" href="#main-carousel" data-slide="next"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
</div>