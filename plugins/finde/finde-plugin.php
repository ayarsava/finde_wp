<?php
/*
Plugin Name: Finde
Description: Plugin generado por Ayar Sava para FINDE | GPBA
*/
/* Start Adding Functions Below this Line */


function wporg_register_taxonomy_categoria() {
  $labels = [
      'name'              => _x('Categorias', 'taxonomy general name'),
      'singular_name'     => _x('Categoria', 'taxonomy singular name'),
      'search_items'      => __('Buscar categorias'),
      'all_items'         => __('Todos los categorias'),
      'parent_item'       => __('Categoria padre'),
      'parent_item_colon' => __('Categoria padre:'),
      'edit_item'         => __('Editar Categoria'),
      'update_item'       => __('Actualizar Categoria'),
      'add_new_item'      => __('Agregar nuevo Categoria'),
      'new_item_name'     => __('Nuevo nombre de categoria'),
      'menu_name'         => __('Categoria'),
    ];

  $args = [
    'hierarchical'      => true, // make it hierarchical (like categories)
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'show_in_rest'      => true,
    'rewrite'           => array( 'slug' => 'categoria', 'with_front' => false ),
  ];
  register_taxonomy('categoria', ['catalogo'], $args);
}
add_action('init', 'wporg_register_taxonomy_categoria');


function wporg_register_taxonomy_descuento() {
  $labels = [
    'name'              => _x('Descuentos', 'taxonomy general name'),
    'singular_name'     => _x('Descuento', 'taxonomy singular name'),
    'search_items'      => __('Buscar descuentos'),
    'all_items'         => __('Todos los descuentos'),
    'parent_item'       => __('Descuento padre'),
    'parent_item_colon' => __('Descuento padre:'),
    'edit_item'         => __('Editar Descuento'),
    'update_item'       => __('Actualizar Descuento'),
    'add_new_item'      => __('Agregar nuevo Descuento'),
    'new_item_name'     => __('Nuevo nombre de descuento'),
    'menu_name'         => __('Descuento'),
  ];
  $args = [
    'hierarchical'      => true, // make it hierarchical (like categories)
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'show_in_rest'      => true,
    'rewrite'           => array( 'slug' => 'descuento', 'with_front' => false ),
  ];
  register_taxonomy('descuento', ['catalogo'], $args);
}
add_action('init', 'wporg_register_taxonomy_descuento');


function wporg_register_taxonomy_rubro() {
  $labels = [
    'name'              => _x('Rubros', 'taxonomy general name'),
    'singular_name'     => _x('Rubro', 'taxonomy singular name'),
    'search_items'      => __('Buscar rubros'),
    'all_items'         => __('Todos los rubros'),
    'parent_item'       => __('Rubro padre'),
    'parent_item_colon' => __('Rubro padre:'),
    'edit_item'         => __('Editar Rubro'),
    'update_item'       => __('Actualizar Rubro'),
    'add_new_item'      => __('Agregar nuevo Rubro'),
    'new_item_name'     => __('Nuevo nombre de rubro'),
    'menu_name'         => __('Rubro'),
  ];
  $args = [
    'hierarchical'      => true, // make it hierarchical (like categories)
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'show_in_rest'      => true,
    'rewrite'           => array( 'slug' => 'rubro', 'with_front' => false ),
  ];
  register_taxonomy('rubro', ['catalogo'], $args);
}
add_action('init', 'wporg_register_taxonomy_rubro');



/*** HOME - SLIDER***/

function slider_init() {
	$labels = array(
		'name' => __( 'Slides', 'post type general name', 'finde-plugin' ),
		'singular_name'=> __( 'Slide', 'post type singular name', 'finde-plugin' ),
		'menu_name' => __( 'Slides', 'admin menu', 'finde-plugin' ),
		'name_admin_bar'=> __( 'Slide', 'add new on admin bar', 'finde-plugin' ),
		'add_new'   => __( 'Agregar Nuevo', 'slide', 'finde-plugin' ),
		'add_new_item'=> __( 'Agregar Nuevo Slide', 'finde-plugin' ),
		'new_item'    => __( 'Nuevo Slide', 'finde-plugin' ),
		'edit_item'     => __( 'Editar Slide', 'finde-plugin' ),
		'view_item'   => __( 'Ver Slide', 'finde-plugin' ),
		'all_items'     => __( 'Todos los Slides', 'finde-plugin' ),
		'search_items'=> __( 'Buscar Slides', 'finde-plugin' ),
		'parent_item_colon' => __( 'Parent Slides:', 'finde-plugin' ),
		'not_found'  => __( 'No hemos encontrado slides.', 'finde-plugin' ),
		'not_found_in_trash' => __( 'No encontramos slides en la papelera.', 'finde-plugin' )
	);

	$args = array(
	  'labels'             => $labels,
	  'public'             => true,
	  'publicly_queryable' => true,
	  'show_ui'            => true,
	  'show_in_menu'       => true,
	  'query_var'          => true,
	  'rewrite'            => array( 'slug' => 'slide' ),
	  'capability_type'    => 'post',
	  'has_archive'        => true,
	  'Hierarchical'       => false,
	  'menu_position'      => null,
	  'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);
	register_post_type( 'slide', $args );
}
add_action( 'init', 'slider_init' );


/*** CPT CATALOGO ***/ 
function custom_post_type() {
 
  // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Catalogos', 'Post Type General Name', 'finde-plugin' ),
        'singular_name'       => _x( 'Catalogo', 'Post Type Singular Name', 'finde-plugin' ),
        'menu_name'           => __( 'Catalogos', 'finde-plugin' ),
        'parent_item_colon'   => __( 'Catalogo padre', 'finde-plugin' ),
        'all_items'           => __( 'Todos los Catalogos', 'finde-plugin' ),
        'view_item'           => __( 'Ver Catalogo', 'finde-plugin' ),
        'add_new_item'        => __( 'Agregar nuevo Catalogo', 'finde-plugin' ),
        'add_new'             => __( 'Agregar nuevo', 'finde-plugin' ),
        'edit_item'           => __( 'Editar Catalogo', 'finde-plugin' ),
        'update_item'         => __( 'Actualizar Catalogo', 'finde-plugin' ),
        'search_items'        => __( 'Buscar Catalogo', 'finde-plugin' ),
        'not_found'           => __( 'No encontrado', 'finde-plugin' ),
        'not_found_in_trash'  => __( 'No encontrado en la papelera', 'finde-plugin' ),
    );
     
  // Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'catalogo', 'finde-plugin' ),
        'description'         => __( 'Catalogo news and reviews', 'finde-plugin' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array('categoria', 'descuento', 'rubro' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest'        => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'catalogo', $args );
 
}
add_action( 'init', 'custom_post_type', 0 );


/*** CPT ESTUDIO ***/
function custom_post_type_estudio() {
  // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Estudios', 'Post Type General Name', 'finde-plugin' ),
        'singular_name'       => _x( 'Estudio', 'Post Type Singular Name', 'finde-plugin' ),
        'menu_name'           => __( 'Estudios', 'finde-plugin' ),
        'parent_item_colon'   => __( 'Estudio padre', 'finde-plugin' ),
        'all_items'           => __( 'Todos los Estudios', 'finde-plugin' ),
        'view_item'           => __( 'Ver Estudio', 'finde-plugin' ),
        'add_new_item'        => __( 'Agregar nuevo Estudio', 'finde-plugin' ),
        'add_new'             => __( 'Agregar nuevo', 'finde-plugin' ),
        'edit_item'           => __( 'Editar Estudio', 'finde-plugin' ),
        'update_item'         => __( 'Actualizar Estudio', 'finde-plugin' ),
        'search_items'        => __( 'Buscar Estudio', 'finde-plugin' ),
        'not_found'           => __( 'No encontrado', 'finde-plugin' ),
        'not_found_in_trash'  => __( 'No encontrado en la papelera', 'finde-plugin' ),
    );
     
  // Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'estudio', 'finde-plugin' ),
        'description'         => __( 'Estudio de desarrollo de Videojuegos', 'finde-plugin' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        // 'taxonomies'          => array('categoria', 'descuento', 'rubro' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest'        => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'estudio', $args );
 
}
add_action( 'init', 'custom_post_type_estudio', 0 );



/*** CPT AGENDA ***/
function custom_post_type_agenda() {
  // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Agendas', 'Post Type General Name', 'finde-plugin' ),
        'singular_name'       => _x( 'Agenda', 'Post Type Singular Name', 'finde-plugin' ),
        'menu_name'           => __( 'Agendas', 'finde-plugin' ),
        'parent_item_colon'   => __( 'Agenda padre', 'finde-plugin' ),
        'all_items'           => __( 'Todas las Agendas', 'finde-plugin' ),
        'view_item'           => __( 'Ver Agenda', 'finde-plugin' ),
        'add_new_item'        => __( 'Agregar nueva Agenda', 'finde-plugin' ),
        'add_new'             => __( 'Agregar nueva', 'finde-plugin' ),
        'edit_item'           => __( 'Editar Agenda', 'finde-plugin' ),
        'update_item'         => __( 'Actualizar Agenda', 'finde-plugin' ),
        'search_items'        => __( 'Buscar Agenda', 'finde-plugin' ),
        'not_found'           => __( 'No encontrado', 'finde-plugin' ),
        'not_found_in_trash'  => __( 'No encontrado en la papelera', 'finde-plugin' ),
    );
     
  // Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'agenda', 'finde-plugin' ),
        'description'         => __( 'Agenda de eventos', 'finde-plugin' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array('categoria'),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest'        => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'agenda', $args );
 
}
add_action( 'init', 'custom_post_type_agenda', 0 );


/*** HOME - CREAR SLIDESHOW ***/
function wp_showSlides() {
	global $post;
	// the query
	$the_query = new WP_Query( array( 'post_type' => 'slide', 'posts_per_page' => 3 ) );
	// The Loop
	if ( $the_query->have_posts() ) {
		
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
			$color = rwmb_meta( 'mbox_color' );
			$url = rwmb_meta( 'mbox_url' );
				if ( has_post_thumbnail() ) {
					echo '<div class="item" style="background-image: url('. $src[0] .')">';
				} else { 
					echo '<div class="item" style="background: '. $color .'">';
				}
				echo '<div class="container"><div class="row">';
				echo '<div class="col-sm-7"><h1>' .get_the_title(). ' <a href="'. $url .'"><i class="fa fa-arrow-circle-o-right"></i></a></h1><h2><span>' .get_the_excerpt(). '</span></h2></div>';
				echo '';
				echo '<div class="col-sm-5">' .get_the_content(). '</div>';
				echo '</div></div></div>';
				
			}
		} else {
		echo 'No hemos encontrado Info.';
	};
	/* Restore original Post Data */
	wp_reset_postdata();
}

/*** HOME - CREAR SLIDESHOW ***/
function wp_showSlides_fullbg() {
  global $post;
  
  // the query
  $the_query = new WP_Query( array( 'post_type' => 'slide', 'posts_per_page' => 6 ) );
  // The Loop
  if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
      $the_query->the_post();
      $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
      $response_radio = rwmb_meta('mbox_hide_text');
      $color = rwmb_meta( 'mbox_color' );
      $textcolor = rwmb_meta( 'mbox_text_color' );
      $shadowcolor = rwmb_meta( 'mbox_shadow_color' );
      $url = rwmb_meta( 'mbox_url' );
        
        if ( has_post_thumbnail() ) {
          echo '<div class="carousel-item" style="background-image: url('. $src[0] .')">';
        } else { 
          echo '<div class="carousel-item" style="background: '. $color .'">';
        }
        if ($response_radio=="imagen-texto") {
          echo '<div class="container"><div class="row">';
          echo '<div class="col-sm-9">
                  <h1 style="color: '. $textcolor .';text-shadow: 1px 1px 0 '. $shadowcolor .'"><a href="'. $url .'">' .get_the_title(). '</a></h1>
                  <div style="color: '. $textcolor .';text-shadow: 1px 1px 0 '. $shadowcolor .'">' .get_the_content(). '<div>
                  <p style="color: '. $textcolor .';text-shadow: 1px 1px 0 '. $shadowcolor .'">' .get_the_excerpt(). '</p>
                </div>';
          echo '</div></div></div></div>';
        }
        echo '</div>';
    }
    /* Restore original Post Data */
    wp_reset_postdata();
    } else {
    echo 'No hemos encontrado Info.';
  };
}

/*** META BOX ***/
add_filter( 'rwmb_meta_boxes', 'mbox_register_meta_boxes' );
function mbox_register_meta_boxes( $meta_boxes ){
  $prefix = 'mbox_';
  // metas para slider
  $meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id'         => 'mb_slide',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title'      => __( 'Campos adicionales', 'mbox' ),
    // Post types, accept custom post types as well - DEFAULT is 'post'. Can be array (multiple post types) or string (1 post type). Optional.
    'post_types' => 'slide',
    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context'    => 'side',
    // Order of meta box: high (default), low. Optional.
    'priority'   => 'low',
    // Auto save: true, false (default). Optional.
    'autosave'   => true,
    // List of meta fields
    'fields'     => array(
      // BG COLOR
      array(
        'name'    => __( 'Contenido', 'mbox' ),
		    'id'      => "{$prefix}hide_text",
    		'type'    => 'radio',
    		'options' => array(
    			'imagen-texto' => __( 'Imágen + texto', 'mbox' ),
    			'solo-imagen' => __( 'Sólo imágen', 'mbox' ),
          	),
	    ),
      // BG COLOR
      array(
        'name' => __( 'Color de fondo', 'mbox' ),
        'id'   => "{$prefix}color",
        'type' => 'color',
      ),
      // TEXT COLOR
      array(
        'name' => __( 'Color del texto', 'mbox' ),
        'id'   => "{$prefix}text_color",
        'type' => 'color',
      ),
      // SHADOW TEXT COLOR
      array(
        'name' => __( 'Color de la sombra del texto', 'mbox' ),
        'id'   => "{$prefix}shadow_color",
        'type' => 'color',
      ),
      //  URL
      array(
        'name' => __( 'URL', 'mbox' ),
        'id'   => "{$prefix}url",
        'desc' => __( 'URL description', 'mbox' ),
        'type' => 'url',
        'std'  => '',
      ),
    )
  );

# meta_box para catalogo
  $meta_boxes[] = array(
    'id'         => 'mb_finde_catalogo',
    'title'      => __( 'Campos adicionales', 'mbox' ),
    'post_types' => 'catalogo',
    'context'    => 'normal',
    'priority'   => 'low',
    'autosave'   => true,
    'fields'     => array(
      //  URL
      array(
        'name' => __( 'URL', 'mbox' ),
        'id'   => "{$prefix}url",
        'desc' => __( 'Ingrese la url donde se ofrece el producto a la venta', 'mbox' ),
        'type' => 'url',
        'std'  => '',
      ),
      array(
        'name' => __( 'PLATAFORMA', 'mbox' ),
        'id'      => "{$prefix}plataforma",
        'type'    => 'checkbox_list',
        // Options of checkboxes, in format 'value' => 'Label'
        'options' => array(
            'pc'        => 'PC',
            'iOS'       => 'iOS',
            'android'   => 'Android',
            'amazon'    => 'Amazon',
            'consolas'  => 'Consolas',
        ),
        // Display options in a single row?
        'inline' => true,
        // Display "Select All / None" button?
        'select_all_none' => true,
      ),

    )
  );

  # meta_box para estudios
  $meta_boxes[] = array(
    'id'         => 'mb_finde_estudio',
    'title'      => __( 'Campos adicionales', 'mbox' ),
    'post_types' => 'estudio',
    'context'    => 'normal',
    'priority'   => 'low',
    'autosave'   => true,
    'fields'     => array(
      //  URL
      array(
        'name' => __( 'URL', 'mbox' ),
        'id'   => "{$prefix}url",
        'desc' => __( 'Ingrese la url donde se ofrece el producto a la venta', 'mbox' ),
        'type' => 'url',
        'std'  => '',
      ),
      array(
        'name'        => 'Dirección postal',
        'label_description' => 'Dirección postal',
        'id'          => 'address',
        'desc'        => 'Ingrese la dirección postal',
        'type'        => 'text',

        // Placeholder
        'placeholder' => 'Dirección, Ciudad, Provincia de Buenos Aires',
      ),
      array(
        'name'        => 'Fundada',
        'label_description' => 'Año de fundación',
        'id'          => 'founded',
        'desc'        => 'Ingrese el año de fundación',
        'type'        => 'text',
        'size'        => 4,
      ),

    )
  );

  # meta_box para agendas
  $meta_boxes[] = array(
    'id'         => 'agenda',
    'title'      => __( 'Campos adicionales', 'mbox' ),
    'post_types' => 'agenda',
    'context'    => 'normal',
    'priority'   => 'low',
    'autosave'   => true,
    'fields'     => array(
      array(
        'name'       => 'Date picker',
        'id'         => 'fecha_id',
        'type'       => 'datetime',

        // Datetime picker options.
        // For date options, see here http://api.jqueryui.com/datepicker
        // For time options, see here http://trentrichardson.com/examples/timepicker/
        'js_options' => array(
            'stepMinute'      => 15,
            'showTimepicker'  => true,
            'controlType'     => 'select',
            'showButtonPanel' => false,
            'oneLine'         => true,
            'dateFormat'      => 'dd-mm-yy',
        ),
        'save_format' => 'd-m-Y H:i:s',

        // Display inline?
        'inline'     => false,

        // Save value as timestamp?
        'timestamp'  => false,
      ),
      array(
        'name' => __( 'Video', 'mbox' ),
        'id'   => "{$prefix}video",
        'desc' => __( 'Ingrese el enlace corto de Youtube', 'mbox' ),
        'type' => 'url',
        'std'  => '',
      ),

    )
  );
	
  return $meta_boxes;
}


/*** CATALOGOVJ ***/
function wp_archive_catalogovj() {
$args = array(
  'post_type'              => array( 'catalogo' ),
  'order'                  => 'ASC',
  'orderby'                => 'title',
);


// The Query
$query_catalogo = new WP_Query( $args );
// The Loop
if ( $query_catalogo->have_posts() ) {

  while ( $query_catalogo->have_posts() ) {
    $query_catalogo->the_post();
    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
    $url = rwmb_meta( 'mbox_url' );
    $plataformas = rwmb_meta( 'mbox_plataforma' );
    
    $terms = get_the_terms( $post->ID, 'rubro' );
    $dterms = get_the_terms( $post->ID, 'descuento' );

    echo '<div class="grid-item item col-md-3 mb-3"';
    echo 'data-category="';
    foreach( $terms as $term ) echo $term->slug. ' ';
    echo '" data-descuento="';
    foreach( $dterms as $dterm ) echo $dterm->slug. ' ';
    echo '">';
    echo '<a href="' . get_the_permalink() .'" rel="slidemark" class="stretched-link"></a>';
    echo '<div class="grid-item-content card">';
    if ( has_post_thumbnail() ) {
      echo get_the_post_thumbnail( $post_id, 'small', array( 'class' => 'img-fluid card-img-top' ) );
    }
    echo '<div class="card-body">';
    echo '<h5 class="card-title">' . get_the_title() . '</h5>';
    echo '<div class="card-text over-content d-none">' . get_the_content() . '</div>';
    echo '<div class="rubro">';
    foreach( $terms as $term ) echo '<span>' . $term->name . '</span>', ' ';
    foreach ( $plataformas as $plataforma ) {
    echo '<span>' . $plataforma . '</span>', ' ';
    }
    echo '</div></div><small class="card-footer text-muted text-sm">';
    echo 'Por <a href="' . $url .'">Mass Media & Co.</a>';
    echo '</small></div></div>';
  }
} else {
  echo 'No hemos encontrado productos o servicios asociados al catálogo.';
}

// Restore original Post Data
wp_reset_postdata();
}



/*** AGENDA ***/
function wp_archive_agenda() {
$args = array(
  'post_type'              => array( 'agenda' ),
  'order'                  => 'ASC',
  'orderby'                => 'title',
);


// The Query
$query_agenda = new WP_Query( $args );
// The Loop
if ( $query_agenda->have_posts() ) {
  $num = 0;
  echo '<div class="carousel-inner" style="width: 100% !important;">';
  while ( $query_agenda->have_posts() ) {
    $query_agenda->the_post();
    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
    $video = rwmb_meta( 'mbox_video' );
    if ($video != '') {
      echo '<div class="carousel-item"><div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="'.$video.'"></iframe></div></div>';
    } else {
      if ( has_post_thumbnail() ) {
        echo '<div class="carousel-item" style="background: url('. $src[0] .') no-repeat center / cover;"></div>';
      }
    };
  }
  echo '<ul class="list-group preloading">';
  while ( $query_agenda->have_posts() ) {
    $query_agenda->the_post();
    $video = rwmb_meta( 'mbox_video' );
    $fecha = rwmb_meta( 'fecha_id' ); 
    
    echo '<li data-target="#ruleta" data-slide-to="'. ($num++) .'" class="list-group-item" data-event-date="' . $fecha .'">';
    echo '<div>'. $fecha .'</div>';
    echo '<h5>' . get_the_title() . '</h5>';
    echo '<div><small>' . get_the_content() .'</small></div>';
    // echo '<div class="href-goto" data-href="' . get_the_permalink() .'"></div>'; 
    echo '</li>';
  }
  echo '</ul>';
} else {
  echo 'No hemos encontrado eventos programados.';
}

// Restore original Post Data
wp_reset_postdata();
}



/*** AGREGAR SEARCH FORM AL MENU ***/
add_filter('wp_nav_menu_items','add_search_box_to_nav_menu', 10, 2);
function add_search_box_to_nav_menu( $items, $args ) {
    if( $args->theme_location == 'primary' )
        return $items."<li class='menu-header-search'><form action='/' id='searchform' method='get' class='navbar-form navbar-right'><div class='form-group'><input type='text' name='s' id='s' placeholder='Búsqueda' class='form-control'><input type='submit' class='btn btn-default' value='Ir'></div></form></li>";

    return $items;
}

/*** AGREGO SHORTCODE DE VIDEO ***/
function video_embed_shortcode( $atts ) {

  // Attributes
  extract( shortcode_atts(
    array(
      'src' => '',
    ), $atts )
  );

  return '<div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/'.$src.'"></iframe>
          </div>';
}
add_shortcode( 'video', 'video_embed_shortcode' );


/*** AGREGO PAGINADO ***/
function pagination_bar() {
    global $wp_query;
 
    $total_pages = $wp_query->max_num_pages;
 
    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));
 
        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}


/*** AGREGO EVITAR ERRORES DE MBOX POR SI SE DESACTIVA EL PLUGIN ***/
if ( ! function_exists( 'rwmb_the_value' ) ) {
    function rwmb_the_value( $key, $args = '', $post_id = null, $echo = true ) {
        return false;
    }
}

/* Stop Adding Functions Below this Line */
/*
    echo '<div class="col-md-3 mb-3 sort-item" data-event-date="' . $fecha .'">';
    echo '<div class="card">';
    // echo '<a href="' . get_the_permalink() .'" rel="slidemark" class="stretched-link"></a>';
    if ($video != '') {
      echo '<div class="item-video" data-merge="1"><a class="owl-video" href="'.$video.'"></a></div>';
    } else {
      if ( has_post_thumbnail() ) {
        echo get_the_post_thumbnail( $post_id, 'small', array( 'class' => 'img-fluid card-img-top' ) );
      }
    };
    echo '<div class="card-body">';
    echo '<h5 class="card-title">' . get_the_title() . '</h5>';
    echo get_the_content();
    echo '<div class="video">'. $video .'</div>';
    echo '<div>'. $fecha .'</div>';
    echo '</div></div></div>';*/