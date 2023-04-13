<?php
/*
    Plugin Name: myClasses - Post Types
    Plugin URI: http://rafaelagar.com
    Description: Añade Post Types Classes al sitio
    Version: 1.0.0
    Author: Rafael Agar
    Author URI: http://rafaelagar.com
    Text Domain: myclasses
*/



if(!defined('ABSPATH')) die();

// Registrar Custom Post Type
function myclasses_clases_post_type() {

	$labels = array(
		'name'                  => _x( 'Classes', 'Post Type General Name', 'myclasses' ),
		'singular_name'         => _x( 'Clase', 'Post Type Singular Name', 'myclasses' ),
		'menu_name'             => __( 'Classes', 'myclasses' ),
		'name_admin_bar'        => __( 'Class', 'myclasses' ),
		'archives'              => __( 'Archivo', 'myclasses' ),
		'attributes'            => __( 'Atributos', 'myclasses' ),
		'parent_item_colon'     => __( 'Class Padre', 'myclasses' ),
		'all_items'             => __( 'Todas Las Classes', 'myclasses' ),
		'add_new_item'          => __( 'Agregar Class', 'myclasses' ),
		'add_new'               => __( 'Agregar Class', 'myclasses' ),
		'new_item'              => __( 'Nueva Class', 'myclasses' ),
		'edit_item'             => __( 'Editar Class', 'myclasses' ),
		'update_item'           => __( 'Actualizar Class', 'myclasses' ),
		'view_item'             => __( 'Ver Class', 'myclasses' ),
		'view_items'            => __( 'Ver Classes', 'myclasses' ),
		'search_items'          => __( 'Buscar Class', 'myclasses' ),
		'not_found'             => __( 'No Encontrado', 'myclasses' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'myclasses' ),
		'featured_image'        => __( 'Imagen Destacada', 'myclasses' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'myclasses' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'myclasses' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'myclasses' ),
		'insert_into_item'      => __( 'Insertar en Class', 'myclasses' ),
		'uploaded_to_this_item' => __( 'Agregado en Class', 'myclasses' ),
		'items_list'            => __( 'Lista de Classes', 'myclasses' ),
		'items_list_navigation' => __( 'Navegación de Classes', 'myclasses' ),
		'filter_items_list'     => __( 'Filtrar Classes', 'myclasses' ),
	);
	$args = array(
		'label'                 => __( 'Class', 'myclasses' ),
		'description'           => __( 'Classes para el Sitio Web', 'myclasses' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => true, // true = posts , false = paginas
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'myclasses_clases', $args );

}
add_action( 'init', 'myclasses_clases_post_type', 0 );

