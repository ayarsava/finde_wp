<?php
$lastposts = get_posts( array(
    'posts_per_page' => 3,
	'post_type'   => 'productos_vj'
) );
 
if ( $lastposts ) { ?>
	<div class="card-deck">
    
    <?php foreach ( $lastposts as $post ) :
        setup_postdata( $post ); ?>
        <div class="card col-3">
	        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	        <div class="img">
			<?php
			 if ( has_post_thumbnail()) {
			    $image = wp_get_attachment_image_src( get_post_thumbnail_id());
			 }
			 ?>
				<img src="<?php echo $image[0] ?>" alt="" class="img-fluid">
			</div>
	        <?php the_content(); ?>
    	</div>
    <?php
    endforeach; 
    wp_reset_postdata();  ?>
    </div>
 <?php }