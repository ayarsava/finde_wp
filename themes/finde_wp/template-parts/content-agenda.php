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
?>


<div class="card col-12 mb-3">
  <div class="row no-gutters">
    <?php if ($featured_img_url) { echo '<div class="col-md-4" style="background-image: url('. esc_url($featured_img_url) .'); background-size:cover;"></div>';} ?>
    
    <div class="<?php if ($featured_img_url) { echo 'col-md-8'; } else { echo 'col-md-12';} ?>">
      <div class="card-body">
        <?php
		the_title( '<h5 class="card-title">', '</h5>' );
		?>
        <p class="card-text"><?php get_the_content(); ?></p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        <ul class="list-unstyled">
			<li><?php echo rwmb_meta( 'fecha_id' ) ?></li>
		</ul>
      </div>
    </div>
  </div>
</div>
