<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finde_WP
 */

get_template_part( 'layouts/header', 'mu' );
?>
<div id="agenda" class="main-content bg-card">
    <div class="container py-5">
        <h1 class="extra-grande mb-4">Programación</h1>
        <div class="row">
        <?php 
        $args = array(
        'post_type'              => 'agenda',
        'posts_per_page' => -1,
        'category_name' => 'musica',
        'meta_query' => array(
            'fecha_clause' => array(
                'key' => 'fecha_id',
            ),
        ),
        'orderby' => array( 
              'fecha_clause' => 'ASC',
        ),
      );

      // The Query
      $query_agenda = new WP_Query( $args );
        if ( $query_agenda->have_posts() ) : ?>
            <?php
            /* Start the Loop */
            while ( $query_agenda->have_posts() ) :
                $query_agenda->the_post();
                $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
                $fecha = rwmb_meta( 'fecha_id' ); 
                echo '<div class="item col-lg-5 col-md-5 mb-4">';
                    echo '<div class="card h-100">';
                    if ($featured_img_url) { 
                        echo '<div class="img-wrapper img-fluid card-img-top" style="background-image: url('. esc_url($featured_img_url) .'); background-size:cover;background-position: center center; height:300px;"></div>';
                    }
                    $post_tags = get_the_tags();
                    if ( $post_tags ) {
                      echo '<div class="tags">';
                        foreach( $post_tags as $tag ) {
                        echo '<span>' .$tag->name . '</span>'; 
                        }
                      echo '</div>';
                    }
                    echo '<div class="card-body">';
                        echo '<a href="'. get_permalink().'" class="stretched-link"></a>';
                        echo '<ul class="list-unstyled">';
                            echo '<li class="text-primary">';
                            echo date('d-m\, H:i', $fecha);'hs</li>';
                        echo '</ul>';
                        if ($featured_img_url) { 
                            the_title( '<h5 class="card-title">', '</h5>' );
                        } else {
                            the_title( '<h5 class="h2 card-title">', '</h5>' );
                        }
                        if ( get_the_excerpt() ) {
                        echo '<div class="card-text">' . get_the_excerpt() .'</div>';
                        } else {
                        echo '<div class="card-text">' . wp_trim_words( wp_strip_all_tags( get_the_content() ), 18, '...' ) .'</div>';
                        }
                        echo '</div>';
                    echo '</div>';
                echo '</div><!-- fin-de-item -->';

            endwhile;

        else :

            get_template_part( 'template-parts/content', 'none' );

        endif;
        ?>
            
        </div><!-- .row -->
    </div><!-- .container -->

<?php
get_template_part( 'layouts/footer', 'mu' ); 
