<?php

function carousel() {
 
 register_post_type( 'People',
 // CPT Options
     array(
         'labels' => array(
             'name' => __( 'Movies' ),
             'singular_name' => __( 'Movie' )
         ),
         'public' => true,
         'has_archive' => true,
         'rewrite' => array('slug' => 'movies'),
         'show_in_rest' => true,

     )
 );
}
// Hooking up our function to theme setup
add_action( 'init', 'carousel' );
