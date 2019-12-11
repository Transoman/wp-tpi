<?php
// Register Custom Post Type
function news_post_type() {

  $labels = array(
    'name'                  => _x( 'News', 'Post Type General Name', 'ith' ),
    'singular_name'         => _x( 'News', 'Post Type Singular Name', 'ith' ),
    'menu_name'             => __( 'News', 'ith' ),
    'name_admin_bar'        => __( 'News', 'ith' ),
    'archives'              => __( 'News', 'ith' )
  );
  $args = array(
    'label'                 => __( 'News', 'ith' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-format-aside',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
    'show_in_rest'          => true
  );
  register_post_type( 'news', $args );

}
add_action( 'init', 'news_post_type', 0 );

// Register Portfolio Post Type
function portfolio_post_type() {

  $labels = array(
    'name'                  => _x( 'Our works', 'Post Type General Name', 'ith' ),
    'singular_name'         => _x( 'Our work', 'Post Type Singular Name', 'ith' ),
    'menu_name'             => __( 'Our works', 'ith' ),
    'name_admin_bar'        => __( 'Our works', 'ith' ),
    'archives'              => __( 'Our works', 'ith' )
  );
  $args = array(
    'label'                 => __( 'Our work', 'ith' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-portfolio',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type( 'portfolio', $args );

}
add_action( 'init', 'portfolio_post_type', 0 );