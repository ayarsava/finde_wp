<?php 
	$titulo = get_sub_field('titulo');
	$texto = get_sub_field('texto');
?>

	<section class="noticias py-6">
		<div class="container">
			<?php if ($titulo || $texto) { ?>

			<div class="row section-header mb-5">
				<div class="col-md-8 offset-md-2 text-center">
					<?php if ($titulo) { ?>
		  				<h2 class="mb-3"><?php echo $titulo; ?></h2>
		  			<?php } ?>
					<?php if ($texto) { ?>
						<p class="lead"><?php echo $texto; ?></p>
					<?php } ?>
				</div>
			</div>

			<?php } ?>

			<div class="row">

			<?php 
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 3
			);
			// the query
			$the_query = new WP_Query( $args ); ?>

			<?php if ( $the_query->have_posts() ) : ?>

				<!-- pagination here -->

				<!-- the loop -->
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<div class="col-md-4 mb-5">
					<article>
						<div class="img">
						<?php
						 if ( has_post_thumbnail()) {
						    $image = wp_get_attachment_image_src( get_post_thumbnail_id());
						 }
						 ?>
							<img src="<?php echo aq_resize($image[0],360,225,true,true,true); ?>" alt="" class="img-fluid">
						</div>
						<div class="info p-3">
							<time class="d-block mb-3"><?php the_date(); ?></time>
							<h3 class="mb-3"><?php the_title(); ?></h3>
							<p><?php html5wp_excerpt('html5wp_index'); ?></p>
						</div>
					</article>
				</div>

				<?php endwhile; ?>
				<!-- end of the loop -->

				<!-- pagination here -->

				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
				
			</div>

			<div class="cta text-center">
				<a href="" class="btn btn-lg btn-secondary">Ver Más Noticias</a>
			</div>

		</div>
	</section>