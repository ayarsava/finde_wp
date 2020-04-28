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
get_header();
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
						    	echo '<div class="col-md-4">';
						    	the_post_thumbnail('full', array('class' => 'img-fluid'));
						    	echo '</div>';
						    } ?>
						    
						    <div class="<?php if ($featured_img_url) { echo 'col-md-11 border-left'; } else { echo 'col-md-15';} ?>">
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
						        <ul class="list-unstyled">
									<li><?php echo date('d-m\, H:i', $fecha); ?>hs</li>
								</ul>
						      	<?php
								the_title( '<h1 class="card-title">', '</h1>' );
								if( has_excerpt() ){
									echo '<div class="lead">'. get_the_excerpt() .'</div>';
								}
						        ?>
						        <p class="card-text"><?php the_content(); ?></p>
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
get_footer();
