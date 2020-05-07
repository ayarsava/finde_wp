<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finde_WP
 */

$destacado = rwmb_meta( 'destacado_id' );
?>
<article class="item col-lg-3 col-md-5 mb-4<?php if ($destacado == 1) { echo ' destacado'; } ?>">
	<div class="card h-100">
	<?php
	echo '<a href="'.esc_url( get_permalink() ).'" rel="lightbox">'; 
            the_post_thumbnail('small', array('class' => 'img-fluid card-img-top wp-post-image'));
        echo '</a>';
    ?>
	<div class="card-body">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h5 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" class="font-weight-bold">', '</a></h5>' );
		endif;

		
		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				finde_wp_posted_on();
				finde_wp_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
		
      <?php if ( get_the_excerpt() ) {
        echo '<div class="card-text">' . get_the_excerpt() .'</div>';
      } else {
        echo '<div class="card-text">' . wp_trim_words( wp_strip_all_tags( get_the_content() ), 18, '...' ) .'</div>';
      }
      ?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
