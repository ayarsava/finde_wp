<?php
/*
Plugin Name: Finde
Description: Plugin generado por Ayar Sava para FINDE | GPBA
*/
/* Start Adding Functions Below this Line */


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
    //'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'show_in_rest'      => true,
    'rewrite'           => array( 'slug' => 'rubro', 'with_front' => false ),
  ];
  register_taxonomy('rubro', ['catalogo'], $args);
}
add_action('init', 'wporg_register_taxonomy_rubro');


function wporg_register_taxonomy_rubro_ed() {
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
    //'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'show_in_rest'      => true,
    'rewrite'           => array( 'slug' => 'rubro_ed', 'with_front' => false ),
  ];
  register_taxonomy('rubro_ed', ['editoriales'], $args);
}
add_action('init', 'wporg_register_taxonomy_rubro_ed');


function wporg_register_taxonomy_descuento_ed() {
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
    'rewrite'           => array( 'slug' => 'descuento_ed', 'with_front' => false ),
  ];
  register_taxonomy('descuento_ed', ['editoriales'], $args);
}
add_action('init', 'wporg_register_taxonomy_descuento_ed');


function wporg_register_taxonomy_rubro_mu() {
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
    //'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'show_in_rest'      => true,
    'rewrite'           => array( 'slug' => 'rubro_mu', 'with_front' => false ),
  ];
  register_taxonomy('rubro_mu', ['music'], $args);
}
add_action('init', 'wporg_register_taxonomy_rubro_mu');


function wporg_register_taxonomy_descuento_mu() {
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
    'rewrite'           => array( 'slug' => 'descuento_mu', 'with_front' => false ),
  ];
  register_taxonomy('descuento_mu', ['music'], $args);
}
add_action('init', 'wporg_register_taxonomy_descuento_mu');


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
      'hierarchical'       => false,
      'menu_position'      => 4,
      'exclude_from_search' => false,
      'supports'           => array( 'title', 'editor', 'author', 'thumbnail'),
      // You can associate this CPT with a taxonomy or custom taxonomy. 
      'taxonomies'          => array('category'),
    );
    register_post_type( 'slide', $args );
}
add_action( 'init', 'slider_init' );


/*** CPT CATALOGO Videojuegos ***/ 
function custom_post_type() {
 
  // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Catalogos', 'Post Type General Name', 'finde-plugin' ),
        'singular_name'       => _x( 'Catalogo', 'Post Type Singular Name', 'finde-plugin' ),
        'menu_name'           => __( 'VJ - Catalogos', 'finde-plugin' ),
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
        'taxonomies'          => array('category', 'descuento', 'rubro', 'post_tag'),
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
        'menu_position'       => 15,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest'        => true,
        'menu_icon'           => 'dashicons-buddicons-activity',
 
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
        'menu_name'           => __( 'VJ - Estudios', 'finde-plugin' ),
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
        'taxonomies'  => array( 'category' ),
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
        'menu_position'       => 15,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest'        => true,
        'menu_icon'           => 'dashicons-buddicons-activity',
 
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
        'taxonomies'  => array( 'category', 'post_tag'),
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

        'timestamp'  => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'agenda', $args );
 
}
add_action( 'init', 'custom_post_type_agenda', 0 );


/*** CPT EDITORIAL ***/
function custom_post_type_editoriales() {
  // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Editoriales', 'Post Type General Name', 'finde-plugin' ),
        'singular_name'       => _x( 'Editorial', 'Post Type Singular Name', 'finde-plugin' ),
        'menu_name'           => __( 'Editoriales', 'finde-plugin' ),
        'parent_item_colon'   => __( 'Editorial padre', 'finde-plugin' ),
        'all_items'           => __( 'Todas las Editoriales', 'finde-plugin' ),
        'view_item'           => __( 'Ver Editorial', 'finde-plugin' ),
        'add_new_item'        => __( 'Agregar nueva Editorial', 'finde-plugin' ),
        'add_new'             => __( 'Agregar nueva', 'finde-plugin' ),
        'edit_item'           => __( 'Editar Editorial', 'finde-plugin' ),
        'update_item'         => __( 'Actualizar Editorial', 'finde-plugin' ),
        'search_items'        => __( 'Buscar Editorial', 'finde-plugin' ),
        'not_found'           => __( 'No encontrado', 'finde-plugin' ),
        'not_found_in_trash'  => __( 'No encontrado en la papelera', 'finde-plugin' ),
    );
     
  // Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'editoriales', 'finde-plugin' ),
        'description'         => __( 'Editoriales', 'finde-plugin' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'  => array( 'post_tag', 'rubro_ed', 'descuento_ed'),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 7,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest'        => true,
        'menu_icon'           => 'dashicons-book',

        'timestamp'  => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'editoriales', $args );
 
}
add_action( 'init', 'custom_post_type_editoriales', 0 );


/*** CPT PRODUCTO Editorial ***/ 
function custom_post_type_productoeditorial() {
 
  // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Productos', 'Post Type General Name', 'finde-plugin' ),
        'singular_name'       => _x( 'Producto', 'Post Type Singular Name', 'finde-plugin' ),
        'menu_name'           => __( 'Productos editoriales', 'finde-plugin' ),
        'parent_item_colon'   => __( 'Producto padre', 'finde-plugin' ),
        'all_items'           => __( 'Todos los Productos', 'finde-plugin' ),
        'view_item'           => __( 'Ver Producto', 'finde-plugin' ),
        'add_new_item'        => __( 'Agregar nuevo Producto', 'finde-plugin' ),
        'add_new'             => __( 'Agregar nuevo', 'finde-plugin' ),
        'edit_item'           => __( 'Editar Producto', 'finde-plugin' ),
        'update_item'         => __( 'Actualizar Producto', 'finde-plugin' ),
        'search_items'        => __( 'Buscar Producto', 'finde-plugin' ),
        'not_found'           => __( 'No encontrado', 'finde-plugin' ),
        'not_found_in_trash'  => __( 'No encontrado en la papelera', 'finde-plugin' ),
    );
     
  // Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'productoeditorial', 'finde-plugin' ),
        'description'         => __( 'Producto editorial', 'finde-plugin' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 7,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest'        => true,
        'menu_icon'           => 'dashicons-book',
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'productoeditorial', $args );
 
}
add_action( 'init', 'custom_post_type_productoeditorial', 0 );


/*** CPT MUSICA ***/
function custom_post_type_music() {
  // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Música', 'Post Type General Name', 'finde-plugin' ),
        'singular_name'       => _x( 'Musica', 'Post Type Singular Name', 'finde-plugin' ),
        'menu_name'           => __( 'Música', 'finde-plugin' ),
        'parent_item_colon'   => __( 'Música padre', 'finde-plugin' ),
        'all_items'           => __( 'Todos los registros de  Música', 'finde-plugin' ),
        'view_item'           => __( 'Ver Música', 'finde-plugin' ),
        'add_new_item'        => __( 'Agregar nueva Música', 'finde-plugin' ),
        'add_new'             => __( 'Agregar nueva', 'finde-plugin' ),
        'edit_item'           => __( 'Editar Música', 'finde-plugin' ),
        'update_item'         => __( 'Actualizar Música', 'finde-plugin' ),
        'search_items'        => __( 'Buscar Música', 'finde-plugin' ),
        'not_found'           => __( 'No encontrado', 'finde-plugin' ),
        'not_found_in_trash'  => __( 'No encontrado en la papelera', 'finde-plugin' ),
    );
     
  // Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'musica', 'finde-plugin' ),
        'description'         => __( 'Música', 'finde-plugin' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'  => array( 'post_tag', 'rubro_mu', 'descuento_mu'),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 16,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest'        => true,
        'menu_icon'           => 'dashicons-format-audio',

        'timestamp'  => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'music', $args );
 
}
add_action( 'init', 'custom_post_type_music', 0 );

/*** CPT BANNER ***/
function custom_post_type_banner() {
  // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Banners', 'Post Type General Name', 'finde-plugin' ),
        'singular_name'       => _x( 'Banner', 'Post Type Singular Name', 'finde-plugin' ),
        'menu_name'           => __( 'Banners', 'finde-plugin' ),
        'parent_item_colon'   => __( 'Banner padre', 'finde-plugin' ),
        'all_items'           => __( 'Todos los Banners', 'finde-plugin' ),
        'view_item'           => __( 'Ver Banner', 'finde-plugin' ),
        'add_new_item'        => __( 'Agregar nuevo Banner', 'finde-plugin' ),
        'add_new'             => __( 'Agregar nuevo', 'finde-plugin' ),
        'edit_item'           => __( 'Editar Banner', 'finde-plugin' ),
        'update_item'         => __( 'Actualizar Banner', 'finde-plugin' ),
        'search_items'        => __( 'Buscar Banner', 'finde-plugin' ),
        'not_found'           => __( 'No encontrado', 'finde-plugin' ),
        'not_found_in_trash'  => __( 'No encontrado en la papelera', 'finde-plugin' ),
    );
     
  // Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'banner', 'finde-plugin' ),
        'description'         => __( 'Banners', 'finde-plugin' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'  => array( 'category'),
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
    register_post_type( 'banner', $args );
 
}
add_action( 'init', 'custom_post_type_banner', 0 );

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

      array(
          'name' => 'Destacado',
          'id'   => 'destacado_id',
          'type' => 'checkbox',
          'std'  => 0, // 0 or 1
      ),
      //  URL
      array(
        'name' => __( 'URL', 'mbox' ),
        'id'   => "{$prefix}url",
        'desc' => __( 'Ingrese la url donde se ofrece el producto a la venta', 'mbox' ),
        'type' => 'url',
        'std'  => '',
      ),
      array(
          'id'      => 'descarga_id',
          'name'    => 'Descargas',
          'type'    => 'fieldset_text',

          // Options: array of key => Label for text boxes
          // Note: key is used as key of array of values stored in the database
          'options' => array(
              'd_name'    => 'Plataforma',
              'd_url' => 'Link de descarga o compra',
          ),

          // Is field cloneable?
          'clone' => true,
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
      //  URL
      array(
        'name' => __( 'Sitio web', 'mbox' ),
        'id'   => "{$prefix}url",
        'desc' => __( 'Ingrese la url donde se ofrece el producto a la venta', 'mbox' ),
        'type' => 'url',
        'std'  => '',
      ),
      //  Instagram
      array(
        'name' => __( 'Instagram', 'mbox' ),
        'id'   => "{$prefix}instagram",
        'type' => 'url',
      ),
      //  Twitter
      array(
        'name' => __( 'Twitter', 'mbox' ),
        'id'   => "{$prefix}twitter",
        'type' => 'url',
      ),
      //  Facebook
      array(
        'name' => __( 'Facebook', 'mbox' ),
        'id'   => "{$prefix}facebook",
        'type' => 'url',
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
          'name' => 'Destacado',
          'id'   => 'destacado_id',
          'type' => 'checkbox',
          'std'  => 0, // 0 or 1
      ),
      array(
        'name'       => 'Date picker',
        'id'         => 'fecha_id',
        'type'       => 'datetime',

        'timestamp'  => true,

        'js_options' => array(
          'dateFormat'      => 'dd-mm-yy',
          'showTimepicker'  => true,
          ),
        'save_format' => 'Y-m-d H:i:s',
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

  # meta_box para editoriales
  $meta_boxes[] = array(
    'id'         => 'mb_finde_editoriales',
    'title'      => __( 'Campos adicionales', 'mbox' ),
    'post_types' => 'editoriales',
    'context'    => 'normal',
    'priority'   => 'low',
    'autosave'   => true,
    'fields'     => array(
        array(
            'name' => 'Destacado',
            'id'   => 'destacado_id',
            'type' => 'checkbox',
            'std'  => 0, // 0 or 1
        ),
        array(
            'id'               => 'image_ed',
            'name'             => 'Imágenes adicionales',
            'type'             => 'image_advanced',

            // Delete image from Media Library when remove it from post meta?
            // Note: it might affect other posts if you use same image for multiple posts
            'force_delete'     => false,

            // Maximum image uploads.
            'max_file_uploads' => 5,

            // Do not show how many images uploaded/remaining.
            'max_status'       => 'false',

            // Image size that displays in the edit page. Possible sizes small,medium,large,original
            'image_size'       => 'thumbnail',
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
        //  URL
        array(
            'name' => __( 'Sitio web', 'mbox' ),
            'id'   => "{$prefix}url",
            'desc' => __( 'Ingrese la url del sitio oficial de la editorial', 'mbox' ),
            'type' => 'url',
            'std'  => '',
        ),
        //  Libreria
        array(
            'name' => __( 'Librería', 'mbox' ),
            'id'   => "{$prefix}libreria",
            'desc' => __( 'Ingrese la url donde se ofrecen productos a la venta', 'mbox' ),
            'type' => 'url',
            'std'  => '',
        ),
        //  Instagram
        array(
            'name' => __( 'Instagram', 'mbox' ),
            'id'   => "{$prefix}instagram",
            'type' => 'url',
        ),
        //  Facebook
        array(
            'name' => __( 'Facebook', 'mbox' ),
            'id'   => "{$prefix}facebook",
            'type' => 'url',
        ),
        //  Twitter
        array(
            'name' => __( 'Twitter', 'mbox' ),
            'id'   => "{$prefix}twitter",
            'type' => 'url',
        ),
        //  Whatsapp
        array(
            'name' => __( 'Whatsapp', 'mbox' ),
            'id'   => "{$prefix}whatsapp",
            'type' => 'number',
        ),


    )
  );

  # meta_box para producto editorial
  $meta_boxes[] = array(
    'id'         => 'mb_finde_productoeditorial',
    'title'      => __( 'Campos adicionales', 'mbox' ),
    'post_types' => 'productoeditorial',
    'context'    => 'normal',
    'priority'   => 'low',
    'autosave'   => true,
    'fields'     => array(
        //  URL
        array(
            'name' => __( 'Url del producto, servicio u oferta', 'mbox' ),
            // prefix es mbox_, o sea que en este caso es mbox_url.
            'id'   => "{$prefix}url",
            'desc' => __( 'Ingrese la url donde se ofrece el producto a la venta', 'mbox' ),
            'type' => 'url',
            'std'  => '',
        ),
    )
  );

  # meta_box para musica
  $meta_boxes[] = array(
    'id'         => 'mb_finde_musica',
    'title'      => __( 'Campos adicionales', 'mbox' ),
    'post_types' => 'music',
    'context'    => 'normal',
    'priority'   => 'low',
    'autosave'   => true,
    'fields'     => array(
      array(
        'name' => 'Destacado',
        'id'   => 'destacado_id',
        'type' => 'checkbox',
        'std'  => 0, // 0 or 1
      ),
      array(
        'id'               => 'image_ed',
        'name'             => 'Imágenes adicionales',
        'type'             => 'image_advanced',

        // Delete image from Media Library when remove it from post meta?
        // Note: it might affect other posts if you use same image for multiple posts
        'force_delete'     => false,

        // Maximum image uploads.
        'max_file_uploads' => 5,

        // Do not show how many images uploaded/remaining.
        'max_status'       => 'false',

        // Image size that displays in the edit page. Possible sizes small,medium,large,original
        'image_size'       => 'thumbnail',
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
      //  URL
      array(
          'name' => __( 'Sitio web', 'mbox' ),
          'id'   => "{$prefix}url",
          'desc' => __( 'Ingrese la url del sitio oficial de la editorial', 'mbox' ),
          'type' => 'url',
          'std'  => '',
      ),
      //  Instagram
      array(
          'name' => __( 'Instagram', 'mbox' ),
          'id'   => "{$prefix}instagram",
          'type' => 'url',
      ),
      //  Facebook
      array(
          'name' => __( 'Facebook', 'mbox' ),
          'id'   => "{$prefix}facebook",
          'type' => 'url',
      ),
      //  Twitter
      array(
          'name' => __( 'Twitter', 'mbox' ),
          'id'   => "{$prefix}twitter",
          'type' => 'url',
      ),
      //  Whatsapp
      array(
          'name' => __( 'Whatsapp', 'mbox' ),
          'id'   => "{$prefix}whatsapp",
          'type' => 'number',
      ),
    )
  );

  // metas para banners
  $meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id'         => 'mb_banner',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title'      => __( 'Campos adicionales', 'mbox' ),
    // Post types, accept custom post types as well - DEFAULT is 'post'. Can be array (multiple post types) or string (1 post type). Optional.
    'post_types' => 'banner',
    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context'    => 'normal',
    // Order of meta box: high (default), low. Optional.
    'priority'   => 'low',
    // Auto save: true, false (default). Optional.
    'autosave'   => true,
    // List of meta fields
    'fields'     => array(
      //  Imagen principal
      array(
        'name'             => 'Imagen desktop',
        'id'               => "{$prefix}imagen_desktop",
        'type'             => 'image',
        'force_delete'     => false,
      ),
      //  Imagen mobile
      array(
        'name'             => 'Imagen mobile',
        'id'               => "{$prefix}imagen_mobile",
        'type'             => 'image',
        'force_delete'     => false,
      ),
    )
  );

  return $meta_boxes;
}


/*** HOME - CREAR SLIDESHOW - VJ***/
function wp_showSlides_fullbg() {
  global $post;
  
  // the query
  $the_query = new WP_Query( array( 
    'post_type' => 'slide', 
    'posts_per_page' => -1,
    'category_name'  => 'videojuegos'
  ) );
  // The Loop
  if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
      $the_query->the_post();
      $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
      $url = rwmb_meta( 'mbox_url' );
        
        if ( has_post_thumbnail() ) {
          echo '<div class="carousel-item" style="background-image: url('. $src[0] .')">';
        } else { 
          echo '<div class="carousel-item" style="background:#009aae">';
        }
        echo '<div class="container">';
        echo '<div class="carousel-caption text-left">';
        echo '<div class="info">';
        echo '<h1><a href="'. $url .'" title="' .get_the_title().'">'.get_the_title().'</a></h1><div>' .wp_trim_words( get_the_content(), 22, '...' ). '</div>';
        echo '</div></div></div></div>';
    }
    /* Restore original Post Data */
    wp_reset_postdata();
    } else {
    echo 'No hemos encontrado Info.';
  };
}

/*** HOME - CREAR SLIDESHOW - EDITORIAL***/
function wp_showSlides_fullbg_editorial() {
  global $post;
  
  // the query
  $the_query = new WP_Query( array( 
    'post_type' => 'slide', 
    'posts_per_page' => -1,
    'category_name'  => 'editorial'
  ) );
  // The Loop
  if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
      $the_query->the_post();
      $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
      $url = rwmb_meta( 'mbox_url' );
        
        if ( has_post_thumbnail() ) {
          echo '<div class="carousel-item" style="background-image: url('. $src[0] .')">';
        } else { 
          echo '<div class="carousel-item">';
        }
        echo '<div class="container">';
        echo '<div class="carousel-caption text-left">';
        echo '<div class="info">';
        echo '<h1><a href="'. $url .'" title="' .get_the_title().'">'.get_the_title().'</a></h1><div>' .wp_trim_words( get_the_content(), 22, '...' ). '</div>';
        echo '</div></div></div></div>';
    }
    /* Restore original Post Data */
    wp_reset_postdata();
    } else {
    echo 'No hemos encontrado Info.';
  };
}

/*** HOME - CREAR SLIDESHOW - MUSICA***/
function wp_showSlides_fullbg_musica() {
  global $post;
  
  // the query
  $the_query = new WP_Query( array( 
    'post_type' => 'slide', 
    'posts_per_page' => -1,
    'category_name'  => 'musica'
  ) );
  // The Loop
  if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
      $the_query->the_post();
      $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
      $url = rwmb_meta( 'mbox_url' );
        
        if ( has_post_thumbnail() ) {
          echo '<div class="carousel-item" style="background-image: url('. $src[0] .')">';
        } else { 
          echo '<div class="carousel-item" style="background:#009aae">';
        }
        echo '<div class="container">';
        echo '<div class="carousel-caption text-left">';
        echo '<div class="info">';
        echo '<h1><a href="'. $url .'" title="' .get_the_title().'">'.get_the_title().'</a></h1><div>' .wp_trim_words( get_the_content(), 22, '...' ). '</div>';
        echo '</div></div></div></div>';
    }
    /* Restore original Post Data */
    wp_reset_postdata();
    } else {
    echo 'No hemos encontrado Info.';
  };
}

/*** CATALOGOVJ ***/
function wp_archive_catalogovj() {
  $args = array(
    'post_type'              => 'catalogo',
    'posts_per_page'         => -1,
    'post_status'            => 'publish',
    'no_found_rows'          => true,
  );

  // The Query
  $query_catalogo = new WP_Query( $args );
  // The Loop
  if ( $query_catalogo->have_posts() ) {

    while ( $query_catalogo->have_posts() ) : $query_catalogo->the_post();

      $estudios = MB_Relationships_API::get_connected( [
        'id'   => 'catalogo_to_estudios',
        'from' => get_the_ID(),
      ] );
      
      $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
      $url = rwmb_meta( 'mbox_url' );
      $descargas = rwmb_meta( 'descarga_id' );
      
      
      $terms = get_the_terms( $post->ID, 'rubro' );
      $dterms = get_the_terms( $post->ID, 'descuento' );

      echo '<div class="grid-item item mb-1"';
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
      echo '<div class="grid-item-content card">';
      if ( has_post_thumbnail() ) {
        echo get_the_post_thumbnail( $post_id, 'small', array( 'class' => 'img-fluid card-img-top' ) );
      }
      echo '<div class="card-body">';
      echo '<h5 class="card-title">' . get_the_title() . '</h5>';
      if ( get_the_excerpt() ) {
        echo '<div class="card-text">' . get_the_excerpt() .'</div>';
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
      if ($estudios) {
        echo '<small class="card-footer text-muted text-sm lista">';
        echo 'Por '; foreach ( $estudios as $estudio ) {
            echo '<span><a href="' . get_the_permalink($estudio) .'" rel="slidemark" class="os">' .$estudio->post_title.'</a></span> ';
        }
        echo '</small>';
      }
      echo '</div></div>';
    endwhile;
    wp_reset_postdata();
  } else {
    echo 'No hemos encontrado productos o servicios asociados al catálogo.';
  }

  // Restore original Post Data
  wp_reset_postdata();
}

/*** CATALOGOVJ ***/
if ( ! function_exists( 'wp_archive_catalogovj_tiny' ) ) {
  function wp_archive_catalogovj_tiny($post_tag) {
    $args = array(
      'post_type'              => 'catalogo',
      'posts_per_page'         => -1,
      'post_status'            => 'publish',
      'no_found_rows'          => true,
      'tag'                    => $post_tag,
    );

    // The Query
    $query_catalogo = new WP_Query( $args );
    // The Loop
    if ( $query_catalogo->have_posts() ) {
      $term = get_term_by('slug', $post_tag, 'post_tag'); 
      $tag_name = $term->name;
      echo '<h3 class="mb-4"><strong>'.$tag_name.'</strong></h3>';
      echo '<div class="slick ntflx mb-5">';
      while ( $query_catalogo->have_posts() ) : $query_catalogo->the_post();

        $estudios = MB_Relationships_API::get_connected( [
          'id'   => 'catalogo_to_estudios',
          'from' => get_the_ID(),
        ] );
        
        $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
        $url = rwmb_meta( 'mbox_url' );
        $descargas = rwmb_meta( 'descarga_id' );
        
        $terms = get_the_terms( $post->ID, 'rubro' );
        $dterms = get_the_terms( $post->ID, 'descuento' );

        echo '<div class="grid-item item mb-1"';
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
        echo '<div class="grid-item-content card ">';
        if ( has_post_thumbnail() ) {
          echo '<img data-lazy="'.$src[0].'" class="img-fluid card-img-top">';
        }
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . get_the_title() . '</h5>';
        if ( get_the_excerpt() ) {
          echo '<div class="card-text">' . wp_trim_words( wp_strip_all_tags( get_the_excerpt() ), 8, '...' ) .'</div>';
        } else {
          echo '<div class="card-text">' . wp_trim_words( wp_strip_all_tags( get_the_content() ), 8, '...' ) .'</div>';
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
        if ($estudios) {
          echo '<small class="card-footer text-muted text-sm lista">';
          echo 'Por '; foreach ( $estudios as $estudio ) {
              echo '<span><a href="' . get_the_permalink($estudio) .'" rel="slidemark" class="os">' .$estudio->post_title.'</a></span> ';
          }
          echo '</small>';
        }
        echo '</div></div>';
      endwhile;
      echo '</div>';
      wp_reset_postdata();
    }
  }
}

if ( ! function_exists( 'wp_archive_catalogovj_bytag' ) ) {
  function wp_archive_catalogovj_bytag($post_tag) {
    $args = array(
      'post_type'              => 'catalogo',
      'posts_per_page'         => -1,
      'post_status'            => 'publish',
      'no_found_rows'          => true,
      'tag'                    => $post_tag,
    );

    // The Query
    $query_catalogo = new WP_Query( $args );
    // The Loop
    if ( $query_catalogo->have_posts() ) {
      $term = get_term_by('slug', $post_tag, 'post_tag'); 
      $tag_name = $term->name;
      echo '<h3 class="mb-4"><strong>'.$tag_name.'</strong></h3>';
      echo '<div class="slick ntflx mb-5">';
      while ( $query_catalogo->have_posts() ) : $query_catalogo->the_post();

        $estudios = MB_Relationships_API::get_connected( [
          'id'   => 'catalogo_to_estudios',
          'from' => get_the_ID(),
        ] );
        
        $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
        $url = rwmb_meta( 'mbox_url' );
        $descargas = rwmb_meta( 'descarga_id' );
        
        $terms = get_the_terms( $post->ID, 'rubro' );
        $dterms = get_the_terms( $post->ID, 'descuento' );

        echo '<div class="grid-item item mb-1"';
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
        echo '<div class="grid-item-content card ">';
        if ( has_post_thumbnail() ) {
          echo '<img data-lazy="'.$src[0].'" class="img-fluid card-img-top">';
        }
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . get_the_title() . '</h5>';
        if ( get_the_excerpt() ) {
          echo '<div class="card-text">' . wp_trim_words( wp_strip_all_tags( get_the_excerpt() ), 8, '...' ) .'</div>';
        } else {
          echo '<div class="card-text">' . wp_trim_words( wp_strip_all_tags( get_the_content() ), 8, '...' ) .'</div>';
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
        if ($estudios) {
          echo '<small class="card-footer text-muted text-sm lista">';
          echo 'Por '; foreach ( $estudios as $estudio ) {
              echo '<span><a href="' . get_the_permalink($estudio) .'" rel="slidemark" class="os">' .$estudio->post_title.'</a></span> ';
          }
          echo '</small>';
        }
        echo '</div></div>';
      endwhile;
      echo '</div>';
      wp_reset_postdata();
    }
  }
}


/*** CATALOGO EDITORIAL ***/
if ( ! function_exists( 'wp_archive_destacadoed' ) ) {
  function wp_archive_catalogoed() {
    $args = array(
      'post_type'              => 'editoriales',
      'posts_per_page'         => -1,
      'post_status'            => 'publish',
      'no_found_rows'          => true,
    );

    // The Query
    $query_catalogo = new WP_Query( $args );
    // The Loop
    if ( $query_catalogo->have_posts() ) {

      while ( $query_catalogo->have_posts() ) : $query_catalogo->the_post();

          $productos = MB_Relationships_API::get_connected( [
              'id'   => 'productoeditorial_to_editoriales',
              'to' => get_the_ID(),
          ] );

          $url = rwmb_meta( 'mbox_url' );
          $images = rwmb_meta( 'image_ed', array( 'size' => 'medium' ) );
          $instagram = rwmb_meta( 'mbox_instagram' );
          $twitter = rwmb_meta( 'mbox_twitter' );
          $facebook = rwmb_meta( 'mbox_facebook' );
          $libreria = rwmb_meta( 'mbox_libreria' );
          $whatsapp = rwmb_meta( 'mbox_whatsapp' );


          $terms = get_the_terms( $post->ID, 'rubro_ed' );
          $dterms = get_the_terms( $post->ID, 'descuento_ed' );

          echo '<div class="grid-item item mb-1"';
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
          // slick
          if ($images) {
          echo '<div class="galeria-slick">';
          foreach ( $images as $image ) {
              echo '<a href="' . get_the_permalink() .'"><img data-lazy="'. $image['url']. '"></a>';
          }    
          echo '</div>';
          }
          echo '<div class="grid-item-content card">';
          echo '<a href="' . get_the_permalink() .'" rel="slidemark" class="stretched-link"></a>';
          echo '<div class="card-body">';
          echo '<h5 class="card-title">' . get_the_title() . '</h5>';
          if ( get_the_excerpt() ) {
              echo '<div class="card-text">' . get_the_excerpt() .'</div>';
          } else {
              echo '<div class="card-text">' . wp_trim_words( wp_strip_all_tags( get_the_content() ), 18, '...' ) .'</div>';
          }
          
          if ($terms) {
              echo '<div class="rubro_ed">';
              foreach( $terms as $term ) { echo '<a href="'.get_term_link($term->slug, 'rubro_ed').'" class="badge bg-primary mt-1 os">'.$term->name.'</a></span>', ' ';}
              echo '</div>';
          }
          if ($dterms) {
              echo '<div class="descuento_ed">';
              foreach( $dterms as $term ) { echo '<a href="'.get_term_link($term->slug, 'descuento_ed').'" class="badge badge-dark mt-1 os">'.$term->name.'</a></span>', ' ';}
              echo '</div>';
          }
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
          
          echo '</div>';
          
          if ($productos) {
              echo '<small class="card-footer text-muted text-sm lista">';
              echo 'Productos u ofertas:<ul>'; foreach ( $productos as $producto ) {
              echo '<li><span><strong>' .$producto->post_title.'</strong></span></li> ';
              }
              echo '</ul></small>';
          }
          echo '</div></div>';
      endwhile;
      wp_reset_postdata();
    } else {
      echo 'No hemos encontrado productos o servicios asociados al catálogo.';
    }

    // Restore original Post Data
    wp_reset_postdata();
  }
}

/*** CATALOGO MUSICA ***/
if ( ! function_exists( 'wp_archive_catalogomu' ) ) {
  function wp_archive_catalogomu() {
      $term = get_term_by( 'slug', get_query_var('term'), get_query_var('taxonomy') );
      $term_id = $term->term_id;
      $taxonomy_name = 'rubro_mu';
      $termchildren = get_term_children( $term_id, $taxonomy_name );
                          

      $args = array(
          'post_type'              => 'music',
          'posts_per_page'         => -1,
          'post_status'            => 'publish',
          'no_found_rows'          => true,
          'tax_query' => array(
          array(
              'taxonomy' => 'rubro_mu',
              'field' => 'term_id', 
              'terms' => $term_id, /// Where term_id of Term 1 is "1".
              'include_children' => true
              )
          )
      );

    // The Query
    $query_catalogo = new WP_Query( $args );
    // The Loop
    if ( $query_catalogo->have_posts() ) {

      while ( $query_catalogo->have_posts() ) : $query_catalogo->the_post();

          $url = rwmb_meta( 'mbox_url' );
          $images = rwmb_meta( 'image_ed', array( 'size' => 'medium' ) );
          $instagram = rwmb_meta( 'mbox_instagram' );
          $twitter = rwmb_meta( 'mbox_twitter' );
          $facebook = rwmb_meta( 'mbox_facebook' );
          $libreria = rwmb_meta( 'mbox_libreria' );
          $whatsapp = rwmb_meta( 'mbox_whatsapp' );


          $terms = get_the_terms( $post->ID, 'rubro_mu' );
          $dterms = get_the_terms( $post->ID, 'descuento_mu' );

          echo '<div class="grid-item item mb-1"';
          if ($terms) {
              echo ' data-category="';
              foreach( $terms as $term ) echo $term->slug. ' ';
              echo '" ';
          }
          if ($dterms) {
              echo ' data-descuento="';
              foreach( $dterms as $dterm ) echo $dterm->slug. ' ';
              echo '"';
          }
          echo '>';
          // slick
          if ($images) {
              echo '<div class="galeria-slick">';
              foreach ( $images as $image ) {
                  echo '<a href="' . get_the_permalink() .'"><img data-lazy="'. $image['url']. '"></a>';
              }    
              echo '</div>';
          }
          echo '<div class="grid-item-content card">';
          echo '<a href="' . get_the_permalink() .'" rel="slidemark" class="stretched-link"></a>';
          echo '<div class="card-body">';
          echo '<h5 class="card-title">' . get_the_title() . '</h5>';
          if ( get_the_excerpt() ) {
              echo '<div class="card-text">' . get_the_excerpt() .'</div>';
          } else {
              echo '<div class="card-text">' . wp_trim_words( wp_strip_all_tags( get_the_content() ), 18, '...' ) .'</div>';
          }
          
          if ($terms) {
              echo '<div class="rubro_mu">';
              foreach( $terms as $term ) { echo '<span><a href="'.get_term_link($term->slug, 'rubro_mu').'" class="badge bg-primary mt-1 os">'.$term->name.'</a></span>', ' ';}
              echo '</div>';
          }
          if ($dterms) {
              echo '<div class="descuento_mu">';
              foreach( $dterms as $term ) { echo '<a href="'.get_term_link($term->slug, 'descuento_mu').'" class="badge badge-dark mt-1 os">'.$term->name.'</a></span>', ' ';}
              echo '</div>';
          }
          if ($url || $instagram || $facebook || $twitter) {
              echo '<div class="contacto mt-2">';
              if ($url) { echo '<li class="list-inline-item"><a href="'. $url . '" target="_blank" class="os"><i class="fas fa-globe-americas"></i></a></li>';}
              if ($libreria) { echo '<li class="list-inline-item"><a href="'. $libreria . '" target="_blank" class="os"><i class="fas fa-shopping-cart"></i></a></li>';}
              if ($instagram) { echo '<li class="list-inline-item"><a href="'. $instagram. '" target="_blank" class="os"><i class="fab fa-instagram"></i></a></li>';}
              if ($facebook) { echo '<li class="list-inline-item"><a href="'. $facebook. '" target="_blank" class="os"><i class="fab fa-facebook"></i></a></li>';}
              if ($twitter) { echo '<li class="list-inline-item"><a href="'. $twitter. '" target="_blank" class="os"><i class="fab fa-twitter"></i></a></li>';}
              if ($whatsapp) { echo '<li class="list-inline-item"><a href="https://api.whatsapp.com/send?phone='. $whatsapp . '" target="_blank" class="os"><i class="fab fa-whatsapp"></i></a></li>';}
              echo '</div>';
          }
          
          echo '</div><!--End .card-body-->';
          
          if ($productos) {
              echo '<small class="card-footer text-muted text-sm lista">';
              echo 'Productos u ofertas:<ul>'; foreach ( $productos as $producto ) {
              echo '<li><span><strong>' .$producto->post_title.'</strong></span></li> ';
              }
              echo '</ul></small>';
          }
          echo '</div></div>';
      endwhile;
      wp_reset_postdata();
    } else {
      echo 'No hemos encontrado productos o servicios asociados al catálogo.';
    }

    // Restore original Post Data
    wp_reset_postdata();
  }
}

/*** JUEGO DESTACADO ***/
if ( ! function_exists( 'wp_archive_destacadovj' ) ) {
  function wp_archive_destacadovj() {
    $args = array(
      'post_type'              => 'catalogo',
      'meta_query'=> array(
          array(
              'key'            => 'destacado_id', // this key will change!
              'compare'        => '=',
              'value'          => '1',
              'type'           => 'BINARY',
          )
      ),
      'order'                  => 'ASC',
      'orderby'                => 'title',
    );

    // The Query
    $query_catalogo = new WP_Query( $args );
    // The Loop
    if ( $query_catalogo->have_posts() ) {

      while ( $query_catalogo->have_posts() ) : $query_catalogo->the_post();
        $estudios = MB_Relationships_API::get_connected( [
          'id'   => 'catalogo_to_estudios',
          'from' => get_the_ID(),
        ] );
        
        $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
        $url = rwmb_meta( 'mbox_url' );
        $descargas = rwmb_meta( 'descarga_id' );
        
        
        $terms = get_the_terms( $post->ID, 'rubro' );
        $dterms = get_the_terms( $post->ID, 'descuento' );


        echo '<div class="carousel-item card">';
          echo '<div class="row no-gutters">';
            if ($src) {
            echo '<div class="col-md-7">';
            echo '<div class="bg-image h-100" style="background-image: url('. $src[0] .');background-size:cover; background-position:center center;"></div>';
            }
            echo '</div>';
            echo '<div class="col-md-8 p-5" style="background:#CCC">';
              echo '<div class="lead">JUEGO DEL DÍA</div>';
              echo '<h1>' . get_the_title() . '</h1>';
              if ( get_the_excerpt() ) {
                echo '<div>' . get_the_excerpt() .'</div>';
              } else {
                echo '<div>' . wp_trim_words( wp_strip_all_tags( get_the_content() ), 18, '...' ) .'</div>';
              }
              echo '<a href="' . get_the_permalink() .'" rel="slidemark" class="stretched-link"></a>';
            echo '</div>';
          echo '</div>';
        echo '</div>';

        
      endwhile;
      wp_reset_postdata();
    } else {
      echo 'No hemos encontrado productos o servicios asociados al catálogo.';
    }

    // Restore original Post Data
    wp_reset_postdata();
  }
}

/*** EDITORIAL DESTACADO ***/
if ( ! function_exists( 'wp_archive_destacadoed' ) ) {
  function wp_archive_destacadoed() {
    $args = array(
      'post_type'              => 'editoriales',
      'meta_query'=> array(
          array(
              'key'            => 'destacado_id', // this key will change!
              'compare'        => '=',
              'value'          => '1',
              'type'           => 'BINARY',
          )
      ),
      'order'                  => 'ASC',
      'orderby'                => 'title',
    );

    // The Query
    $query_catalogo = new WP_Query( $args );
    // The Loop
    if ( $query_catalogo->have_posts() ) {

      while ( $query_catalogo->have_posts() ) : $query_catalogo->the_post();


        $estudios = MB_Relationships_API::get_connected( [
          'id'   => 'productoeditorial_to_editoriales',
          'from' => get_the_ID(),
        ] );
        
        $url = rwmb_meta( 'mbox_url' );
        $descargas = rwmb_meta( 'descarga_id' );
        
        $images = rwmb_meta( 'image_ed', array( 'size' => 'large' ) );

        $terms = get_the_terms( $post->ID, 'rubro_ed' );
        $dterms = get_the_terms( $post->ID, 'descuento_ed' );


        echo '<div class="carousel-item card">';
          echo '<div class="row no-gutters">';
          if ($images) {
          echo '<div class="col-md-7 galeria-slick" style="min-height:300px;">';
              // slick
              foreach ( $images as $image ) {
              echo '<a href="#"><img src="', $image['url'], '"></a>';
              }    
          echo '</div>';
          }
            echo '<div class="col-md-8 p-5" style="background:#CCC">';
              echo '<div class="lead">EDITORIAL DEL DÍA</div>';
              echo '<h1>' . get_the_title() . '</h1>';
              if ( get_the_excerpt() ) {
                echo '<div>' . get_the_excerpt() .'</div>';
              } else {
                echo '<div>' . wp_trim_words( wp_strip_all_tags( get_the_content() ), 18, '...' ) .'</div>';
              }
              echo '<a href="' . get_the_permalink() .'" rel="slidemark" class="stretched-link"></a>';
            echo '</div>';
          echo '</div>';
        echo '</div>';

        
      endwhile;
      wp_reset_postdata();
    } else {
      echo 'No hemos encontrado productos o servicios asociados al catálogo.';
    }

    // Restore original Post Data
    wp_reset_postdata();
  }
}

/*** AGENDA ***/
if ( ! function_exists( 'wp_archive_agenda' ) ) {
  function wp_archive_agenda($post_category) {

    $args = array(
        'post_type'             => 'agenda',
        'posts_per_page'        => -1,
        'category_name'         => $post_category,
        'meta_query'            => array(
            'fecha_clause'      => array(
                'key'           => 'fecha_id',
            ),
            /*'destacado_clause'  => array(
                'key'           => 'destacado_id',
            ), */
        ),
        'orderby'               => array( 
            //'destacado_clause'  => 'DESC',
            'fecha_clause'      => 'ASC',
        ),
    );

    // The Query
    $query_agenda = new WP_Query( $args );

    if ( $query_agenda->have_posts() ) { 
      echo '<div class="slick agenda slider-nav">';
      /* Start the Loop */
      $count = 1;
      while ( $query_agenda->have_posts() ) : $query_agenda->the_post();

          /*
              * Include the Post-Type-specific template for the content.
              * If you want to override this in a child theme, then include a file
              * called content-___.php (where ___ is the Post Type name) and that will be used instead.
              */
          get_template_part( 'template-parts/content', get_post_type() );

      endwhile;
      echo '</div>';
    } else {
      get_template_part( 'template-parts/content', 'none' );    
    }
  }
}

/*** AGENDA DESTACADO***/
if ( ! function_exists( 'wp_archive_agenda_destacado' ) ) {
  function wp_archive_agenda_destacado($post_category) {

    $args = array(
        'post_type'             => 'agenda',
        'posts_per_page'        => -1,
        'category_name'         => $post_category,
        'meta_query' => array(
          'relation' => 'AND',
          array(
            'fecha_clause'      => array(
                'key'           => 'fecha_id',
            ),
            'destacado_clause'  => array(
                'key'           => 'destacado_id',
                'value'         => 1,
            )
          )
        ),
        'orderby'               => array( 
            'destacado_clause'  => 'DESC',
            'fecha_clause'      => 'ASC',
        ),
    );

    // The Query
    $query_agenda = new WP_Query( $args );

    if ( $query_agenda->have_posts() ) { 
      echo '<div id="agenda-destacada" class="slick slider-nav">';
      /* Start the Loop */
      $count = 1;
      while ( $query_agenda->have_posts() ) : $query_agenda->the_post();

      /* grab the url for the full size featured image */
      $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
      $fecha = rwmb_meta( 'fecha_id' ); 
      $destacado = rwmb_meta( 'destacado_id' );
      echo '<div class="item">';
        echo '<div class="mb-4 ';
          if ($destacado == 1) { 
            echo 'destacado';
          };
          echo '"';
          echo 'data-target="'. date('d-m', $fecha).'">';
          echo '<div class="card h-100">';
            if ($featured_img_url) { 
              echo '<div class="img-wrapper img-fluid card-img-top" style="background-image: url('. esc_url($featured_img_url) .');" background-size:cover;background-position: center center; height:160px;position:relative;">';
              echo '</div>';
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
              echo '<a href="'. get_permalink() .'" class="stretched-link"></a>';
              echo '<div class="row">';
                echo '<div class="col-md-5">';
                  echo '<div class="fecha"><span class="dia">'.date('d-m', $fecha).'</span><span class="hora">'. date('H:i', $fecha).'hs</span></div>';
                echo '</div>';
                echo '<div class="col-md-10">';
                  echo the_title( '<h5 class="card-title">', '</h5>' );
                  if ( get_the_excerpt() ) {
                    echo '<div class="card-text">' . wp_trim_words( wp_strip_all_tags( get_the_excerpt() ), 18, '...' ) .'</div>';
                  } else {
                    echo '<div class="card-text">' . wp_trim_words( wp_strip_all_tags( get_the_content() ), 18, '...' ) .'</div>';
                  }
                echo '</div>';
              echo '</div>';
            echo '</div>';
          echo '</div>';
        echo '</div>';
      echo '</div>';

      endwhile;
      echo '</div>';
    } else {
      get_template_part( 'template-parts/content', 'none' );    
    }
  }
}

/*** AGENDA POR DÍA, POR CATEGORIA***/
if ( ! function_exists( 'wp_archive_agenda_por_dia' )) {
  function wp_archive_agenda_por_dia($post_category) {
    $the_query = new WP_Query([
      'post_type'              => 'agenda',
      'category_name'          => $post_category,
      'posts_per_page'         => - 1,
      'meta_query'             => array(
          'fecha_clause'       => array(
              'key'            => 'fecha_id',
          ),
      ),
      'orderby'               => array( 
          'fecha_clause'      => 'ASC',
      ),
    ]);

    // We are creating new multidimensional array
    $todos_los_eventos = [];

    while ( $the_query->have_posts() ) : $the_query->the_post();
        $fecha = rwmb_meta( 'fecha_id' ); 
        $fecha_evento = date('l d-m', $fecha);
        
        $todos_los_eventos[ $fecha_evento ][] = $the_query->post;
    endwhile;
    wp_reset_query();

    // And to print this:
    
    echo '<h2 class="font-weight-bold d-inline-block mr-3"><i class="fas fa-calendar-alt"></i>   Programación completa </h2><div class="pasadia">';
    foreach ( $todos_los_eventos as $fecha_evento => $eventos ) :
      echo '<h3>'.$fecha_evento.'</h3>';
    endforeach;
    echo '</div><hr>';
    echo '<div id="agenda-por-dia" class="">';
    foreach ( $todos_los_eventos as $fecha_evento => $eventos ) :
      
        echo '<div class="row">';
            foreach ( $eventos as $evento ) :
              $excerpt = get_the_excerpt($evento->ID);
              $featured_img_url = get_the_post_thumbnail_url($evento->ID,'full'); 
              $excerpt = get_the_excerpt($evento->ID);      
              echo '<div class="col-15 evento">';
                  echo '<div class="row py-4 position-relative">';
                      echo '<a href="'. get_permalink($evento->ID).'" class="stretched-link"></a>';
                      echo '<div class="col-md-3 fecha">';
                          echo '<span class="dia">'.date('d-m', get_post_field('fecha_id',$evento->ID)).'</span>';
                          echo '<span class="hora">'.date('H:i', get_post_field('fecha_id',$evento->ID)).'hs</span>';
                      echo '</div>';

                      if ($featured_img_url) { 
                          echo '<div class="col-md-3 img-wrapper img-fluid" style="background-image: url('. esc_url($featured_img_url) .');">';
                          if ($destacado == 1) { echo '<div class="ribbon ribbon-top-left"><span>DESTACADO</span></div>'; }
                          echo '</div>';
                      }
                      
                      echo '<div class="col-md-9 pl-md-4 data">';
                          if ($featured_img_url) { 
                            echo '<h4 class="card-title font-weight-bold">'.$evento->post_title.'</h4>';
                          } else {
                            echo '<h2 class="card-title font-weight-bold">'.$evento->post_title.'</h2>';
                          }
                          if ( $excerpt ) {
                          echo '<div class="card-text mb-2">' . $excerpt .'</div>';
                          } else {
                          echo '<div class="card-text mb-2">' . wp_trim_words( wp_strip_all_tags( $excerpt ), 18, '...' ) .'</div>';
                          }
                          $post_tags = get_the_tags($evento->ID);
                          if ( $post_tags ) {
                              echo '<div class="etiquetas">';
                              foreach( $post_tags as $tag ) {
                              echo '<span class="badge badge-primary mr-2">' .$tag->name . '</span>'; 
                              }
                              echo '</div>';
                          }
                      echo '</div>';
                  echo '</div>';
              echo '</div><!-- fin-de-item -->';
            endforeach;
        echo '</div>';
    endforeach;
    echo '</div>';
  }
}

/*** EN VIVO ***/
if ( ! function_exists( 'wp_archive_vivo' ) ) {
  function wp_archive_vivo($post_category) {

    $args = array(
        'post_type'             => 'vivo',
        'posts_per_page'        => -1,
        'category_name'         => $post_category,
        'meta_query' => array(
          'relation' => 'AND',
          array(
            'fecha_clause'      => array(
                'key'           => 'fecha_id',
            ),
            'destacado_clause'  => array(
                'key'           => 'destacado_id',
                'value'         => 1,
            )
          )
        ),
        'orderby'               => array( 
            'destacado_clause'  => 'DESC',
            'fecha_clause'      => 'ASC',
        ),
    );

    // The Query
    $query_agenda = new WP_Query( $args );

    if ( $query_agenda->have_posts() ) { 
      echo '<div id="agenda-destacada" class="slick slider-nav">';
      /* Start the Loop */
      $count = 1;
      while ( $query_agenda->have_posts() ) : $query_agenda->the_post();

      /* grab the url for the full size featured image */
      $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
      $fecha = rwmb_meta( 'fecha_id' ); 
      $destacado = rwmb_meta( 'destacado_id' );
      echo '<div class="item">';
        echo '<div class="mb-4 ';
          if ($destacado == 1) { 
            echo 'destacado';
          };
          echo '"';
          echo 'data-target="'. date('d-m', $fecha).'">';
          echo '<div class="card h-100">';
            if ($featured_img_url) { 
              echo '<div class="img-wrapper img-fluid card-img-top" style="background-image: url('. esc_url($featured_img_url) .');" background-size:cover;background-position: center center; height:160px;position:relative;">';
              echo '</div>';
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
              echo '<a href="'. get_permalink() .'" class="stretched-link"></a>';
              echo '<div class="row">';
                echo '<div class="col-md-5">';
                  echo '<div class="fecha"><span class="dia">'.date('d-m', $fecha).'</span><span class="hora">'. date('H:i', $fecha).'hs</span></div>';
                echo '</div>';
                echo '<div class="col-md-10">';
                  echo the_title( '<h5 class="card-title">', '</h5>' );
                  if ( get_the_excerpt() ) {
                    echo '<div class="card-text">' . wp_trim_words( wp_strip_all_tags( get_the_excerpt() ), 18, '...' ) .'</div>';
                  } else {
                    echo '<div class="card-text">' . wp_trim_words( wp_strip_all_tags( get_the_content() ), 18, '...' ) .'</div>';
                  }
                echo '</div>';
              echo '</div>';
            echo '</div>';
          echo '</div>';
        echo '</div>';
      echo '</div>';

      endwhile;
      echo '</div>';
    } else {
      get_template_part( 'template-parts/content', 'none' );    
    }
  }
}

/*** EN VIVO ***/
if ( ! function_exists( 'wp_archive_banners' ) ) {
  function wp_archive_banners($post_category) {

    $args = array(
        'post_type'             => 'banners',
        'posts_per_page'        => -1,
        'category_name'         => $post_category,
        'meta_query' => array(
          'relation' => 'AND',
          array(
            'fecha_clause'      => array(
                'key'           => 'fecha_id',
            ),
            'destacado_clause'  => array(
                'key'           => 'destacado_id',
                'value'         => 1,
            )
          )
        ),
        'orderby'               => array( 
            'destacado_clause'  => 'DESC',
            'fecha_clause'      => 'ASC',
        ),
    );

    // The Query
    $query_agenda = new WP_Query( $args );

    if ( $query_agenda->have_posts() ) { 
      echo '<div id="agenda-destacada" class="slick slider-nav">';
      /* Start the Loop */
      $count = 1;
      while ( $query_agenda->have_posts() ) : $query_agenda->the_post();

      /* grab the url for the full size featured image */
      $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
      $fecha = rwmb_meta( 'fecha_id' ); 
      $destacado = rwmb_meta( 'destacado_id' );
      echo '<div class="item">';
        echo '<div class="mb-4 ';
          if ($destacado == 1) { 
            echo 'destacado';
          };
          echo '"';
          echo 'data-target="'. date('d-m', $fecha).'">';
          echo '<div class="card h-100">';
            if ($featured_img_url) { 
              echo '<div class="img-wrapper img-fluid card-img-top" style="background-image: url('. esc_url($featured_img_url) .');" background-size:cover;background-position: center center; height:160px;position:relative;">';
              echo '</div>';
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
              echo '<a href="'. get_permalink() .'" class="stretched-link"></a>';
              echo '<div class="row">';
                echo '<div class="col-md-5">';
                  echo '<div class="fecha"><span class="dia">'.date('d-m', $fecha).'</span><span class="hora">'. date('H:i', $fecha).'hs</span></div>';
                echo '</div>';
                echo '<div class="col-md-10">';
                  echo the_title( '<h5 class="card-title">', '</h5>' );
                  if ( get_the_excerpt() ) {
                    echo '<div class="card-text">' . wp_trim_words( wp_strip_all_tags( get_the_excerpt() ), 18, '...' ) .'</div>';
                  } else {
                    echo '<div class="card-text">' . wp_trim_words( wp_strip_all_tags( get_the_content() ), 18, '...' ) .'</div>';
                  }
                echo '</div>';
              echo '</div>';
            echo '</div>';
          echo '</div>';
        echo '</div>';
      echo '</div>';

      endwhile;
      echo '</div>';
    } else {
      get_template_part( 'template-parts/content', 'none' );    
    }
  }
}

/*** AGREGAR SEARCH FORM AL MENU ***/
add_filter('wp_nav_menu_items','add_search_box_to_nav_menu', 10, 2);
function add_search_box_to_nav_menu( $items, $args ) {
    if( $args->theme_location == 'primary' )
        return $items."<li class='menu-header-search'><form action='/' id='searchform' method='get' class='navbar-form navbar-right'><div class='form-group'><input type='text' name='s' id='s' placeholder='Búsqueda' class='form-control'><input type='submit' class='btn btn-default' value='Ir'></div></form></li>";

    return $items;
}

/*** AGREGO EVITAR ERRORES DE MBOX POR SI SE DESACTIVA EL PLUGIN ***/
if ( ! function_exists( 'rwmb_the_value' ) ) {
    function rwmb_the_value( $key, $args = '', $post_id = null, $echo = true ) {
        return false;
    }
}
