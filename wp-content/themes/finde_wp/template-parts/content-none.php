<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finde_WP
 */

?>

<section class="no-results not-found ">
	<header class="page-header">
		<h3 class="page-title"><?php esc_html_e( 'Mmm... no hemos encontrado contenido para mostrar', 'finde_wp' ); ?></h3>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'finde_wp' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p><?php esc_html_e( 'Intentelo nuevamente', 'finde_wp' ); ?></p>
			<?php
			get_search_form();

		else :
			?>

			
			<?php
		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
