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
								<div class="fecha">
									<span class="dia"><?php echo date('d-m', $fecha); ?> </span> - 
									<span class="hora"><?php echo date('H:i', $fecha); ?>hs</span>
								</div>
						        <ul class="list-unstyled">

									<li></li>
								</ul>
						      	<?php
								the_title( '<h1 class="card-title">', '</h1>' );
								if( has_excerpt() ){
									echo '<div class="lead">'. get_the_excerpt() .'</div>';
								}
						        ?>
								<p class="card-text"><?php the_content(); ?></p>
								<?php 
								if ( $enlace ) {
									echo '<a href="'.$enlace.'" title="Ver actividad"><img src="/wp-content/themes/finde_wp/assets/img/ver-actividad.png" width="100"></a>';
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
} else {
get_footer();
}
