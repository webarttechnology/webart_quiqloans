<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */


/**
 * Add "is-IE" class to body if the user is on Internet Explorer.
 *
 *
 * @return void
 */
function twentytwentyone_add_ie_class() {
	?>
	<script>
	if ( -1 !== navigator.userAgent.indexOf( 'MSIE' ) || -1 !== navigator.appVersion.indexOf( 'Trident/' ) ) {
		document.body.classList.add( 'is-IE' );
	}
	</script>
	<?php
}
add_action( 'wp_footer', 'twentytwentyone_add_ie_class' );

//ACF option menu

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page();
    
}

//=====================Gallery Post Type==============================

function post_type_gallery() {

$labels = array(
'name' => _x('Gallery', 'plural'),
'singular_name' => _x('Gallerys', 'singular'),
'menu_name' => _x('Gallerys', 'admin menu'),
'name_admin_bar' => _x('Gallery', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New Gallery'),
'new_item' => __('New Gallery'),
'edit_item' => __('Edit Gallery'),
'view_item' => __('View Gallery'),
'all_items' => __('All Gallerys'),

);
$args = array(
'supports' => array( 'title',  'thumbnail', 'editor',),
'labels' => $labels,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'gallery'),
'has_archive' => true,
'hierarchical' => false,
);
register_post_type('gallery', $args);
}
add_action('init', 'post_type_gallery');


//=====================Product Post Type==============================

function post_type_product() {

$labels = array(
'name' => _x('Products', 'plural'),
'singular_name' => _x('Product', 'singular'),
'menu_name' => _x('Product', 'admin menu'),
'name_admin_bar' => _x('Product', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New Product'),
'new_item' => __('New Product'),
'edit_item' => __('Edit Product'),
'view_item' => __('View Product'),
'all_items' => __('All Products'),

);
$args = array(
'supports' => array( 'title',  'thumbnail', 'editor',),
'labels' => $labels,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'product'),
'has_archive' => true,
'hierarchical' => false,
);
register_post_type('product', $args);
}
add_action('init', 'post_type_product');