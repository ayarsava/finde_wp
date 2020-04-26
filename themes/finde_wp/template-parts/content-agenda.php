<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finde_WP
 */

?>

<?php 
/* grab the url for the full size featured image */
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
$fecha = rwmb_meta( 'fecha_id' ); 


?>
<div class="col-sm-3 mb-3">
  <div class="card h-100">
    <div class="img-wrapper img-fluid card-img-top"<?php if ($featured_img_url) { echo ' style="background-image: url('. esc_url($featured_img_url) .'); background-size:cover;background-position: center center; height:160px;">';} ?>
    </div>
    <div class="card-body">
    	<a href="<?php echo get_permalink();?>" class="stretched-link"></a>

      <ul class="list-unstyled">
        <li class="text-primary"><?php echo date('d-m\, H:i', $fecha); ?>hs</li>
      </ul>
      <?php 
  		the_title( '<h5 class="card-title">', '</h5>' );
  		?>
      <p class="card-text"><?php echo wp_trim_words( wp_strip_all_tags( get_the_content() ), 18, '...' ); ?></p>
    </div>
  </div>
</div>
