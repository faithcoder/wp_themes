<?php 

function faith_setup(){
    add_theme_support( 'title-tag' );
	add_theme_support('post-thumbnails', array('post','faith_slider'));
    load_theme_textdomain('faith',get_template_directory().'/languages');
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'faith'),
    ));
}
add_action( 'after_setup_theme', 'faith_setup');

function add_link_atts($atts){
	$atts['class'] = "nav-link";
	return $atts;
}
add_filter("nav_menu_link_attributes","add_link_atts");


//wp_enqueue_style( $handle, $src, $deps, $ver, $media );

function faith_business_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.1', 'all' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.1', 'all' );
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.1', 'all' );
	wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.css', array(), '1.1', 'all' );
	wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.1', 'all' );
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.1', 'all' );

	wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array( 'jquery' ), 1.1, true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), 1.1, true );
	wp_enqueue_script( 'carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array( 'jquery' ), 1.1, true );
	wp_enqueue_script( 'waypoint', get_template_directory_uri() . '/assets/js/waypoint.min.js', array( 'jquery' ), 1.1, true );
	wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/js/counterup.min.js', array( 'jquery' ), 1.1, true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), 1.1, true );

}
add_action( 'wp_enqueue_scripts', 'faith_business_scripts' );

// Register Custom Post Type
function slider_post() {

	$labels = array(
		'name'                  => _x( 'Faith Sliders', 'Post Type General Name', 'slider_post' ),
		'singular_name'         => _x( 'Faith Slider', 'Post Type Singular Name', 'slider_post' ),
		'menu_name'             => __( 'Faith Sliders', 'slider_post' ),
		'name_admin_bar'        => __( 'Faith Slider', 'slider_post' ),
		'archives'              => __( 'Item Archives', 'slider_post' ),
		'attributes'            => __( 'Item Attributes', 'slider_post' ),
		'parent_item_colon'     => __( 'Parent Item:', 'slider_post' ),
		'all_items'             => __( 'All Items', 'slider_post' ),
		'add_new_item'          => __( 'Add New Item', 'slider_post' ),
		'add_new'               => __( 'Add New', 'slider_post' ),
		'new_item'              => __( 'New Item', 'slider_post' ),
		'edit_item'             => __( 'Edit Item', 'slider_post' ),
		'update_item'           => __( 'Update Item', 'slider_post' ),
		'view_item'             => __( 'View Item', 'slider_post' ),
		'view_items'            => __( 'View Items', 'slider_post' ),
		'search_items'          => __( 'Search Item', 'slider_post' ),
		'not_found'             => __( 'Not found', 'slider_post' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'slider_post' ),
		'featured_image'        => __( 'Featured Image', 'slider_post' ),
		'set_featured_image'    => __( 'Set featured image', 'slider_post' ),
		'remove_featured_image' => __( 'Remove featured image', 'slider_post' ),
		'use_featured_image'    => __( 'Use as featured image', 'slider_post' ),
		'insert_into_item'      => __( 'Insert into item', 'slider_post' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'slider_post' ),
		'items_list'            => __( 'Items list', 'slider_post' ),
		'items_list_navigation' => __( 'Items list navigation', 'slider_post' ),
		'filter_items_list'     => __( 'Filter items list', 'slider_post' ),
		
	);
	$args = array(
		'label'                 => __( 'Faith Slider', 'slider_post' ),
		'description'           => __( 'Post Type Description', 'slider_post' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'     		=> true,
	);
	register_post_type( 'faith_slider', $args );

}
add_action( 'init', 'slider_post', 0 );