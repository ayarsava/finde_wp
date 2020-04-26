<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finde_WP
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-3'); ?>>
	<div class="card">
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
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'finde_wp' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
