<?php
add_filter('acf/settings/save_json', 'ith_acf_json_save_point');
function ith_acf_json_save_point( $path ) {
	// update path
	$path = get_stylesheet_directory() . '/inc/acf-json';
	// return
	return $path;
}
add_filter('acf/settings/load_json', 'ith_acf_json_load_point');
function ith_acf_json_load_point( $paths ) {
	// remove original path (optional)
	unset($paths[0]);
	// append path
	$paths[] = get_stylesheet_directory() . '/inc/acf-json';
	// return
	return $paths;
}
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

function register_acf_block_types() {

  // register a testimonial block.
  acf_register_block_type(array(
    'name'              => 'ith-quote',
    'title'             => __('Quote TPI'),
    'render_template'   => 'template-parts/blocks/quote/quote.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'keywords'          => array( 'quote' ),
  ));
}

if( function_exists('acf_register_block_type') ) {
  add_action('acf/init', 'register_acf_block_types');
}