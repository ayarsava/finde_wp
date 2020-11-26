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
$destacado = rwmb_meta( 'destacado_id' );
$video_url = rwmb_get_value( 'audiovisual' );

?>
<div class="item mb-4<?php if ($destacado == 1) { echo ' destacado'; } ?>">
  <div class="card h-100 w-100">
    <?php
    if ( $video_url ) {
        echo '<div class="vid-wrapper card-img-top"><div class="plyr__video-embed vid-player post-'.get_the_ID().'" data-id="post-'.get_the_ID().'" id="plyr-'.get_the_ID().'-'.rand().'" data-url="'.$video_url.'" >';
        echo '</div></div>';
    } else if ($featured_img_url) {
        echo '<div class="img-wrapper img-fluid card-img-top" style="background-image: url('. esc_url($featured_img_url) .'); background-size:cover;background-position: center center; height:150px;position:relative;">';
        echo '</div>';
    }
    ?>
    
    <div class="card-body">
        <a href="<?php echo get_permalink();?>"><h6 class="card-title font-weight-bold" style="line-height:1.5">
            <?php the_title();?>
        </h6></a>

      
      <?php if ( get_the_excerpt() ) {
        echo '<div class="card-text sr-only">' . wp_trim_words( wp_strip_all_tags( get_the_excerpt() ), 25, '...' ) .'</div>';
      } else {
        echo '<div class="card-text sr-only">' . wp_trim_words( wp_strip_all_tags( get_the_content() ), 25, '...' ) .'</div>';
      }
      ?>
      
    </div>
  </div>
</div>