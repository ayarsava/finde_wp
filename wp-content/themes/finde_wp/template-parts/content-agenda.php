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
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'medium'); 
$fecha = rwmb_meta( 'fecha_id' ); 
$destacado = rwmb_meta( 'destacado_id' );

?>
<div class="item mb-4<?php if ($destacado == 1) { echo ' destacado'; } ?>" data-target="<?php echo date('d-m', $fecha); ?>">
  <div class="card h-100 w-100">
    <?php if ($destacado == 1) { echo '<div class="star"><i class="fas fa-certificate text-primary"></i></div>'; } ?>
    <?php if ($featured_img_url) { 
    echo '<div class="img-wrapper img-fluid card-img-top" style="background-image: url('. esc_url($featured_img_url) .'); background-size:cover;background-position: center center; height:160px;position:relative;">';
    echo '<div class="fecha"><span class="dia">'.date('d-m', $fecha).'</span><span class="hora">'. date('H:i', $fecha).'hs</span></div>';
    echo '</div>';
    } ?>
    <?php 
    $post_tags = get_the_tags();
    if ( $post_tags ) {
      echo '<div class="tags">';
        foreach( $post_tags as $tag ) {
        echo '<span>' .$tag->name . '</span>'; 
        }
      echo '</div>';
    }
    ?>
    <div class="card-body">
      <a href="<?php echo get_permalink();?>" class="stretched-link"></a>

      <?php 
      the_title( '<h5 class="card-title">', '</h5>' );
      ?>
      <?php if ( get_the_excerpt() ) {
        echo '<div class="card-text">' . wp_trim_words( wp_strip_all_tags( get_the_excerpt() ), 25, '...' ) .'</div>';
      } else {
        echo '<div class="card-text">' . wp_trim_words( wp_strip_all_tags( get_the_content() ), 25, '...' ) .'</div>';
      }
      ?>
      
    </div>
  </div>
</div>