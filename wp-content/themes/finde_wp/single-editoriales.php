<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Finde_WP
 */

get_template_part( 'layouts/header', 'ed' );
?>
<?php 
    $address = rwmb_meta( 'address' );
    $url = rwmb_meta( 'mbox_url' );
    $instagram = rwmb_meta( 'mbox_instagram' );
    $twitter = rwmb_meta( 'mbox_twitter' );
    $facebook = rwmb_meta( 'mbox_facebook' );
    $libreria = rwmb_meta( 'mbox_libreria' );
    $whatsapp = rwmb_meta( 'mbox_whatsapp' );
    $images = rwmb_meta( 'image_ed', array( 'size' => 'large' ) );

    
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
    <header class="branding-header pt-3 bg-editorial">
        <div class="container pb-5">
            <div class="col-lg-8 col-md-12 mx-auto py-4">
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
        </div>
    </header><!-- .entry-header -->
    
    <div class="container py-5">

        <div class="row">
            <div class="col-lg-8 col-md-12 mx-auto my-5">
                <?php
                // slick
                if ($images) {
                    echo '<div class="profile-slick" style="min-height:500px!important;">';
                foreach ( $images as $image ) {
                    echo '<a href="' . get_the_permalink() .'"><img src="', $image['url'], '"></a>';
                }    
                    echo '</div>';
                }
                ?>
            </div>
            <div class="col-lg-12 col-md-12 mx-auto my-2">
                <?php
                the_content();
                ?>
                <?php
                $args = array(
                      'post_type'              => 'productoeditorial',
                      'order'                  => 'ASC',
                      'orderby'                => 'title',
                      'relationship' => [
                        'id'   => 'productoeditorial_to_editoriales',
                        'to' => get_the_ID(), // You can pass object ID or full object
                    ],
                    'nopaging'     => true,
                );

                // The Query
                $query_libros = new WP_Query( $args );
                // The Loop
                if ( $query_libros->have_posts() ) {
                    echo '<h5 class="mt-5">Libros destacados</h5>';
                    echo '<hr>';
                    echo '<div class="row">';
                    while ( $query_libros->have_posts() ) : $query_libros->the_post();
                
                        $libros = MB_Relationships_API::get_connected( [
                            'id'   => 'productoeditorial_to_editoriales',
                            'to' => get_the_ID(),
                        ] );
                        echo '<div class="col-15 col-lg-7-5 mb-3">';
                        get_template_part( 'layouts/card', 'libro' );
                        echo '</div>';
        
                    endwhile;
                    echo '</div>';
                    wp_reset_postdata();
                }
    
                // Restore original Post Data
                wp_reset_postdata();
    
                // termino loop
                ?>
            </div>
        </div>
    </div><!-- .container -->
</article><!-- #post-<?php the_ID(); ?> -->

<?php get_template_part( 'layouts/footer', 'ed' ); 
