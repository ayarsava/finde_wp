<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Finde_WP
 */

$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
$fecha = rwmb_meta( 'fecha_id' ); 
$enlace = rwmb_meta( 'enlace' ); 

if (has_category( 'Editorial' )) {
  get_template_part( 'layouts/header', 'ed' ); 
} elseif (has_category( 'Videojuegos' )) {
  get_template_part( 'layouts/header', 'vj' ); 
} elseif (has_category( 'Música' )) {
  get_template_part( 'layouts/header', 'mu' ); 
} elseif (has_category( 'Diseño' )) {
  get_template_part( 'layouts/header', 'di' ); 
} elseif (has_category( 'Audiovisual' )) {
	get_template_part( 'layouts/header', 'au' ); 
} else {
get_header();
}
?>

	<div id="agenda" class="container">
  		<div class="row">
      		<div class="col">
      			<div id="primary" class="content-area">
        			<main id="main" class="site-main my-5">

					<?php
					while ( have_posts() ) :
						the_post();
						?>
						  <div class="row no-gutters">

						  <?php 
							$video_url = rwmb_get_value( 'audiovisual' );
							if ( $video_url ) {
								echo '<div class="col-15 pb-5 video"><div class="plyr__video-embed" id="player" data-url="'.$video_url.'"></div></div>';
							} ?>

						  	<?php if ($featured_img_url) { 
						    	echo '<div class="col-md-6">';
						    	the_post_thumbnail('full', array('class' => 'img-fluid'));
						    	echo '</div>';
						    } ?>
						    
						    <div class="<?php if ($featured_img_url) { echo 'col-md-9 border-left'; } else { echo 'col-md-15';} ?>">
						      <div class="card-body">
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
								<?php if ($fecha) {?>
								<div class="fecha">
									<span class="dia"><?php echo date('d-m', $fecha); ?> </span> - 
									<span class="hora"><?php echo date('H:i', $fecha); ?>hs</span>
								</div>
								<?php } ?>
						      	<?php
								the_title( '<h1 class="card-title">', '</h1>' );
								if( has_excerpt() ){
									echo '<div class="lead">'. get_the_excerpt() .'</div>';
								}
						        ?>
								<p class="card-text"><?php the_content(); ?></p>
								<?php 
								if ( $enlace ) {
									echo '<div class="d-block mt-4"></div><a href="'.$enlace.'" class="boton-3d" title="Ir a tienda virtual" target="_blank">Ver actividad</a></div>';
								}
								?>
						      </div>
							</div>
							
							
						  </div>
<?
					endwhile; // End of the loop.
					?>

					</main><!-- #main -->
      			</div><!-- #primary -->
    		</div><!-- .col-12 .col-md-8 -->
		</div><!-- .row -->

<?php
if (has_category( 'Editorial' )) {
  get_template_part( 'layouts/footer', 'ed' ); 
} elseif (has_category( 'Videojuegos' )) {
  get_template_part( 'layouts/footer', 'vj' ); 
} elseif (has_category( 'Música' )) {
  get_template_part( 'layouts/footer', 'mu' ); 
} elseif (has_category( 'Diseño' )) {
  get_template_part( 'layouts/footer', 'di' ); 
} elseif (has_category( 'Aduiovisual' )) {
	get_template_part( 'layouts/footer', 'au' ); 
} else {
get_footer();
}
