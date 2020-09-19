<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Theme Options' ) )
        ->add_fields( array(
            Field::make( 'text', 'crb_text', 'Text Field' ),
        ) );
}


add_action( 'carbon_fields_register_fields', 'crb_attach_post_meta' );
function crb_attach_post_meta() {
    Container::make( 'post_meta', __( 'Features Expo Area' ) )
        ->where( 'post_type', '=', 'page' ) // only show our new fields on pages
        ->add_fields( array(
            Field::make( 'complex', 'crb_slides', 'Feature Items' )
                ->set_layout( 'tabbed-horizontal' )
                ->add_fields( array(
                    Field::make( 'text', 'title', 'Feature Essnce' ),
					Field::make( 'image', 'image', 'Thumbnail Image' ),
					Field::make( 'image', 'description-image', 'Description Image' ),
					Field::make( 'text', 'description-title', 'Description Headline' ),
					Field::make( 'text', 'description_text', 'Text Field' ),
                ) ),
		) );

}

add_theme_support( 'post-thumbnails' );

add_action('init', 'add_people');
function add_people(){
	register_post_type('add_people', array(
		'labels'             => array(
			'name'               => 'People', // Основное название типа записи
			'singular_name'      => 'Person', // отдельное название записи типа Book
			'add_new'            => 'Add new',
			'add_new_item'       => 'Add new person',
			'edit_item'          => 'Edit information',
			'new_item'           => 'New iformation',
			'view_item'          => 'View person',
			'search_items'       => 'Search person',
			'not_found'          => 'Not found',
			'not_found_in_trash' => '',
			'parent_item_colon'  => '',
			'menu_name'          => 'People'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'supports'           => array('title','excerpt','editor','thumbnail')
	) );
}

add_action('init', 'add_media');
function add_media(){
	register_post_type('add_media', array(
		'labels'             => array(
			'name'               => 'Articles', 
			'singular_name'      => 'Article', 
			'add_new'            => 'Add new',
			'add_new_item'       => 'Add new article',
			'edit_item'          => 'Edit information',
			'new_item'           => 'New iformation',
			'view_item'          => 'View article',
			'search_items'       => 'Search article',
			'not_found'          => 'Not found',
			'not_found_in_trash' => '',
			'parent_item_colon'  => '',
			'menu_name'          => 'Articles'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array('title','excerpt','thumbnail','custom-fields')
	) );
}

add_action('init', 'add_network');
function add_network(){
	register_post_type('add_network', array(
		'labels'             => array(
			'name'               => 'Networks', 
			'singular_name'      => 'Network', 
			'add_new'            => 'Add new',
			'add_new_item'       => 'Add new Network',
			'edit_item'          => 'Edit information',
			'new_item'           => 'New iformation',
			'view_item'          => 'View Network',
			'search_items'       => 'Search Network',
			'not_found'          => 'Not found',
			'not_found_in_trash' => '',
			'parent_item_colon'  => '',
			'menu_name'          => 'Networks'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 7,
		'supports'           => array('title','thumbnail',)
	) );
}

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

// Menus

function mni_menus() {
	$locations = array(
		'primary' => "Desktop main menu"
	);
	register_nav_menus($locations);
}

add_action('init', 'mni_menus');

/**
 * Enqueue scripts and styles.
 */
function mni_scripts() {
	wp_enqueue_style( 'custom-style',  get_template_directory_uri() . '/css/custom.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'mni-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'mni-style', 'rtl', 'replace' );

	wp_enqueue_script( 'mni-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'common-js', get_template_directory_uri() .'/js/scripts.min.js', array(), _S_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mni_scripts' );

