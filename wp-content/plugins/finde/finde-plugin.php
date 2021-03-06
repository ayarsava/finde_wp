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

/*** Taxonomias para Producto editorial | Tipo ***/
function wporg_register_taxonomy_tipo_pe() {
  $labels = [
    'name'              => _x('Tipo', 'taxonomy general name'),
    'singular_name'     => _x('Tipo', 'taxonomy singular name'),
    'search_items'      => __('Buscar tipos'),
    'all_items'         => __('Todos los tipos'),
    'parent_item'       => __('Tipo padre'),
    'parent_item_colon' => __('Tipo padre:'),
    'edit_item'         => __('Editar tipos'),
    'update_item'       => __('Actualizar tipos'),
    'add_new_item'      => __('Agregar nuevo tipo'),
    'new_item_name'     => __('Nuevo nombre de tipo '),
    'menu_name'         => __('Tipo'),
  ];
  $args = [
    'hierarchical'      => true, // make it hierarchical (like categories)
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'show_in_rest'      => true,
    'rewrite'           => array( 'slug' => 'tipo_pe', 'with_front' => false ),
  ];
  register_taxonomy('tipo_pe', ['productoeditorial'], $args);
}
add_action('init', 'wporg_register_taxonomy_tipo_pe');


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

/*** Taxonomias para Producto musica | Tipo ***/
function wporg_register_taxonomy_tipo_mu() {
  $labels = [
    'name'              => _x('Tipo', 'taxonomy general name'),
    'singular_name'     => _x('Tipo', 'taxonomy singular name'),
    'search_items'      => __('Buscar tipos'),
    'all_items'         => __('Todos los tipos'),
    'parent_item'       => __('Tipo padre'),
    'parent_item_colon' => __('Tipo padre:'),
    'edit_item'         => __('Editar tipos'),
    'update_item'       => __('Actualizar tipos'),
    'add_new_item'      => __('Agregar nuevo tipo'),
    'new_item_name'     => __('Nuevo nombre de tipo '),
    'menu_name'         => __('Tipo'),
  ];
  $args = [
    'hierarchical'      => true, // make it hierarchical (like categories)
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'show_in_rest'      => true,
    'rewrite'           => array( 'slug' => 'tipo_mu', 'with_front' => false ),
  ];
  register_taxonomy('tipo_mu', ['productomusica'], $args);
}
add_action('init', 'wporg_register_taxonomy_tipo_mu');


function wporg_register_taxonomy_rubro_di() {
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
    'rewrite'           => array( 'slug' => 'rubro_di', 'with_front' => false ),
  ];
  register_taxonomy('rubro_di', ['disenio'], $args);
}
add_action('init', 'wporg_register_taxonomy_rubro_di');


function wporg_register_taxonomy_descuento_di() {
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
    'rewrite'           => array( 'slug' => 'descuento_di', 'with_front' => false ),
  ];
  register_taxonomy('descuento_di', ['disenio'], $args);
}
add_action('init', 'wporg_register_taxonomy_descuento_di');


/*** Taxonomias para Audiovisual | Sección ***/
function wporg_register_taxonomy_seccion() {
  $labels = [
    'name'              => _x('Sección', 'taxonomy general name'),
    'singular_name'     => _x('Sección', 'taxonomy singular name'),
    'search_items'      => __('Buscar secciones'),
    'all_items'         => __('Todas las secciones'),
    'parent_item'       => __('Sección padre'),
    'parent_item_colon' => __('Sección padre:'),
    'edit_item'         => __('Editar secciones'),
    'update_item'       => __('Actualizar secciones'),
    'add_new_item'      => __('Agregar nueva sección'),
    'new_item_name'     => __('Nuevo nombre de sección '),
    'menu_name'         => __('Sección'),
  ];
  $args = [
    'hierarchical'      => true, // make it hierarchical (like categories)
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'show_in_rest'      => true,
    'rewrite'           => array( 'slug' => 'seccion', 'with_front' => false ),
  ];
  register_taxonomy('seccion', ['audiovisual'], $args);
}
add_action('init', 'wporg_register_taxonomy_seccion');


/*** Taxonomias para Audiovisual | Tipo ***/
function wporg_register_taxonomy_tipo_au() {
  $labels = [
    'name'              => _x('Tipo', 'taxonomy general name'),
    'singular_name'     => _x('Tipo', 'taxonomy singular name'),
    'search_items'      => __('Buscar tipos'),
    'all_items'         => __('Todos los tipos'),
    'parent_item'       => __('Tipo padre'),
    'parent_item_colon' => __('Tipo padre:'),
    'edit_item'         => __('Editar tipos'),
    'update_item'       => __('Actualizar tipos'),
    'add_new_item'      => __('Agregar nuevo tipo'),
    'new_item_name'     => __('Nuevo nombre de tipo '),
    'menu_name'         => __('Tipo'),
  ];
  $args = [
    'hierarchical'      => true, // make it hierarchical (like categories)
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'show_in_rest'      => true,
    'rewrite'           => array( 'slug' => 'tipo_au', 'with_front' => false ),
  ];
  register_taxonomy('tipo_au', ['audiovisual'], $args);
}
add_action('init', 'wporg_register_taxonomy_tipo_au');


/*** Taxonomias para Audiovisual | Género ***/
function wporg_register_taxonomy_genero_au() {
  $labels = [
    'name'              => _x('Género', 'taxonomy general name'),
    'singular_name'     => _x('Género', 'taxonomy singular name'),
    'search_items'      => __('Buscar géneros'),
    'all_items'         => __('Todos los géneros'),
    'parent_item'       => __('Género padre'),
    'parent_item_colon' => __('Género padre:'),
    'edit_item'         => __('Editar géneros'),
    'update_item'       => __('Actualizar géneros'),
    'add_new_item'      => __('Agregar nuevo género'),
    'new_item_name'     => __('Nuevo nombre de género '),
    'menu_name'         => __('Género'),
  ];
  $args = [
    'hierarchical'      => true, // make it hierarchical (like categories)
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'show_in_rest'      => true,
    'rewrite'           => array( 'slug' => 'genero_au', 'with_front' => false ),
  ];
  register_taxonomy('genero_au', ['audiovisual'], $args);
}
add_action('init', 'wporg_register_taxonomy_genero_au');


/*** Taxonomias para Audiovisual | Calificación ***/
function wporg_register_taxonomy_calificacion_au() {
  $labels = [
    'name'              => _x('Calificación', 'taxonomy general name'),
    'singular_name'     => _x('Calificación', 'taxonomy singular name'),
    'search_items'      => __('Buscar calificación'),
    'all_items'         => __('Todas las calificaciones'),
    'parent_item'       => __('Calificación padre'),
    'parent_item_colon' => __('Calificación padre:'),
    'edit_item'         => __('Editar calificación'),
    'update_item'       => __('Actualizar calificación'),
    'add_new_item'      => __('Agregar nueva calificación'),
    'new_item_name'     => __('Nueva calificación '),
    'menu_name'         => __('Calificación'),
  ];
  $args = [
    'hierarchical'      => true, // make it hierarchical (like categories)
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'show_in_rest'      => true,
    'rewrite'           => array( 'slug' => 'calificacion_au', 'with_front' => false ),
  ];
  register_taxonomy('calificacion_au', ['audiovisual'], $args);
}
add_action('init', 'wporg_register_taxonomy_calificacion_au');


/*** Taxonomias para Territorio | Recursos ***/
function wporg_register_taxonomy_recurso() {
  $labels = [
    'name'              => _x('Tipos de recursos', 'taxonomy general name'),
    'singular_name'     => _x('Tipo de recurso', 'taxonomy singular name'),
    'search_items'      => __('Buscar recursos'),
    'all_items'         => __('Todos los recursos'),
    'parent_item'       => __('Tipo padre'),
    'parent_item_colon' => __('Tipo padre:'),
    'edit_item'         => __('Editar Tipo'),
    'update_item'       => __('Actualizar Tipo'),
    'add_new_item'      => __('Agregar nuevo Tipo'),
    'new_item_name'     => __('Nuevo nombre de recurso'),
    'menu_name'         => __('Tipo de recurso'),
  ];
  $args = [
    'hierarchical'      => true, // make it hierarchical (like categories)
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'show_in_rest'      => true,
  ];
  register_taxonomy('recurso', ['experiencias'], $args);
}
add_action('init', 'wporg_register_taxonomy_recurso');

/*** Taxonomias para Territorio | Area ***/
function wporg_register_taxonomy_area() {
  $labels = [
    'name'              => _x('Áreas', 'taxonomy general name'),
    'singular_name'     => _x('Área', 'taxonomy singular name'),
    'search_items'      => __('Buscar áreas'),
    'all_items'         => __('Todas las áreas'),
    'parent_item'       => __('Área padre'),
    'parent_item_colon' => __('Área padre:'),
    'edit_item'         => __('Editar área'),
    'update_item'       => __('Actualizar área'),
    'add_new_item'      => __('Agregar nueva área'),
    'new_item_name'     => __('Nuevo nombre de área '),
    'menu_name'         => __('Área'),
  ];
  $args = [
    'hierarchical'      => true, // make it hierarchical (like categories)
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'show_in_rest'      => true,
    'rewrite'           => array( 'slug' => 'area', 'with_front' => false ),
  ];
  register_taxonomy('area', ['experiencias'], $args);
}
add_action('init', 'wporg_register_taxonomy_area');

/*** Taxonomias para Territorio | Hacedor ***/
function wporg_register_taxonomy_hacedor() {
  $labels = [
    'name'              => _x('Hacedores', 'taxonomy general name'),
    'singular_name'     => _x('Hacedor', 'taxonomy singular name'),
    'search_items'      => __('Buscar hacedores'),
    'all_items'         => __('Todas las hacedores'),
    'parent_item'       => __('Hacedor padre'),
    'parent_item_colon' => __('Hacedor padre:'),
    'edit_item'         => __('Editar hacedor'),
    'update_item'       => __('Actualizar hacedor'),
    'add_new_item'      => __('Agregar nueva hacedor'),
    'new_item_name'     => __('Nuevo nombre de hacedor '),
    'menu_name'         => __('Presentador/Funcionario'),
  ];
  $args = [
    'hierarchical'      => true, // make it hierarchical (like categories)
    'labels'            => $labels,
    'show_ui'           => true,
    'query_var'         => true,
    'show_in_rest'      => true,
    'rewrite'           => array( 'slug' => 'hacedor', 'with_front' => false ),
  ];
  register_taxonomy('hacedor', ['experiencias'], $args);
}
add_action('init', 'wporg_register_taxonomy_hacedor');

/*** Taxonomias para Territorio | Partido ***/
function wporg_register_taxonomy_partido() {
  $labels = [
    'name'              => _x('Partidos', 'taxonomy general name'),
    'singular_name'     => _x('Partido', 'taxonomy singular name'),
    'search_items'      => __('Buscar partidos'),
    'all_items'         => __('Todos los partidos'),
    'edit_item'         => __('Editar partido'),
    'update_item'       => __('Actualizar partido'),
    'add_new_item'      => __('Agregar nueva partido'),
    'new_item_name'     => __('Nuevo partido '),
    'menu_name'         => __('Partido'),
  ];
  $args = [
    'hierarchical'      => true, // make it hierarchical (like categories)
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'show_in_rest'      => true,
    'rewrite'           => array( 'slug' => 'partido', 'with_front' => true ),
  ];
  register_taxonomy('partido', ['experiencias'], $args);
}
add_action('init', 'wporg_register_taxonomy_partido');

/*** Taxonomias para Territorio | Ciudad ***/
function wporg_register_taxonomy_ciudad() {
  $labels = [
    'name'              => _x('Ciudades', 'taxonomy general name'),
    'singular_name'     => _x('Ciudad', 'taxonomy singular name'),
    'search_items'      => __('Buscar ciudades'),
    'all_items'         => __('Todas las ciudades'),
    'edit_item'         => __('Editar ciudad'),
    'update_item'       => __('Actualizar ciudad'),
    'add_new_item'      => __('Agregar nueva ciudad'),
    'new_item_name'     => __('Nuevo ciudad '),
    'menu_name'         => __('Localidad/Ciudad'),
  ];
  $args = [
    'hierarchical'      => true, // make it hierarchical (like categories)
    'labels'            => $labels,
    'show_ui'           => true,
    'query_var'         => true,
    'show_in_rest'      => true,
    'rewrite'           => array( 'slug' => 'ciudad', 'with_front' => true ),
  ];
  register_taxonomy('ciudad', ['experiencias'], $args);
}
add_action('init', 'wporg_register_taxonomy_ciudad');


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
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', ),

        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'  => array( 'post_tag', 'tipo_pe'),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 7,
        'can_export'          => true,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array(
          'slug' => 'libro'
        ),
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


/*** CPT PRODUCTO Editorial ***/ 
function custom_post_type_productomusica() {
 
  // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Productos', 'Post Type General Name', 'finde-plugin' ),
        'singular_name'       => _x( 'Producto', 'Post Type Singular Name', 'finde-plugin' ),
        'menu_name'           => __( 'Productos de Música', 'finde-plugin' ),
        'parent_item_colon'   => __( 'Producto padre', 'finde-plugin' ),
        'all_items'           => __( 'Todos los Producto de música', 'finde-plugin' ),
        'view_item'           => __( 'Ver Producto de música', 'finde-plugin' ),
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
        'label'               => __( 'productomusica', 'finde-plugin' ),
        'description'         => __( 'Producto de música', 'finde-plugin' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', ),

        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'  => array( 'post_tag', 'tipo_pm'),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 16,
        'can_export'          => true,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array(
          'slug' => 'productos'
        ),
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest'        => true,
        'menu_icon'           => 'dashicons-album',
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'productomusica', $args );
 
}
add_action( 'init', 'custom_post_type_productomusica', 0 );


/*** CPT DISEÑO ***/
function custom_post_type_disenio() {
  // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Diseño', 'Post Type General Name', 'finde-plugin' ),
        'singular_name'       => _x( 'Diseño', 'Post Type Singular Name', 'finde-plugin' ),
        'menu_name'           => __( 'Diseño', 'finde-plugin' ),
        'parent_item_colon'   => __( 'Diseño padre', 'finde-plugin' ),
        'all_items'           => __( 'Todos los registros de  Diseño', 'finde-plugin' ),
        'view_item'           => __( 'Ver Diseño', 'finde-plugin' ),
        'add_new_item'        => __( 'Agregar nueva registro de Diseño', 'finde-plugin' ),
        'add_new'             => __( 'Agregar nuevo', 'finde-plugin' ),
        'edit_item'           => __( 'Editar Registro de diseño', 'finde-plugin' ),
        'update_item'         => __( 'Actualizar registro de Diseño', 'finde-plugin' ),
        'search_items'        => __( 'Buscar registros de Diseño', 'finde-plugin' ),
        'not_found'           => __( 'No encontrado', 'finde-plugin' ),
        'not_found_in_trash'  => __( 'No encontrado en la papelera', 'finde-plugin' ),
    );
     
  // Set other options for Custom Post Type
    $args = array(
        'label'               => __( 'disenio', 'finde-plugin' ),
        'description'         => __( 'Diseño', 'finde-plugin' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'  => array( 'post_tag', 'rubro_di', 'descuento_di'),
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
    register_post_type( 'disenio', $args );
 
}
add_action( 'init', 'custom_post_type_disenio', 0 );


/*** CPT DISEÑO ***/
function custom_post_type_audiovisual() {
  // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Audiovisual', 'Post Type General Name', 'finde-plugin' ),
        'singular_name'       => _x( 'Audiovisual', 'Post Type Singular Name', 'finde-plugin' ),
        'menu_name'           => __( 'Audiovisual', 'finde-plugin' ),
        'parent_item_colon'   => __( 'Audiovisual padre', 'finde-plugin' ),
        'all_items'           => __( 'Todos los registros de  Audiovisual', 'finde-plugin' ),
        'view_item'           => __( 'Ver Audiovisual', 'finde-plugin' ),
        'add_new_item'        => __( 'Agregar nuevo registro de Audiovisual', 'finde-plugin' ),
        'add_new'             => __( 'Agregar nuevo', 'finde-plugin' ),
        'edit_item'           => __( 'Editar Registro audiovisual', 'finde-plugin' ),
        'update_item'         => __( 'Actualizar registro de Audiovisual', 'finde-plugin' ),
        'search_items'        => __( 'Buscar registros de Audiovisual', 'finde-plugin' ),
        'not_found'           => __( 'No encontrado', 'finde-plugin' ),
        'not_found_in_trash'  => __( 'No encontrado en la papelera', 'finde-plugin' ),
    );
     
  // Set other options for Custom Post Type
    $args = array(
        'label'               => __( 'audiovisual', 'finde-plugin' ),
        'description'         => __( 'Audiovisual', 'finde-plugin' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'  => array( 'post_tag',),
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
        'rewrite'             => array( 'slug' => 'catalogo-audiovisual' ),
        'has_archive'         => 'catalogo-audiovisual',
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest'        => true,
        'menu_icon'           => 'dashicons-format-video',

        'timestamp'  => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'audiovisual', $args );
 
}
add_action( 'init', 'custom_post_type_audiovisual', 0 );


/*** CPT TERRITORIO ***/
function custom_post_type_experiencias() {
  // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Territorio', 'Post Type General Name', 'finde-plugin' ),
        'singular_name'       => _x( 'Territorio', 'Post Type Singular Name', 'finde-plugin' ),
        'menu_name'           => __( 'Territorio', 'finde-plugin' ),
        'parent_item_colon'   => __( 'Territorio padre', 'finde-plugin' ),
        'all_items'           => __( 'Todos los registros de  Territorio', 'finde-plugin' ),
        'view_item'           => __( 'Ver Territorio', 'finde-plugin' ),
        'add_new_item'        => __( 'Agregar nueva registro de Territorio', 'finde-plugin' ),
        'add_new'             => __( 'Agregar nuevo', 'finde-plugin' ),
        'edit_item'           => __( 'Editar Registro de territorio', 'finde-plugin' ),
        'update_item'         => __( 'Actualizar registro de Territorio', 'finde-plugin' ),
        'search_items'        => __( 'Buscar registros de Territorio', 'finde-plugin' ),
        'not_found'           => __( 'No encontrado', 'finde-plugin' ),
        'not_found_in_trash'  => __( 'No encontrado en la papelera', 'finde-plugin' ),
    );
     
  // Set other options for Custom Post Type
    $args = array(
        'label'               => __( 'experiencias', 'finde-plugin' ),
        'description'         => __( 'Territorio', 'finde-plugin' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'  => array( 'post_tag'),
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
    register_post_type( 'experiencias', $args );
 
}
add_action( 'init', 'custom_post_type_experiencias', 0 );


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
      array(
        'name'             => 'Video',
        'id'               => "{$prefix}video",
        'type'             => 'video',
      ),
      array(
        'name' => 'Sin título',
        'id'   => 'no_title',
        'type' => 'checkbox',
        'std'  => 0, // 0 or 1
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
      array(
        'id'               => 'image_vj',
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
        'id'    => 'oembed',
        'name'  => 'oEmbed(s)',
        'type'  => 'oembed',
    
        // Input size
        'size'  => 30,
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
        'name' => __( 'Enlace', 'mbox' ),
        'id'   => "enlace",
        'desc' => __( 'Ingrese el enlace', 'mbox' ),
        'type' => 'url',
        'std'  => '',
      ),
      // oembed
      array(
        'id'    => 'audiovisual',
        'name'  => 'Contenido audiovisual',
        'type'  => 'oembed',
    
        // Input size
        'size'  => 30,
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
        array(
          'name' => 'Destacado',
          'id'   => 'destacado_id',
          'type' => 'checkbox',
          'std'  => 0, // 0 or 1
        ),
        array(
          'name'        => 'Subtitulo',
          'label_description' => 'Opcional',
          'id'          => "{$prefix}subtitulo",
          'type'        => 'text',
        ),
        array(
          'name'        => 'Autorx/es',
          'id'          => "{$prefix}autor",
          'type'        => 'textarea',
        ),
        array(
          'name'        => 'Traductorx/es',
          'id'          => "{$prefix}traductor",
          'type'        => 'text',
        ),
        array(
          'name'        => 'Ilustradorx/es',
          'id'          => "{$prefix}ilustrador",
          'type'        => 'text',
        ),
        array(
          'id'          => "{$prefix}tapa",
          'name'        => 'Tapa',
          'type'        => 'image_advanced',
          'max_file_uploads' => 1,
          'image_size'       => 'thumbnail',
          'max_status'       => 'false',
        ),
        array(
          'id'          => "{$prefix}contratapa",
          'name'        => 'Contratapa',
          'type'        => 'image_advanced',
          'max_file_uploads' => 1,
          'image_size'       => 'thumbnail',
          'max_status'       => 'false',
        ),
        array(
          'name'        => 'ISBN',
          'id'          => "{$prefix}isbn",
          'type'        => 'text',
        ),
        array(
          'name'       => 'Fecha de publicación',
          'id'         => "{$prefix}fecha_publicacion",
          'type'       => 'datetime',
  
          'timestamp'  => true,
  
          'js_options' => array(
            'dateFormat'      => 'dd-mm-yy',
            'showTimepicker'  => false,
            ),
          'save_format' => 'Y-m-d',
        ),
        array(
          'name'        => 'Páginas',
          'label_description' => 'ej. 147',
          'id'          => "{$prefix}paginas",
          'type'        => 'text',
        ),
        array(
          'name'        => 'Precio',
          'label_description' => 'ej. $590',
          'id'          => "{$prefix}precio",
          'type'        => 'text',
        ),
        array(
          'name'        => 'Formato',
          'label_description' => 'ej. 14 x 21,2 cm',
          'id'          => "{$prefix}formato",
          'type'        => 'text',
        ),
        array(
          'name'        => 'Edición',
          'label_description' => 'ej. 1ª',
          'id'          => "{$prefix}edicion",
          'type'        => 'text',
        ),
        array(
          'name'        => 'Impresión',
          'label_description' => 'ej. 1ª',
          'id'          => "{$prefix}impresion",
          'type'        => 'text',
        ),
        array(
          'name'    => 'Destacado',
          'id'      => "{$prefix}quote",
          'type'    => 'wysiwyg',
          'label_description' => 'Puede ser una frase de alguna reseña del libro en medios o una oración de alguien recomendando el libro. Es un texto que irá entre comillas y su función es promocionar el libro en una lectura rápida.',
          
          // Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
          'raw'     => true,

          // Editor settings, see https://codex.wordpress.org/Function_Reference/wp_editor
          'options' => array(
              'textarea_rows' => 4,
              'teeny'         => false,
              'toolbar'=> 'bold,italic,underline,bullist,numlist,link,unlink,forecolor,undo,redo,pastetext,removeformat',
          ),
        ),
        //  URL
        array(
            'name' =>'Url del libro a la venta',
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
      //  URL de Tienda online
      array(
        'name' =>'Url de la tienda online',
        // prefix es mbox_, o sea que en este caso es mbox_url.
        'id'   => "{$prefix}tienda",
        'desc' => __( 'Ingrese la url donde se ofrecen los productos de la marca a la venta', 'mbox' ),
        'type' => 'url',
        'std'  => '',
      ),
    )
  );

  # meta_box para producto musica
  $meta_boxes[] = array(
    'id'         => 'mb_finde_productomusica',
    'title'      => __( 'Campos adicionales', 'mbox' ),
    'post_types' => 'productomusica',
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
          'id'          => "{$prefix}tapa",
          'name'        => 'Tapa',
          'type'        => 'image_advanced',
          'max_file_uploads' => 5,
          'image_size'       => 'thumbnail',
          'max_status'       => 'false',
        ),
        array(
          'name'        => 'Precio',
          'label_description' => 'ej. $590',
          'id'          => "{$prefix}precio",
          'type'        => 'text',
        ),
        //  URL
        array(
            'name' =>'Url del libro a la venta',
            // prefix es mbox_, o sea que en este caso es mbox_url.
            'id'   => "{$prefix}url",
            'desc' => __( 'Ingrese la url donde se ofrece el producto a la venta', 'mbox' ),
            'type' => 'url',
            'std'  => '',
        ),
    )
  );

  # meta_box para disenio
  $meta_boxes[] = array(
    'id'         => 'mb_finde_disenio',
    'title'      => __( 'Campos adicionales', 'mbox' ),
    'post_types' => 'disenio',
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
        'id'               => 'image_di',
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
        'name'        => 'Ciudad',
        //'label_description' => 'Ciudad',
        'id'          => 'address',
        //'desc'        => 'Ingrese la ciudad',
        'type'        => 'text',

        // Placeholder
        //'placeholder' => 'Dirección, Ciudad, Provincia de Buenos Aires',
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
      // Youtube
      array(
        'name' => __( 'Youtube', 'mbox' ),
        'id'   => "{$prefix}youtube",
        'type' => 'url',
      ),
      //  Twitter
      array(
          'name' => __( 'Twitter', 'mbox' ),
          'id'   => "{$prefix}twitter",
          'type' => 'url',
      ),
      //  Pinterest
      array(
        'name' => __( 'Pinterest', 'mbox' ),
        'id'   => "{$prefix}pinterest",
        'type' => 'url',
      ),
      //  Tiktok
      array(
        'name' => __( 'TikTok', 'mbox' ),
        'id'   => "{$prefix}tiktok",
        'type' => 'url',
      ),
      array(
        'name'    => 'Medios digitales',
        'id'      => "{$prefix}medios",
        'type'    => 'checkbox_list',
        // Options of checkboxes, in format 'value' => 'Label'
        'options' => array(
            'debito'          => 'Tarjeta de débito',
            'credito'         => 'Tarjeta de crédito',
            'cuentadni'       => 'Cuenta DNI',
            'mercadopago'     => 'Mercado Pago',
            'transferencia'   => 'Transferencia',
            'paypal'          => 'PayPal',
            'otros'            => 'Otros',
        ),
        // Display options in a single row?
        'inline' => true,
        // Display "Select All / None" button?
        'select_all_none' => true,
      ),
      array(
        'name' => __( 'Tienda virtual de productos y servicios', 'mbox' ),
        'id'   => "{$prefix}tienda",
        'desc' => __( 'Ingrese la url del sitio oficial de la editorial', 'mbox' ),
        'placeholder' => __( 'La url debe empezar con http:// o https://', 'mbox' ),
        'type' => 'url',
        'size'  => 50,
    ),
      array(
        'name'        => 'Medios de envíos',
        'label_description' => 'Indique los distintos tipos de envíos que utiliza',
        'id'          => 'envios',
        'type'        => 'text',
        // Input size
        'size'        => 50,
      ),
      //  Whatsapp
      array(
          'name' => __( 'Whatsapp', 'mbox' ),
          'id'   => "{$prefix}whatsapp",
          'type' => 'number',
      ),
      // oembed
      array(
        'id'    => 'oembed',
        'name'  => 'oEmbed(s)',
        'type'  => 'oembed',
    
        // Input size
        'size'  => 30,
      ),
    )
  );

  # meta_box para audiovisual
  $meta_boxes[] = array(
    'id'         => 'mb_finde_audiovisual',
    'title'      => __( 'Campos adicionales', 'mbox' ),
    'post_types' => 'audiovisual',
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
      //  YOutbe Vimeo
      array(
        'id'    => 'youtubevimeo',
        'name'  => 'Contenido TouTube / Vimeo',
        'type'  => 'oembed',
        'desc'  => 'Ingrese la url del contenido a ser presentado desde YouTube o Vimeo',
        // Input size
        'size'  => 50,
      ),
      //  URL de Contar
      array(
        'name' => __( 'ContAR/CineAr', 'mbox' ),
        'id'   => "{$prefix}contar",
        'desc' => __( 'Ingrese la url de ContAR/CineAr donde se presentará el contenido', 'mbox' ),
        'type' => 'url',
      ),
      array(
        'name' => 'Es iframe?',
        'id'   => 'iframe',
        'type' => 'checkbox',
        'desc' => __( 'Sólo active esta opción si el contenido será embebido en forma de Iframe en finde.gba.gob.ar', 'mbox' ),
        'std'  => 0, // 0 or 1
      ),
      array(
        'id'               => 'image_contar',
        'name'             => 'Imagen para contenido en ContAR/CineAr y para Slides. OBLIGATORIO',
        'type'             => 'image_advanced',

        // Delete image from Media Library when remove it from post meta?
        // Note: it might affect other posts if you use same image for multiple posts
        'force_delete'     => false,

        // Maximum image uploads.
        'max_file_uploads' => 1,

        // Do not show how many images uploaded/remaining.
        'max_status'       => 'false',

        // Image size that displays in the edit page. Possible sizes small,medium,large,original
        'image_size'       => 'thumbnail',
      ),
      array(
        'name'        => 'Aclaración',
        'id'          => "{$prefix}aclaracion",
        'type'        => 'text',
        'desc'        => 'Línea optativa para explicar que se va a redirigir a Contar, Cinear u otro',
      ),
      array(
        'name'        => 'Duración',
        'id'          => "{$prefix}duracion",
        'type'        => 'text',
        'desc'        => 'Por ej. 11:54',
      ),
      array(
        'name'        => 'Dirección',
        'id'          => "{$prefix}direccion",
        'type'        => 'text',
      ),
      array(
        'name'        => 'Producción',
        'id'          => "{$prefix}produccion",
        'type'        => 'text',
      ),
      array(
        'name'        => 'Guión',
        'id'          => "{$prefix}guion",
        'type'        => 'text',
      ),
      array(
        'name'        => 'Año',
        'id'          => "{$prefix}ano",
        'type'        => 'text',
      ),
      array(
        'name'        => 'Elenco',
        'id'          => "{$prefix}elenco",
        'type'        => 'text',
      ),
      array(
        'name'        => 'Productora',
        'id'          => "{$prefix}productora",
        'type'        => 'text',
      ),
      array(
        'name'        => 'Contenido presentado por',
        'id'          => "{$prefix}presentado-por",
        'type'        => 'text',
      ),
      //  Descripción
      array(
        'name'    => 'Descripción',
        'id'      => "{$prefix}descripcion",
        'type'    => 'wysiwyg',
    
        // Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
        'raw'     => false,
    
        // Editor settings, see https://codex.wordpress.org/Function_Reference/wp_editor
        'options' => array(
            'textarea_rows' => 4,
            'teeny'         => true,
        ),
      ),
      //  Selección
      array(
        'name'    => 'Selección',
        'id'      => "{$prefix}seleccion",
        'type'    => 'wysiwyg',
    
        // Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
        'raw'     => false,
    
        // Editor settings, see https://codex.wordpress.org/Function_Reference/wp_editor
        'options' => array(
            'textarea_rows' => 4,
            'teeny'         => true,
        ),
      ),
      //  Trailer
      array(
        'id'    => 'trailer',
        'name'  => 'Trailer',
        'type'  => 'oembed',
    
        // Input size
        'size'  => 30,
      ),
      array(
        'name'       => 'Fecha de estreno',
        'id'         => 'fecha_estreno',
        'type'       => 'datetime',

        'timestamp'  => true,

        'js_options' => array(
          'dateFormat'      => 'dd-mm-yy',
          'showTimepicker'  => true,
          ),
        'save_format' => 'Y-m-d H:i:s',
      ),
    )
  );


  # meta_box para territorio
  $meta_boxes[] = array(
    'id'         => 'mb_finde_territorio',
    'title'      => __( 'Campos adicionales', 'mbox' ),
    'post_types' => 'experiencias',
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
        'id'               => 'image_te',
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
      //  URL
      array(
          'name' => __( 'Sitio web del proyecto', 'mbox' ),
          'id'   => "{$prefix}url",
          'desc' => __( 'Ingrese la url del sitio del proyecto', 'mbox' ),
          'type' => 'url',
          'clone' => true,
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
      // Youtube
      array(
        'name' => __( 'Youtube', 'mbox' ),
        'id'   => "{$prefix}youtube",
        'type' => 'url',
      ),
      //  Twitter
      array(
          'name' => __( 'Twitter', 'mbox' ),
          'id'   => "{$prefix}twitter",
          'type' => 'url',
      ),
      //  Pinterest
      array(
        'name' => __( 'Pinterest', 'mbox' ),
        'id'   => "{$prefix}pinterest",
        'type' => 'url',
      ),
      //  Tiktok
      array(
        'name' => __( 'TikTok', 'mbox' ),
        'id'   => "{$prefix}tiktok",
        'type' => 'url',
      ),
      //  Whatsapp
      array(
          'name' => __( 'Correo electrónico', 'mbox' ),
          'id'   => "{$prefix}email",
          'type' => 'email',
      ),
      array(
        'name'        => 'Cargo del funcionario',
        'id'          => "{$prefix}cargo",
        'type'        => 'text',
        'desc'        => 'Sólo cuando corresponda',
      ),
      // oembed
      array(
        'id'    => 'oembed',
        'name'  => 'oEmbed(s)',
        'type'  => 'oembed',
    
        // Input size
        'size'  => 30,
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
      array(
        'name' => __( 'Enlace', 'mbox' ),
        'id'   => "{$prefix}url",
        'desc' => __( 'Ingrese la url del sitio a donde desea enlazar el banner', 'mbox' ),
        'placeholder' => __( 'La url debe empezar con http:// o https://', 'mbox' ),
        'type' => 'url',
        'size'  => 50,
      ),
    )
  );

  return $meta_boxes;
}

/*** HOME - CREAR SLIDESHOW - POR TAG***/
if ( ! function_exists( 'wp_showSlides_fullbg_portag' ) ) {
  function wp_showSlides_fullbg_portag($post_category) {
    global $post;
    
    // the query
    $the_query = new WP_Query( array( 
      'post_type'           => 'slide', 
      'posts_per_page'         => -1,
      'post_status'            => 'publish',
      'no_found_rows'          => true,
      'category_name'          => $post_category,
    ) );
    // The Loop
    if ( $the_query->have_posts() ) {
      while ( $the_query->have_posts() ) {
        $the_query->the_post();
        $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
        $url = rwmb_meta( 'mbox_url' );
        $videos = rwmb_meta( 'mbox_video', array( 'limit' => 1 ) );
        $video = reset( $videos );
        $no_title = rwmb_meta( 'no_title' );
        ?>
        <?php
        if ($video) { 
          echo '<div class="carousel-item">';
            echo '<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" >';
              echo '<source src="';
              echo $video['src'];
              echo '" type="video/mp4">';
              echo '</source>';
            echo '</video>';
            echo '<div class="container h-100" style="z-index: 2;">';
              echo '<div class="d-flex h-100 text-center align-items-center">';
                echo '<div class="carousel-caption text-left">';
                if( $no_title == 0 ) {
                  echo '<div class="info">';
                    echo '<h1><a href="'. $url .'" title="' .get_the_title().'">'.get_the_title().'</a></h1>';
                    echo '<div class="text-light">' .wp_trim_words( get_the_content(), 22, '...' ). '</div>';
                  echo '</div>';
                };
                echo '</div>';
              echo '</div>';
            echo '</div>';
          echo '</div>';
        } else {
        if ( has_post_thumbnail() ) {
          echo '<div class="carousel-item" style="background-image: url('. $src[0] .')">';
        } else { 
          echo '<div class="carousel-item" style="background:#009aae">';
        }
            echo '<div class="container">';
              echo '<div class="carousel-caption text-left">';
              if( $no_title == 0 ) {
                echo '<div class="info">';
                  echo '<h1><a href="'. $url .'" title="' .get_the_title().'">'.get_the_title().'</a></h1>';
                  echo '<div class="text-light">' .wp_trim_words( get_the_content(), 22, '...' ). '</div>';
                echo '</div>';
              };
              echo '</div>';
            echo '</div>';
          echo '</div>';
        }
      }
      /* Restore original Post Data */
      wp_reset_postdata();
      } else {
      echo 'No hemos encontrado Info.';
    };
  }
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
      $videos = rwmb_meta( 'mbox_video', array( 'limit' => 1 ) );
      $video = reset( $videos );
      ?>
  <?php
      if ($video) { 
        echo '<div class="carousel-item">';
          echo '<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" >';
            echo '<source src="';
            echo $video['src'];
            echo '" type="video/mp4">';
            echo '</source>';
          echo '</video>';
          echo '<div class="container h-100" style="z-index: 2;">';
            echo '<div class="d-flex h-100 text-center align-items-center">';
              echo '<div class="carousel-caption text-left">';
                echo '<div class="info">';
                  echo '<h1><a href="'. $url .'" title="' .get_the_title().'">'.get_the_title().'</a></h1>';
                  echo '<div class="text-light">' .wp_trim_words( get_the_content(), 22, '...' ). '</div>';
                echo '</div>';
              echo '</div>';
            echo '</div>';
          echo '</div>';
        echo '</div>';
      } else {
        if ( has_post_thumbnail() ) {
          echo '<div class="carousel-item" style="background-image: url('. $src[0] .')">';
        } else { 
          echo '<div class="carousel-item" style="background:#009aae">';
        }
            echo '<div class="container">';
              echo '<div class="carousel-caption text-left">';
                echo '<div class="info">';
                  echo '<h1><a href="'. $url .'" title="' .get_the_title().'">'.get_the_title().'</a></h1>';
                  echo '<div class="text-light">' .wp_trim_words( get_the_content(), 22, '...' ). '</div>';
                echo '</div>';
              echo '</div>';
            echo '</div>';
          echo '</div>';
      }
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
        echo '<h1><a href="'. $url .'" title="' .get_the_title().'">'.get_the_title().'</a></h1><div class="text-light">' .wp_trim_words( get_the_content(), 22, '...' ). '</div>';
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
        echo '<h1><a href="'. $url .'" title="' .get_the_title().'">'.get_the_title().'</a></h1><div class="text-light">' .wp_trim_words( get_the_content(), 22, '...' ). '</div>';
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
      $video = rwmb_meta( 'mbox_video' ); 
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
      
      echo '<div class="slick fullmedia">';
        $url = get_post_meta( get_the_ID(), 'oembed', true );
        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'small');  
        if ($featured_img_url) { 
          echo '<div>';
          the_post_thumbnail('medium', array('class' => 'img-fluid'));
          echo '</div>';
        }
        $images = rwmb_meta( 'image_vj', array( 'size' => 'medium' ) );
        if ($images) {
          // slick
          foreach ( $images as $image ) {
            echo '<div>';
            echo '<img data-lazy="'. $image['url']. '">';
            echo '</div>';
          }    
        }
      echo '</div>';

      echo '<div class="grid-item-content card h-100">';
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
if ( ! function_exists( 'wp_archive_catalogoed' ) ) {
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

if ( ! function_exists( 'wp_editorial_vidriera' ) ) {
  function wp_editorial_vidriera($ppp,$post_tag) {
    $args = array(
      'post_type'              => 'productoeditorial',
      'posts_per_page'         => $ppp,
      'post_status'            => 'publish',
      'no_found_rows'          => true,
      'tag'                    => $post_tag,
    );
    // The Query
    $query_cartelera = new WP_Query( $args );

    if ( $query_cartelera->have_posts() ) { 
      while ( $query_cartelera->have_posts() ) : $query_cartelera->the_post();
        get_template_part( 'layouts/card', 'vidriera-slide' );
      endwhile;
    } else {
      get_template_part( 'template-parts/content', 'none' );    
    }
  }
}

if ( ! function_exists( 'wp_musica_vidriera' ) ) {
  function wp_musica_vidriera($ppp,$post_tag) {
    $args = array(
      'post_type'              => 'productomusica',
      'posts_per_page'         => $ppp,
      'post_status'            => 'publish',
      'no_found_rows'          => true,
      'tag'                    => $post_tag,
      'meta_query'            => array(
        'destacado_clause'  => array(
            'key'           => 'destacado_id',
            'value'         => 1
        ),
      ),
    );
    // The Query
    $query_cartelera = new WP_Query( $args );

    if ( $query_cartelera->have_posts() ) { 
      while ( $query_cartelera->have_posts() ) : $query_cartelera->the_post();
        get_template_part( 'layouts/card', 'vidriera-slide' );
      endwhile;
    } else {
      get_template_part( 'template-parts/content', 'none' );    
    }
  }
}

/*** CATALOGO DE PRODUCTOS DE MUSICA ***/
if ( ! function_exists( 'wp_musica_productosmusica_full' ) ) {
  function wp_musica_productosmusica_full($ppp,$post_tag) {
    $args = array(
      'post_type'              => 'productomusica',
      'posts_per_page'         => $ppp,
      'post_status'            => 'publish',
      'no_found_rows'          => true,
      'tag'                    => $post_tag,
      'meta_query'            => array(
        'destacado_clause'  => array(
            'key'           => 'destacado_id',
            'value'         => 1
        ),
      ),
    );
    // The Query
    $query_cartelera = new WP_Query( $args );

    if ( $query_cartelera->have_posts() ) { 
      while ( $query_cartelera->have_posts() ) : $query_cartelera->the_post();
        echo '<div class="col-md-3 mb-3">';
        get_template_part( 'layouts/card', 'vidriera-slide' );
        echo '</div>';
      endwhile;
    } else {
      get_template_part( 'template-parts/content', 'none' );    
    }
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
          echo '><div class="item-wrapper">';
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
              echo '<div class="card-text d-none d-sm-block">' . wp_trim_words( wp_strip_all_tags( get_the_excerpt() ), 18, '...' ) .'</div>';
          } else {
              echo '<div class="card-text d-none d-sm-block">' . wp_trim_words( wp_strip_all_tags( get_the_content() ), 18, '...' ) .'</div>';
          }
          
          if ($terms) {
              echo '<div class="rubro_mu">';
              foreach( $terms as $term ) { echo '<span><a href="'.get_term_link($term->slug, 'rubro_mu').'" class="badge bg-music text-white mt-1 os">'.$term->name.'</a></span>', ' ';}
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
          echo '</div></div></div>';
      endwhile;
      wp_reset_postdata();
    } else {
      echo 'No hemos encontrado productos o servicios asociados al catálogo.';
    }

    // Restore original Post Data
    wp_reset_postdata();
  }
}

/*** CATALOGO PRODUCTOS DE MUSICA ***/
if ( ! function_exists( 'wp_archive_productos' ) ) {
  function wp_archive_productos() {
      $term = get_term_by( 'slug', get_query_var('term'), get_query_var('taxonomy') );
      $term_id = $term->term_id;
      $taxonomy_name = 'rubro_mu';
      $termchildren = get_term_children( $term_id, $taxonomy_name );
                          

      $args = array(
          'post_type'              => 'productomusica',
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
          echo '><div class="item-wrapper">';
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
              echo '<div class="card-text d-none d-sm-block">' . wp_trim_words( wp_strip_all_tags( get_the_excerpt() ), 18, '...' ) .'</div>';
          } else {
              echo '<div class="card-text d-none d-sm-block">' . wp_trim_words( wp_strip_all_tags( get_the_content() ), 18, '...' ) .'</div>';
          }
          
          if ($terms) {
              echo '<div class="rubro_mu">';
              foreach( $terms as $term ) { echo '<span><a href="'.get_term_link($term->slug, 'rubro_mu').'" class="badge bg-music text-white mt-1 os">'.$term->name.'</a></span>', ' ';}
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
          echo '</div></div></div>';
      endwhile;
      wp_reset_postdata();
    } else {
      echo 'No hemos encontrado productos o servicios asociados al catálogo.';
    }

    // Restore original Post Data
    wp_reset_postdata();
  }
}


/*** CATALOGO MUSICA X RUBRO ***/
if ( ! function_exists( 'wp_archive_catalogomuxrubro' ) ) {
  function wp_archive_catalogomuxrubro($rubro) {
      $args = array(
          'post_type'              => 'music',
          'posts_per_page'         => -1,
          'post_status'            => 'publish',
          'no_found_rows'          => true,
          'tax_query' => array(
          array(
              'taxonomy' => 'rubro_mu',
              'field' => 'slug', 
              'terms' => $rubro, /// Where term_id of Term 1 is "1".
              'include_children' => true
              )
          )
      );

    // The Query
    $query_catalogomuxrubro = new WP_Query( $args );
    // The Loop
    if ( $query_catalogomuxrubro->have_posts() ) {
      $term = get_term_by('slug', $rubro, 'rubro_mu'); 
      $tag_name = $term->name;
      echo '<div class="container"><h3 class="mb-4"><strong>'.$tag_name.'</strong>  <a href="/rubro_mu/'.$rubro.'/?post_type=music" style="font-size: .9rem;line-height:1rem;" class="btn btn-outline-primary">Ver todos</a></h3></div>';
      echo '<div class="slick tienda-musica mb-5">';
      
      while ( $query_catalogomuxrubro->have_posts() ) : $query_catalogomuxrubro->the_post();
        get_template_part('layouts/card', 'music');
      endwhile;
      // Restore original Post Data
      wp_reset_postdata();
      echo '</div>';
    } 

  }
}

/*** CATALOGO DISENIO ***/
if ( ! function_exists( 'wp_archive_catalogodi' ) ) {
  function wp_archive_catalogodi() {
      $term = get_term_by( 'slug', get_query_var('term'), get_query_var('taxonomy') );
      $term_id = $term->term_id;
      $taxonomy_name = 'rubro_di';
      $termchildren = get_term_children( $term_id, $taxonomy_name );
                          

      $args = array(
          'post_type'              => 'disenio',
          'posts_per_page'         => -1,
          'post_status'            => 'publish',
          'no_found_rows'          => true,
          'tax_query' => array(
          array(
              'taxonomy' => 'rubro_di',
              'field' => 'term_id', 
              'terms' => $term_id, /// Where term_id of Term 1 is "1".
              'include_children' => true
              )
          )
      );

    // The Query
    $query_catalogodi = new WP_Query( $args );
    // The Loop
    if ( $query_catalogodi->have_posts() ) {

      while ( $query_catalogodi->have_posts() ) : $query_catalogodi->the_post();

          $images = rwmb_meta( 'image_di', array( 'size' => 'medium' ) );
          $address = rwmb_meta( 'address' );
          $url = rwmb_meta( 'mbox_url' );
          $instagram = rwmb_meta( 'mbox_instagram' );
          $twitter = rwmb_meta( 'mbox_twitter' );
          $facebook = rwmb_meta( 'mbox_facebook' );
          $youtube = rwmb_meta( 'mbox_youtube' );
          $pinterest = rwmb_meta( 'mbox_pinterest' );
          $tiktok = rwmb_meta( 'mbox_tiktok' );
          $whatsapp = rwmb_meta( 'mbox_whatsapp' );

          $medios = rwmb_meta('mbox_medios');
          $terms = get_the_terms( $post->ID, 'rubro_di' );
          $dterms = get_the_terms( $post->ID, 'descuento_di' );

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
              echo '<div class="galeria-slick" style="border: 1px solid rgba(0, 0, 0, 0.125); border-bottom:0;">';
              foreach ( $images as $image ) {
                  echo '<a href="' . get_the_permalink() .'"><img data-lazy="'. $image['url']. '"></a>';
              }    
              echo '</div>';
          }
          echo '<div class="grid-item-content card" style="border-radius: 0 0 0.25rem 0.25rem;border-top: 0;">';
          echo '<a href="' . get_the_permalink() .'" rel="slidemark" class="stretched-link"></a>';
          echo '<div class="card-body">';
          echo '<h5 class="card-title">' . get_the_title() . '</h5>';
          if ( has_excerpt() ) {
              echo '<div class="card-text">' . get_the_excerpt() .'</div>';
          } else {
              echo '<div class="card-text">' . wp_trim_words( get_the_content(), 45, '...' ) .'</div>';
          }
          
          if ($terms) {
              echo '<div class="rubro_di">';
              foreach( $terms as $term ) { echo '<span class="badge badge-dark mt-1 os p-1">'.$term->name.'</span>', ' ';}
              echo '</div>';
          }
          if ($dterms) {
              echo '<div class="descuento_di">';
              foreach( $dterms as $term ) { echo '<span class="badge badge-dark mt-1 os p-1">'.$term->name.'</span>', ' ';}
              echo '</div>';
          }
          if ($medios) {
              echo '<div class="medios-de-pago d-block position-relative mt-1">';
              foreach ( $medios as $medio ) {
                  if ($medio == 'debito') :
                      echo '<span class="medio_digital tool-tip d-inline mr-2 '.$medio.'" data-toggle="tooltip" data-placement="top" title="Tarjeta de débito"><i class="fas fa-credit-card"></i></span>';
                  endif;
                  if ($medio == 'credito') :
                      echo '<span class="medio_digital tool-tip d-inline mr-2 '.$medio.'" data-toggle="tooltip" data-placement="top" title="Tarjeta de crédito"><i class="far fa-credit-card"></i></span>';
                  endif;
                  if ($medio == 'cuentadni') :
                      echo '<span class="medio_digital tool-tip d-inline mr-2 '.$medio.'" data-toggle="tooltip" data-placement="top" title="Cuenta DNI"><i class="fas fa-money-check"></i></span>';
                  endif;
                  if ($medio == 'mercadopago') :
                      echo '<span class="medio_digital tool-tip d-inline mr-2 '.$medio.'" data-toggle="tooltip" data-placement="top" title="Mercado Pago"><i class="fas fa-money-bill-wave"></i></span>';
                  endif;
                  if ($medio == 'transferencia') :
                      echo '<span class="medio_digital tool-tip d-inline mr-2 '.$medio.'" data-toggle="tooltip" data-placement="top" title="Transferencia"><i class="fas fa-money-check-alt"></i></span>';
                  endif;
                  if ($medio == 'paypal') :
                      echo '<span class="medio_digital tool-tip d-inline mr-2 '.$medio.'" data-toggle="tooltip" data-placement="top" title="Paypal"><i class="fab fa-cc-paypal"></i></span>';
                  endif;
                  if ($medio == 'otros') :
                      echo '<span class="medio_digital tool-tip d-inline mr-2 '.$medio.'" data-toggle="tooltip" data-placement="top" title="Otros"><i class="fas fa-wallet"></i></span>';
                  endif;
              }
              echo '</div>';
          }

          $envios = rwmb_meta( 'envios' );
          if ($envios) {
              echo '<div class="mt-1 mr-2 tool-tip d-inline" data-toggle="tooltip" data-placement="top" title="'.$envios.'"><i class="fas fa-truck"></i></div>';
          }

          $tienda = rwmb_meta( 'mbox_tienda' );
          if ($tienda) {
              echo '<div class="d-inline mt-1"><a href="'.$tienda.'" class="tool-tip" data-toggle="tooltip" data-placement="top" title="Ir a tienda virtual" target="_blank"><i class="fas fa-shopping-cart"></i></a></div>';
          }

          if ($url || $instagram || $facebook || $youtube || $twitter || $pinterest || $tiktok) {
            echo '<ul class="contacto list-unstyled mt-1 mb-1">';
            if ($url) { echo '<li class="list-inline-item"><a href="'. $url . '" target="_blank" class="os"><i class="fas fa-globe-americas"></i></a></li>';}
            if ($instagram) { echo '<li class="list-inline-item"><a href="'. $instagram. '" target="_blank" class="os"><i class="fab fa-instagram"></i></a></li>';}
            if ($facebook) { echo '<li class="list-inline-item"><a href="'. $facebook. '" target="_blank" class="os"><i class="fab fa-facebook"></i></a></li>';}
            if ($youtube) { echo '<li class="list-inline-item"><a href="'. $youtube . '" target="_blank" class="os"><i class="fab fa-youtube"></i></a></li>';}
            if ($twitter) { echo '<li class="list-inline-item"><a href="'. $twitter. '" target="_blank" class="os"><i class="fab fa-twitter"></i></a></li>';}
            if ($pinterest) { echo '<li class="list-inline-item"><a href="'. $pinterest . '" target="_blank" class="os"><i class="fab fa-pinterest"></i></a></li>';}
            if ($tiktok) { echo '<li class="list-inline-item"><a href="'. $tiktok . '" target="_blank" class="os"><i class="fab fa-tiktok"></i></a></li>';}
            
            
            if ($whatsapp) { echo '<li class="list-inline-item"><a href="https://api.whatsapp.com/send?phone='. $whatsapp . '" target="_blank" class="os"><i class="fab fa-whatsapp"></i></a></li>';}
              
            echo '</ul>';
          }

            
          
          echo '</div><!--End .card-body-->';
          
          
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


/*** CATALOGO DISENIO X RUBRO ***/
if ( ! function_exists( 'wp_archive_catalogodixrubro' ) ) {
  function wp_archive_catalogodixrubro($rubro) {
      $args = array(
          'post_type'              => 'disenio',
          'posts_per_page'         => -1,
          'post_status'            => 'publish',
          'no_found_rows'          => true,
          'tax_query' => array(
          array(
              'taxonomy' => 'rubro_di',
              'field' => 'slug', 
              'terms' => $rubro, /// Where term_id of Term 1 is "1".
              'include_children' => true
              )
          )
      );

    // The Query
    $query_catalogodixrubro = new WP_Query( $args );
    // The Loop
    if ( $query_catalogodixrubro->have_posts() ) {
      $term = get_term_by('slug', $rubro, 'rubro_di'); 
      $tag_name = $term->name;
      echo '<h3 class="mb-4"><strong>'.$tag_name.'</strong>  <a href="/rubro_di/'.$rubro.'/?post_type=disenio" style="font-size: .9rem;line-height:1rem;" class="btn btn-outline-primary">Ver todos</a></h3>';
      echo '<div class="slick tienda mb-5">';

      while ( $query_catalogodixrubro->have_posts() ) : $query_catalogodixrubro->the_post();

          $images = rwmb_meta( 'image_di', array( 'size' => 'medium' ) );
          $address = rwmb_meta( 'address' );
          $url = rwmb_meta( 'mbox_url' );
          $instagram = rwmb_meta( 'mbox_instagram' );
          $twitter = rwmb_meta( 'mbox_twitter' );
          $facebook = rwmb_meta( 'mbox_facebook' );
          $youtube = rwmb_meta( 'mbox_youtube' );
          $pinterest = rwmb_meta( 'mbox_pinterest' );
          $tiktok = rwmb_meta( 'mbox_tiktok' );
          $whatsapp = rwmb_meta( 'mbox_whatsapp' );

          $medios = rwmb_meta('mbox_medios');
          $terms = get_the_terms( $post->ID, 'rubro_di' );
          $dterms = get_the_terms( $post->ID, 'descuento_di' );
          $post_id = get_the_ID();

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
          $images = rwmb_meta( 'image_di', array( 'size' => 'medium', 'limit' => 1 ) );
          $image = reset( $images );
          echo '<div class="grid-item-content card w-100" style="border-radius: 0 0 0.25rem 0.25rem;border-top: 0;">';
          echo '<div class="img-wrapper" style="background-image:url('.$image['url'].');"></div>';
          echo '<a href="' . get_the_permalink() .'" rel="slidemark" class="stretched-link"></a>';
          echo '<div class="card-body">';
          echo '<h5 class="card-title">' . get_the_title() . '</h5>';
          if ( has_excerpt() ) {
              echo '<div class="card-text">' . get_the_excerpt() .'</div>';
          } else {
              echo '<div class="card-text">' . wp_trim_words( get_the_content(), 45, '...' ) .'</div>';
          }
          if ($dterms) {
              echo '<div class="descuento_di">';
              foreach( $dterms as $term ) { echo '<span class="badge badge-dark mt-1 os p-1">'.$term->name.'</span>', ' ';}
              echo '</div>';
          }
          if ($medios) {
              echo '<div class="medios-de-pago d-block position-relative mt-1">';
              foreach ( $medios as $medio ) {
                  if ($medio == 'debito') :
                      echo '<span class="medio_digital tool-tip d-inline mr-2 '.$medio.'" data-toggle="tooltip" data-placement="top" title="Tarjeta de débito"><i class="fas fa-credit-card"></i></span>';
                  endif;
                  if ($medio == 'credito') :
                      echo '<span class="medio_digital tool-tip d-inline mr-2 '.$medio.'" data-toggle="tooltip" data-placement="top" title="Tarjeta de crédito"><i class="far fa-credit-card"></i></span>';
                  endif;
                  if ($medio == 'cuentadni') :
                      echo '<span class="medio_digital tool-tip d-inline mr-2 '.$medio.'" data-toggle="tooltip" data-placement="top" title="Cuenta DNI"><i class="fas fa-money-check"></i></span>';
                  endif;
                  if ($medio == 'mercadopago') :
                      echo '<span class="medio_digital tool-tip d-inline mr-2 '.$medio.'" data-toggle="tooltip" data-placement="top" title="Mercado Pago"><i class="fas fa-money-bill-wave"></i></span>';
                  endif;
                  if ($medio == 'transferencia') :
                      echo '<span class="medio_digital tool-tip d-inline mr-2 '.$medio.'" data-toggle="tooltip" data-placement="top" title="Transferencia"><i class="fas fa-money-check-alt"></i></span>';
                  endif;
                  if ($medio == 'paypal') :
                      echo '<span class="medio_digital tool-tip d-inline mr-2 '.$medio.'" data-toggle="tooltip" data-placement="top" title="Paypal"><i class="fab fa-cc-paypal"></i></span>';
                  endif;
                  if ($medio == 'otros') :
                      echo '<span class="medio_digital tool-tip d-inline mr-2 '.$medio.'" data-toggle="tooltip" data-placement="top" title="Otros"><i class="fas fa-wallet"></i></span>';
                  endif;
              }
              echo '</div>';
          }

          $envios = rwmb_meta( 'envios' );
          if ($envios) {
              echo '<div class="mt-1 mr-2 tool-tip d-inline" data-toggle="tooltip" data-placement="top" title="'.$envios.'"><i class="fas fa-truck"></i></div>';
          }

          $tienda = rwmb_meta( 'mbox_tienda' );
          if ($tienda) {
              echo '<div class="d-inline mt-1"><a href="'.$tienda.'" class="tool-tip" data-toggle="tooltip" data-placement="top" title="Ir a tienda virtual" target="_blank"><i class="fas fa-shopping-cart"></i></a></div>';
          }

          if ($url || $instagram || $facebook || $youtube || $twitter || $pinterest || $tiktok) {
            echo '<ul class="contacto list-unstyled mt-1 mb-1">';
            if ($url) { echo '<li class="list-inline-item"><a href="'. $url . '" target="_blank" class="os"><i class="fas fa-globe-americas"></i></a></li>';}
            if ($instagram) { echo '<li class="list-inline-item"><a href="'. $instagram. '" target="_blank" class="os"><i class="fab fa-instagram"></i></a></li>';}
            if ($facebook) { echo '<li class="list-inline-item"><a href="'. $facebook. '" target="_blank" class="os"><i class="fab fa-facebook"></i></a></li>';}
            if ($youtube) { echo '<li class="list-inline-item"><a href="'. $youtube . '" target="_blank" class="os"><i class="fab fa-youtube"></i></a></li>';}
            if ($twitter) { echo '<li class="list-inline-item"><a href="'. $twitter. '" target="_blank" class="os"><i class="fab fa-twitter"></i></a></li>';}
            if ($pinterest) { echo '<li class="list-inline-item"><a href="'. $pinterest . '" target="_blank" class="os"><i class="fab fa-pinterest"></i></a></li>';}
            if ($tiktok) { echo '<li class="list-inline-item"><a href="'. $tiktok . '" target="_blank" class="os"><i class="fab fa-tiktok"></i></a></li>';}
            
            
            if ($whatsapp) { echo '<li class="list-inline-item"><a href="https://api.whatsapp.com/send?phone='. $whatsapp . '" target="_blank" class="os"><i class="fab fa-whatsapp"></i></a></li>';}
              
            echo '</ul>';
          }
 
          echo '</div><!--End .card-body-->';
          echo '</div></div>';
      endwhile;
      echo '</div>';
      wp_reset_postdata();
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

/*** CONTENIDO - EX AGENDA ***/
if ( ! function_exists( 'wp_archive_contenido' ) ) {
  function wp_archive_contenido($post_category, $post_tag) {

    $args = array(
        'post_type'             => 'agenda',
        'posts_per_page'        => -1,
        'category_name'         => $post_category,
        'tag'                   => $post_tag,
    );

    // The Query
    $query_agenda = new WP_Query( $args );

    if ( $query_agenda->have_posts() ) { 
      echo '<div class="slick agenda contenido slider-nav">';
      while ( $query_agenda->have_posts() ) : $query_agenda->the_post();
          get_template_part( 'template-parts/content-contenido', get_post_type() );
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
        echo '<div class="mb-md-4 mb-1 w-100 ';
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
                echo '<div class="col-md-4">';
                  echo '<div class="fecha"><span class="dia">'.date('d-m', $fecha).'</span><span class="hora">'. date('H:i', $fecha).'hs</span></div>';
                echo '</div>';
                echo '<div class="col-md-11">';
                  echo the_title( '<h5 class="card-title font-weight-bold pr-3">', '</h5>' );
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

/*** AGENDA DESTACADO***/
if ( ! function_exists( 'wp_archive_conversaciones' ) ) {
  function wp_archive_conversaciones($post_category) {
    $args = array(
      'post_type'             => 'agenda',
      'posts_per_page'        => -1,
      'category_name'         => $post_category,
      'meta_query'            => array(
          'destacado_clause'  => array(
              'key'           => 'destacado_id',
              'value'         => 1,
          ),
      ),
    );
    // The Query
    $query_cartelera = new WP_Query( $args );

    if ( $query_cartelera->have_posts() ) { 
      echo '<div class="slick conversaciones_slide">';
      while ( $query_cartelera->have_posts() ) : $query_cartelera->the_post();
        get_template_part( 'layouts/card', 'conversaciones-slide' );
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
    $days_dias = array(
	    'Monday'=>'Lunes',
	    'Tuesday'=>'Martes',
	    'Wednesday'=>'Miércoles',
	    'Thursday'=>'Jueves',
	    'Friday'=>'Viernes',
	    'Saturday'=>'Sábado',
	    'Sunday'=>'Domingo'
    );

    while ( $the_query->have_posts() ) : $the_query->the_post();

        $fecha = rwmb_meta( 'fecha_id' ); 
        $fecha_evento = $days_dias[date('l',$fecha)].' '.date('d-m', $fecha);
        
        $todos_los_eventos[ $fecha_evento ][] = $the_query->post;
    endwhile;
    wp_reset_query();

    // And to print this:
    
    echo '<h2 class="font-weight-bold d-inline-block mr-3 titulo"><i class="fas fa-calendar-alt"></i>   Programación completa </h2>';
    echo '<div class="pasadia mx-auto">';
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
                      
                      echo '<div class="col-md-9 pl-md-4">';
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

/*** AGENDA ***/
if ( ! function_exists( 'wp_archive_cartelera_destacada' ) ) {
  function wp_archive_cartelera_destacada() {

    $args = array(
        'post_type'             => 'audiovisual',
        'posts_per_page'        => -1,
        'meta_query'            => array(
            'destacado_clause'  => array(
                'key'           => 'destacado_id',
                'value'         => 1,
            ),
        ),
    );

    // The Query
    $query_cartelera = new WP_Query( $args );

    if ( $query_cartelera->have_posts() ) { 
      echo '<div class="slick cartelera">';
      while ( $query_cartelera->have_posts() ) : $query_cartelera->the_post();
        get_template_part( 'layouts/card', 'cartelera' );
      endwhile;
      echo '</div>';
    } else {
      get_template_part( 'template-parts/content', 'none' );    
    }
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

/*** BANNERS ***/
if ( ! function_exists( 'wp_archive_banners' ) ) {
  function wp_archive_banners($post_category) {

    $args = array(
        'post_type'             => 'banner',
        'posts_per_page'        => -1,
        'category_name'         => $post_category,
    );

    // The Query
    $query_banners = new WP_Query( $args );
    
    
    if ( $query_banners->have_posts() ) { 
      echo '<div class="container banner-slick py-5">';
      while ( $query_banners->have_posts() ) : $query_banners->the_post();
      /* grab the url for the full size featured image */
      $enlace = rwmb_meta( 'mbox_url' );
      $img_desktop = rwmb_meta( 'mbox_imagen_desktop', array( 'size' => 'full' ) );
      $img_mobile = rwmb_meta( 'mbox_imagen_mobile', array( 'size' => 'full' ) );

      if ($img_desktop || $img_mobile) {
      echo '<div class="item" style="background:white!important;">';
        if ($img_desktop) {
          echo '<a href="'.$enlace.'" target="_blank" title="'.get_the_title().'">';
          foreach ( $img_desktop as $image_desktop ) {
            echo '<img src="', $image_desktop['url'], '" class="img-fluid d-none d-sm-block" alt="'.get_the_title().'">';
          }
          echo '</a>';
        }
        if ($img_mobile) {
          echo '<a href="'.$enlace.'" target="_blank" title="'.get_the_title().'">';
          foreach ( $img_mobile as $image_mobile ) {
            echo '<img src="', $image_mobile['url'], '" class="mx-auto img-fluid d-block d-sm-none" alt="'.get_the_title().'">';
          }
          echo '</a>';
        }
      echo '</div>';
      }
      endwhile;
      echo '</div>';
    }
  }
}

/*** LISTAS POR TAXONOMIA TERRITORIO ***/
if ( ! function_exists( 'wp_archive_experiencias_x_recurso' ) ) {
  function wp_archive_experiencias_x_recurso($recurso, $area) {
    $args = array(
      'post_type'              => 'experiencias',
      'posts_per_page'         => -1,
      'post_status'            => 'publish',
      'no_found_rows'          => true,
      'tax_query' => array(
        'relation' => 'AND',
        array(
          'taxonomy'               => 'recurso',
          'field'                  => 'slug',
          'terms'                  => $recurso,
        ),
        array(
          'taxonomy'               => 'area',
          'field'                  => 'slug',
          'terms'                  => $area,
        ),
      )
    );

    // The Query
    $query_catalogo = new WP_Query( $args );
    // The Loop
    if ( $query_catalogo->have_posts() ) {
      $term = get_term_by('slug', $recurso, 'recurso'); 
      $tag_name = $term->name;
      while ( $query_catalogo->have_posts() ) : $query_catalogo->the_post();
        if($recurso == 'conferencias') {
          get_template_part( 'layouts/card', 'conferencias' ); 
        } else {
          get_template_part( 'layouts/card', 'experiencias' ); 
        }
        
      endwhile;
      echo '</div>';
      wp_reset_postdata();
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