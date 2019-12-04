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
  );
  register_post_type( 'news', $args );

}
add_action( 'init', 'news_post_type', 0 );