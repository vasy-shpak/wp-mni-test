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

