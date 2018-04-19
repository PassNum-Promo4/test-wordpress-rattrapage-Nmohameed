<?php

/* Chargement de la feuille du style du theme parent */
add_action( 'wp_enqueue_scripts', 'wpchild_enqueue_styles' );
function wpchild_enqueue_styles(){
  wp_enqueue_style( 'wpm-wp-bootstrap-starter-style', get_template_directory_uri() . '/style.css' );
}


function create_post_type() {
 register_post_type( 'Plats',
   array(
     'labels' => array(
       'name' => __( 'Plats' ),
       'singular_name' => __( 'Plats' )
     ),
     'public' => true,
     'has_archive' => true,
   )
 );
}
add_action( 'init', 'create_post_type' );

function create_post_type1() {
 register_post_type( 'acceuil',
   array(
     'labels' => array(
       'name' => __( 'acceuil' ),
       'singular_name' => __( 'acceuil' )
     ),
     'public' => true,
     'has_archive' => true,
   )
 );
}
add_action( 'init', 'create_post_type1' );

add_action( 'pre_get_posts', 'wpse_242473_add_post_type_to_home' );

function wpse_242473_add_post_type_to_home( $query ) {

    if( $query->is_main_query() && $query->is_home() ) {
        $query->set( 'post_type', array( 'post', 'acceuil') );
    }
}