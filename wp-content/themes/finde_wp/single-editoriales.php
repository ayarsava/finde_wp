<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Finde_WP
 */

get_header();
?>
<?php 
    $address = rwmb_meta( 'address' );
    $url = rwmb_meta( 'mbox_url' );
    $instagram = rwmb_meta( 'mbox_instagram' );
    $twitter = rwmb_meta( 'mbox_twitter' );
    $facebook = rwmb_meta( 'mbox_facebook' );
    $libreria = rwmb_meta( 'mbox_libreria' );
    $whatsapp = rwmb_meta( 'mbox_whatsapp' );
?>

<?php while ( have_posts() ) :
                the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
    <header class="branding-header pt-3 bg-editorial">
        <div class="container pb-5">
            <div class="col-md-8 mx-auto py-4">
                <?php
                the_title( '<h1 class="entry-title extra-grande text-white">', '</h1>' );
                ?>
                <ul class="list-unstyled text-light">
                    <?php 
                        if ($address) { echo '<li>'. $address .'</li>';}
                    ?>
                </ul>

                <ul class="list-unstyled list-inline text-center h4">
                    <?php
                        if ($url || $instagram || $facebook || $twitter) {
                            echo '<div class="contacto mt-2">';
                            if ($url) { echo '<li class="list-inline-item"><a href="'. $url . '" target="_blank" class="os"><i class="fas fa-globe-americas"></i></i></a></li>';}
                            if ($libreria) { echo '<li class="list-inline-item"><a href="'. $libreria . '" target="_blank" class="os"><i class="fas fa-shopping-cart"></i></a></li>';}
                            if ($instagram) { echo '<li class="list-inline-item"><a href="'. $instagram. '" target="_blank" class="os"><i class="fab fa-instagram"></i></a></li>';}
                            if ($facebook) { echo '<li class="list-inline-item"><a href="'. $facebook. '" target="_blank" class="os"><i class="fab fa-facebook"></i></a></li>';}
                            if ($twitter) { echo '<li class="list-inline-item"><a href="'. $twitter. '" target="_blank" class="os"><i class="fab fa-twitter"></i></a></li>';}
                            if ($whatsapp) { echo '<li class="list-inline-item"><a href="https://api.whatsapp.com/send?phone='. $whatsapp . '" target="_blank" class="os"><i class="fab fa-whatsapp"></i></a></li>';}
                            echo '</div>';
                        }
                        
                    ?>
                </ul>
                </ul>
            </div>

            <?php 
            //$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
            $page_bg_image     = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'small' );
            $page_bg_image_url = $page_bg_image[0]; // This returns just the URL of the image.
            ?>
            <div class="mini-profile-img mx-auto">
                <?php if ( has_post_thumbnail() ) {
                  echo get_the_post_thumbnail( $post_id, 'small', array( 'class' => 'img-fluid img-profile' ) );
                }?>
            </div>
        </div>
    </header><!-- .entry-header -->
    
    <div class="container py-5">

        <div class="row">
            <div class="col-md-10 mx-auto my-5">
                <?php
                the_content();
                ?>
            </div>
        </div>
            <?php 

            $args = array(
                'post_type'              => 'productoeditorial',
                'order'                  => 'ASC',
                'relationship' => [
                    'id'   => 'productoeditorial_to_editoriales',
                    'to' => get_the_ID(), // You can pass object ID or full object
                ],
                'nopaging'     => true,
            );


            // The Query
            $query_productos = new WP_Query( $args );
            // The Loop
            if ( $query_productos->have_posts() ) {
            echo '<div class="text-center py-3"><h2>Productos</h2><div class="row py-3 justify-content-md-center">';
        
              while ( $query_productos->have_posts() ) : $query_productos->the_post();
                $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
                $url = rwmb_meta( 'mbox_url' );
                $descargas = rwmb_meta( 'descarga_id' );
        
                
                $terms = get_the_terms( $post->ID, 'rubro_ed' );
                $dterms = get_the_terms( $post->ID, 'descuento_ed' );

                echo '<div class="col-md-4 mb-1 text-left"';
                if ($terms) {
                echo ' data-category="';
                foreach( $terms as $term ) echo $term->slug. ' ';
                echo '" ';
                }
                if ($terms) {
                echo ' data-descuento="';
                foreach( $dterms as $dterm ) echo $dterm->slug. ' ';
                echo '"';
                }
                echo '>';
                echo '<a href="' . get_the_permalink() .'" rel="slidemark" class="stretched-link"></a>';
                echo '<div class="grid-item-content card h-100">';
                if ( has_post_thumbnail() ) {
                    echo get_the_post_thumbnail( $post_id, 'small', array( 'class' => 'img-fluid card-img-top' ) );
                }
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . get_the_title() . '</h5>';
                if( has_excerpt() ){
                    echo '<div class="card-text">'. get_the_excerpt() .'</div>';
                } else {
                    echo '<div class="card-text">' . wp_trim_words( wp_strip_all_tags( get_the_content() ), 18, '...' ) .'</div>';
                }
                if ($terms) {
                echo '<div class="rubro">';
                foreach( $terms as $term ) { echo '<a href="'.get_term_link($term->slug, 'rubro').'" class="badge badge-dark mt-1 os">'.$term->name.'</a></span>', ' ';}
                echo '</div>';
                }
                if ($descargas) {
                echo '<small class="descargas mt-2 d-block">';
                foreach ( $descargas as $descarga ) {
                     echo '<a href="'.$descarga['d_url'].'" class="os btn btn-sm btn-outline-dark mr-1 mb-1 descarga" target="_blank"><span>' . $descarga['d_name'] .'</span></a>';
                }
                echo '</small>';
                }
                echo '</div>';
                echo '</div></div>';
              endwhile;
              echo '</div></div>';
              wp_reset_postdata();
            } else {
              echo '';
            }

            // Restore original Post Data
            wp_reset_postdata();

            // termino loop
            ?>
    </div><!-- .container -->
</article><!-- #post-<?php the_ID(); ?> -->

<?php
endwhile; // End the loop.
?>
<?php
get_footer();
