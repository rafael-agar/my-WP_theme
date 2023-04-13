<?php
/*
    Plugin Name: myInstructors - Post Types
    Plugin URI: http://rafaelagar.com
    Description: Add Post Types Instructor sitio
    Version: 1.0.0
    Author: Rafael Agar
    Author URI: http://rafaelagar.com
    Text Domain: myinstructor
*/


 /* Agrega el post type de Instructors */
 function myinstructor_posttype_instructors() {
	$labels = array(
		'name'                  => _x( 'Instructors', 'myinstructor' ),
		'singular_name'         => _x( 'Instructor',  'myinstructor' ),
		'menu_name'             => _x( 'Instructors', 'Admin Menu text', 'myinstructor' ),
		'name_admin_bar'        => _x( 'Instructors', 'Add New on Toolbar', 'myinstructor' ),
		'add_new'               => __( 'Agregar ', 'myinstructor' ),
		'add_new_item'          => __( 'Agregar Nuevo Instructor', 'myinstructor' ),
		'new_item'              => __( 'Nueva Instructor', 'myinstructor' ),
		'edit_item'             => __( 'Editar Instructor', 'myinstructor' ),
		'view_item'             => __( 'Ver Instructor', 'myinstructor' ),
		'all_items'             => __( 'Todos los Instructor', 'myinstructor' ),
		'search_items'          => __( 'Buscar Instructors', 'myinstructor' ),
		'parent_item_colon'     => __( 'Padre Instructors:', 'myinstructor' ),
		'not_found'             => __( 'No se encontraron Instructors.', 'myinstructor' ),
		'not_found_in_trash'    => __( 'No se encontrar Instructors en la Papelera', 'myinstructor' ),
		'featured_image'        => _x( 'Imagen Destacada', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'myinstructor' ),
		'set_featured_image'    => _x( 'Agregar imagen Destacada', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'myinstructor' ),
		'remove_featured_image' => _x( 'Borrar imagen destacada', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'myinstructor' ),
		'use_featured_image'    => _x( 'Usar Imagen destacada', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'myinstructor' ),
		'archives'              => _x( 'Archivo de Instructors', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'myinstructor' ),
		'insert_into_item'      => _x( 'Insertar en Instructors', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'myinstructor' ),
		'uploaded_to_this_item' => _x( 'Cargadas En Instructors', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'myinstructor' ),
		'filter_items_list'     => _x( 'Filtrar Lista de Instructors', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'myinstructor' ),
		'items_list_navigation' => _x( 'Instructors navegación', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'myinstructor' ),
		'items_list'            => _x( 'Instructors lista', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'myinstructor' ),
	);
 
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'Instructors-instructors' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'menu_icon'          => 'dashicons-admin-users',
		// true como paginas (pueden tener hijos), false como posts (no tienen hijos)
		'hierarchical'       => false,
		'menu_position'      => 7,
		'supports'           => array( 'title', 'editor',  'thumbnail' ),
		'show_in_rest'       => true,
		'rest_base'          => 'Instructors-instructors'
	);
 
	register_post_type( 'Instructors', $args );
}
 
add_action( 'init', 'myinstructor_posttype_instructors' );