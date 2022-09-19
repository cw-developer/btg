<?php
/**
 * btg functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package btg
 */	

if ( ! function_exists( 'btg_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function btg_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on btg, use a find and replace
		 * to change 'btg' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'btg', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'btg' ),
			'top-header' => esc_html__( 'Top Header', 'btg' ),
            'quick-links' => esc_html__( 'Quick Links', 'btg' ),
			'services-solutions' => esc_html__( 'Services & Solutions', 'btg' ),
			'others' => esc_html__( 'Others', 'btg' ),
			'connect-socially' => esc_html__( 'Connect Socially', 'btg' ),
		) );


		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'btg_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'btg_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function btg_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'btg_content_width', 640 );
}
add_action( 'after_setup_theme', 'btg_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function btg_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'btg' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'btg' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'btg_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function btg_scripts() {
    wp_enqueue_script('btg-jquery-script','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js');
	wp_enqueue_script('btg-jquery-ui','https://code.jquery.com/ui/1.12.1/jquery-ui.min.js');
    wp_enqueue_style( 'btg-style', get_stylesheet_uri() );
    wp_enqueue_style( 'btg-style-bs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'btg-dev-style', get_template_directory_uri() . '/btg-style.css');
    // wp_enqueue_style( 'btg-secondary-style', get_template_directory_uri() . '/custom-style.css');
    wp_enqueue_style( 'btg-responsive-style', get_template_directory_uri() . '/responsive-style.css');
    wp_enqueue_style( 'btg-mobile-style', get_template_directory_uri() . '/css/mobile_menu.css');
    wp_enqueue_style( 'btg-font', 'https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap' );
    wp_enqueue_script( 'slider-tiny-carousel-js', get_template_directory_uri() . '/js/tiny-slider.js', '2.2', true);
    wp_enqueue_style( 'slider-tiny-carousel-css', get_template_directory_uri() . '/css/tiny-slider.css' ); 
    wp_enqueue_script( 'btg-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
    wp_enqueue_script( 'btg-mobile-js', get_template_directory_uri() . '/js/mobile_menu.js?t');
    wp_enqueue_script( 'btg-script-js', get_template_directory_uri() . '/js/btg-script.js');
    wp_enqueue_script( 'mousewheel-js', get_template_directory_uri() . '/js/jquery.mousewheel.min.js');
    wp_enqueue_script( 'btg-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
    wp_enqueue_script('btg-bs-script','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js');
	wp_enqueue_script('btg-bs-bundle-script','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js');
if(is_page('Media Gallery')) {
	wp_enqueue_script( 'lightgallery-js', get_template_directory_uri() . '/js/lightgallery-all.min.js');
    wp_enqueue_script( 'lightgallery-video-js', get_template_directory_uri() . '/js/lg-video.min.js');
	wp_enqueue_style( 'lightgallery-css', get_template_directory_uri() . '/css/lightgallery.css' );
}
global $post_type;
	if ('post' == $post_type || is_home() || is_category() || is_tag() || is_post_type_archive() || is_tax() || is_search() ) {
        global $wp_query;
        wp_register_script('my_loadmore', get_template_directory_uri() . '/js/myloadmore.js?rf', array('jquery'));
        wp_localize_script('my_loadmore', 'rf_loadmore_params', array('ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', 'posts' => json_encode($wp_query->query_vars), 'current_page' => get_query_var('paged') ? get_query_var('paged') : 1, 'max_page' => $wp_query->max_num_pages));
        wp_enqueue_script('my_loadmore');
    }
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
    if ( ! wp_is_mobile() ) { 
    }
    if( is_front_page() ){
        wp_enqueue_script( 'home-script-js', get_template_directory_uri() . '/js/home.js');
    }
}

add_action( 'wp_enqueue_scripts', 'btg_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/ajax/mybtgfiledetails.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {
    global $wp_version;

   
    $filetype = wp_check_filetype( $filename, $mimes );

    return [
        'ext'             => $filetype['ext'],
        'type'            => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];

}, 10, 4 );
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}

function cptui_register_my_cpts_pressrelease() {

	/**
	 * Post Type: Press Releases.
	 */

	$labels = [
		"name" => __( "Press Releases", "btg" ),
		"singular_name" => __( "Press Release", "btg" ),
		"menu_name" => __( "Press Releases", "btg" ),
		"all_items" => __( "All Press Releases", "btg" ),
		"add_new" => __( "Add new", "btg" ),
		"add_new_item" => __( "Add new Press Release", "btg" ),
		"edit_item" => __( "Edit Press Release", "btg" ),
		"new_item" => __( "New Press Release", "btg" ),
		"view_item" => __( "View Press Release", "btg" ),
		"view_items" => __( "View Press Releases", "btg" ),
		"search_items" => __( "Search Press Releases", "btg" ),
		"not_found" => __( "No Press Releases found", "btg" ),
		"not_found_in_trash" => __( "No Press Releases found in trash", "btg" ),
		"parent" => __( "Parent Press Release:", "btg" ),
		"featured_image" => __( "Featured image for this Press Release", "btg" ),
		"set_featured_image" => __( "Set featured image for this Press Release", "btg" ),
		"remove_featured_image" => __( "Remove featured image for this Press Release", "btg" ),
		"use_featured_image" => __( "Use as featured image for this Press Release", "btg" ),
		"archives" => __( "Press Release archives", "btg" ),
		"insert_into_item" => __( "Insert into Press Release", "btg" ),
		"uploaded_to_this_item" => __( "Upload to this Press Release", "btg" ),
		"filter_items_list" => __( "Filter Press Releases list", "btg" ),
		"items_list_navigation" => __( "Press Releases list navigation", "btg" ),
		"items_list" => __( "Press Releases list", "btg" ),
		"attributes" => __( "Press Releases attributes", "btg" ),
		"name_admin_bar" => __( "Press Release", "btg" ),
		"item_published" => __( "Press Release published", "btg" ),
		"item_published_privately" => __( "Press Release published privately.", "btg" ),
		"item_reverted_to_draft" => __( "Press Release reverted to draft.", "btg" ),
		"item_scheduled" => __( "Press Release scheduled", "btg" ),
		"item_updated" => __( "Press Release updated.", "btg" ),
	    	"parent_item_colon" => __( "Parent Press Release:", "btg" ),
	];

	$args = [
		"label" => __( "Press Releases", "btg" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => true,
		"rewrite" => [ "slug" => "pressrelease", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-media-text",
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "pressrelease", $args );
}

add_action( 'init', 'cptui_register_my_cpts_pressrelease' );

function cptui_register_my_taxes_pressrelease_category() {

	/**
	 * Taxonomy: Categories.
	 */

	$labels = [
		"name" => __( "Categories", "btg" ),
		"singular_name" => __( "Category", "btg" ),
		"menu_name" => __( "Categories", "btg" ),
		"all_items" => __( "All Categories", "btg" ),
		"edit_item" => __( "Edit Category", "btg" ),
		"view_item" => __( "View Category", "btg" ),
		"update_item" => __( "Update Category name", "btg" ),
		"add_new_item" => __( "Add new Category", "btg" ),
		"new_item_name" => __( "New Category name", "btg" ),
		"parent_item" => __( "Parent Category", "btg" ),
		"parent_item_colon" => __( "Parent Category:", "btg" ),
		"search_items" => __( "Search Categories", "btg" ),
		"popular_items" => __( "Popular Categories", "btg" ),
		"separate_items_with_commas" => __( "Separate Categories with commas", "btg" ),
		"add_or_remove_items" => __( "Add or remove Categories", "btg" ),
		"choose_from_most_used" => __( "Choose from the most used Categories", "btg" ),
		"not_found" => __( "No Categories found", "btg" ),
		"no_terms" => __( "No Categories", "btg" ),
		"items_list_navigation" => __( "Categories list navigation", "btg" ),
		"items_list" => __( "Categories list", "btg" ),
		"back_to_items" => __( "Back to Categories", "btg" ),
		"name_field_description" => __( "The name is how it appears on your site.", "btg" ),
		"parent_field_description" => __( "Assign a parent term to create a hierarchy. The term Jazz, for example, would be the parent of Bebop and Big Band.", "btg" ),
		"slug_field_description" => __( "The slug is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.", "btg" ),
		"desc_field_description" => __( "The description is not prominent by default; however, some themes may show it.", "btg" ),
	];

	
	$args = [
		"label" => __( "Categories", "btg" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'pressrelease-category', 'with_front' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "pressrelease-category",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => true,
		"sort" => true,
		"show_in_graphql" => false,
	];
	register_taxonomy( "pressrelease-category", [ "pressrelease" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_pressrelease_category' );


function cptui_register_my_cpts_events() {

	/**
	 * Post Type: Events.
	 */

	$labels = [
		"name" => __( "Events", "btg" ),
		"singular_name" => __( "Event", "btg" ),
		"menu_name" => __( "Events", "btg" ),
		"all_items" => __( "All Events", "btg" ),
		"add_new" => __( "Add new", "btg" ),
		"add_new_item" => __( "Add new Event", "btg" ),
		"edit_item" => __( "Edit Event", "btg" ),
		"new_item" => __( "New Event", "btg" ),
		"view_item" => __( "View Event", "btg" ),
		"view_items" => __( "View Events", "btg" ),
		"search_items" => __( "Search Events", "btg" ),
		"not_found" => __( "No Events found", "btg" ),
		"not_found_in_trash" => __( "No Events found in trash", "btg" ),
		"parent" => __( "Parent Event:", "btg" ),
		"featured_image" => __( "Featured image for this Event", "btg" ),
		"set_featured_image" => __( "Set featured image for this Event", "btg" ),
		"remove_featured_image" => __( "Remove featured image for this Event", "btg" ),
		"use_featured_image" => __( "Use as featured image for this Event", "btg" ),
		"archives" => __( "Event archives", "btg" ),
		"insert_into_item" => __( "Insert into Event", "btg" ),
		"uploaded_to_this_item" => __( "Upload to this Event", "btg" ),
		"filter_items_list" => __( "Filter Events list", "btg" ),
		"items_list_navigation" => __( "Events list navigation", "btg" ),
		"items_list" => __( "Events list", "btg" ),
		"attributes" => __( "Events attributes", "btg" ),
		"name_admin_bar" => __( "Event", "btg" ),
		"item_published" => __( "Event published", "btg" ),
		"item_published_privately" => __( "Event published privately.", "btg" ),
		"item_reverted_to_draft" => __( "Event reverted to draft.", "btg" ),
		"item_scheduled" => __( "Event scheduled", "btg" ),
		"item_updated" => __( "Event updated.", "btg" ),
		"parent_item_colon" => __( "Parent Event:", "btg" ),
	];

	$args = [
		"label" => __( "Events", "btg" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => true,
		"rewrite" => [ "slug" => "events", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-portfolio",
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "events", $args );
}

add_action( 'init', 'cptui_register_my_cpts_events' );

function cptui_register_my_taxes_events_category() {

	/**
	 * Taxonomy: Categories.
	 */

	$labels = [
		"name" => __( "Categories", "btg" ),
		"singular_name" => __( "Category", "btg" ),
		"menu_name" => __( "Categories", "btg" ),
		"all_items" => __( "All Categories", "btg" ),
		"edit_item" => __( "Edit Category", "btg" ),
		"view_item" => __( "View Category", "btg" ),
		"update_item" => __( "Update Category name", "btg" ),
		"add_new_item" => __( "Add new Category", "btg" ),
		"new_item_name" => __( "New Category name", "btg" ),
		"parent_item" => __( "Parent Category", "btg" ),
		"parent_item_colon" => __( "Parent Category:", "btg" ),
		"search_items" => __( "Search Categories", "btg" ),
		"popular_items" => __( "Popular Categories", "btg" ),
		"separate_items_with_commas" => __( "Separate Categories with commas", "btg" ),
		"add_or_remove_items" => __( "Add or remove Categories", "btg" ),
		"choose_from_most_used" => __( "Choose from the most used Categories", "btg" ),
		"not_found" => __( "No Categories found", "btg" ),
		"no_terms" => __( "No Categories", "btg" ),
		"items_list_navigation" => __( "Categories list navigation", "btg" ),
		"items_list" => __( "Categories list", "btg" ),
		"back_to_items" => __( "Back to Categories", "btg" ),
		"name_field_description" => __( "The name is how it appears on your site.", "btg" ),
		"parent_field_description" => __( "Assign a parent term to create a hierarchy. The term Jazz, for example, would be the parent of Bebop and Big Band.", "btg" ),
		"slug_field_description" => __( "The slug is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.", "btg" ),
		"desc_field_description" => __( "The description is not prominent by default; however, some themes may show it.", "btg" ),
	];

	
	$args = [
		"label" => __( "Categories", "btg" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'events_category', 'with_front' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "events_category",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => true,
		"sort" => true,
		"show_in_graphql" => false,
	];
	register_taxonomy( "events_category", [ "events" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_events_category' );

function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Categories.
	 */

	$labels = [
		"name" => __( "Categories", "btg" ),
		"singular_name" => __( "Category", "btg" ),
		"menu_name" => __( "Categories", "btg" ),
		"all_items" => __( "All Categories", "btg" ),
		"edit_item" => __( "Edit Category", "btg" ),
		"view_item" => __( "View Category", "btg" ),
		"update_item" => __( "Update Category name", "btg" ),
		"add_new_item" => __( "Add new Category", "btg" ),
		"new_item_name" => __( "New Category name", "btg" ),
		"parent_item" => __( "Parent Category", "btg" ),
		"parent_item_colon" => __( "Parent Category:", "btg" ),
		"search_items" => __( "Search Categories", "btg" ),
		"popular_items" => __( "Popular Categories", "btg" ),
		"separate_items_with_commas" => __( "Separate Categories with commas", "btg" ),
		"add_or_remove_items" => __( "Add or remove Categories", "btg" ),
		"choose_from_most_used" => __( "Choose from the most used Categories", "btg" ),
		"not_found" => __( "No Categories found", "btg" ),
		"no_terms" => __( "No Categories", "btg" ),
		"items_list_navigation" => __( "Categories list navigation", "btg" ),
		"items_list" => __( "Categories list", "btg" ),
		"back_to_items" => __( "Back to Categories", "btg" ),
		"name_field_description" => __( "The name is how it appears on your site.", "btg" ),
		"parent_field_description" => __( "Assign a parent term to create a hierarchy. The term Jazz, for example, would be the parent of Bebop and Big Band.", "btg" ),
		"slug_field_description" => __( "The slug is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.", "btg" ),
		"desc_field_description" => __( "The description is not prominent by default; however, some themes may show it.", "btg" ),
	];

	
	$args = [
		"label" => __( "Categories", "btg" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'career_category', 'with_front' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "career_category",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => true,
		"sort" => true,
		"show_in_graphql" => false,
	];
	register_taxonomy( "career_category", [ "careers" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );


function get_breadcrumb() {
    $html = "";
	// Settings
    $separator          = '/';
    $breadcrums_id      = 'breadcrumbs';
    $breadcrums_class   = 'breadcrumbs';
    $home_title         = 'Home';
      
    // If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)
    $custom_taxonomy    = 'product_cat';
       
    // Get the query & post information
    global $post,$wp_query;
       
    // Do not display on the homepage
    if ( !is_front_page() ) {
       
        // Build the breadcrums
        $html .= '<ul id="' . $breadcrums_id . '" class="' . $breadcrums_class . '">';
           
        // Home page
        $html .= '<li class="item-home"><a class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';
        $html .= '<li class="separator separator-home"> ' . $separator . ' </li>';
           
        if ( is_archive() && !is_tax() && !is_category() && !is_tag() ) {
              
            $html .= '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . post_type_archive_title($prefix, false) . '</strong></li>';
              
        } else if ( is_archive() && is_tax() && !is_category() && !is_tag() ) {
              
            // If post is a custom post type
            $post_type = get_post_type();
              
            // If it is a custom post type display name and link
            if($post_type != 'post') {
                  
                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
              
                $html .= '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                $html .= '<li class="separator"> ' . $separator . ' </li>';
              
            }
              
            $custom_tax_name = get_queried_object()->name;
            $html .= '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . $custom_tax_name . '</strong></li>';
              
        } else if ( is_single() ) {
              
            // If post is a custom post type
            $post_type = get_post_type();
              
            // If it is a custom post type display name and link
            if($post_type != 'post') {
                  
                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
              
                $html .= '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                $html .= '<li class="separator"> ' . $separator . ' </li>';
              
            }
              
            // Get post category info
            $category = get_the_category();
             
            if(!empty($category)) {
              
                // Get last category post is in
                $last_category = end(array_values($category));
                  
                // Get parent any categories and create array
                $get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');
                $cat_parents = explode(',',$get_cat_parents);
                  
                // Loop through parent categories and store in variable $cat_display
                $cat_display = '';
                foreach($cat_parents as $parents) {
                    $cat_display .= '<li class="item-cat">'.$parents.'</li>';
                    $cat_display .= '<li class="separator"> ' . $separator . ' </li>';
                }
             
            }
              
            // If it's a custom post type within a custom taxonomy
            $taxonomy_exists = taxonomy_exists($custom_taxonomy);
            if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {
                   
                $taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
                $cat_id         = $taxonomy_terms[0]->term_id;
                $cat_nicename   = $taxonomy_terms[0]->slug;
                $cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
                $cat_name       = $taxonomy_terms[0]->name;
               
            }
              
            // Check if the post is in a category
            if(!empty($last_category)) {
                $html .= $cat_display;
                $html .= '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                  
            // Else if post is in a custom taxonomy
            } else if(!empty($cat_id)) {
                  
                $html .= '<li class="item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
                $html .= '<li class="separator"> ' . $separator . ' </li>';
                $html .= '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
              
            } else {
                  
                $html .= '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                  
            }
              
        } else if ( is_category() ) {
               
            // Category page
            $html .= '<li class="item-current item-cat"><strong class="bread-current bread-cat">' . single_cat_title('', false) . '</strong></li>';
               
        } else if ( is_page() ) {
               
            // Standard page
            if( $post->post_parent ){
                   
                // If child page, get parents 
                $anc = get_post_ancestors( $post->ID );
                   
                // Get parents in the right order
                $anc = array_reverse($anc);
                   
                // Parent page loop
                if ( !isset( $parents ) ) $parents = null;
                foreach ( $anc as $ancestor ) {
                    $parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
                    $parents .= '<li class="separator separator-' . $ancestor . '"> ' . $separator . ' </li>';
                }
                   
                // Display parent pages
                $html .= $parents;
                   
                // Current page
                $html .= '<li class="item-current item-' . $post->ID . '"><strong title="' . get_the_title() . '"> ' . get_the_title() . '</strong></li>';
                   
            } else {
                   
                // Just display current page if not parents
                $html .= '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</strong></li>';
                   
            }
               
        } else if ( is_tag() ) {
               
            // Tag page
               
            // Get tag information
            $term_id        = get_query_var('tag_id');
            $taxonomy       = 'post_tag';
            $args           = 'include=' . $term_id;
            $terms          = get_terms( $taxonomy, $args );
            $get_term_id    = $terms[0]->term_id;
            $get_term_slug  = $terms[0]->slug;
            $get_term_name  = $terms[0]->name;
               
            // Display the tag name
            $html .= '<li class="item-current item-tag-' . $get_term_id . ' item-tag-' . $get_term_slug . '"><strong class="bread-current bread-tag-' . $get_term_id . ' bread-tag-' . $get_term_slug . '">' . $get_term_name . '</strong></li>';
           
        } elseif ( is_day() ) {
               
            // Day archive
               
            // Year link
            $html .= '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            $html .= '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
               
            // Month link
            $html .= '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';
            $html .= '<li class="separator separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';
               
            // Day display
            $html .= '<li class="item-current item-' . get_the_time('j') . '"><strong class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</strong></li>';
               
        } else if ( is_month() ) {
               
            // Month Archive
               
            // Year link
            $html .= '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            $html .= '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
               
            // Month display
            $html .= '<li class="item-month item-month-' . get_the_time('m') . '"><strong class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</strong></li>';
               
        } else if ( is_year() ) {
               
            // Display year archive
            $html .= '<li class="item-current item-current-' . get_the_time('Y') . '"><strong class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</strong></li>';
               
        } else if ( is_author() ) {
               
            // Auhor archive
               
            // Get the author information
            global $author;
            $userdata = get_userdata( $author );
               
            // Display author name
            $html .= '<li class="item-current item-current-' . $userdata->user_nicename . '"><strong class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</strong></li>';
           
        } else if ( get_query_var('paged') ) {
               
            // Paginated archives
            $html .= '<li class="item-current item-current-' . get_query_var('paged') . '"><strong class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page') . ' ' . get_query_var('paged') . '</strong></li>';
               
        } else if ( is_search() ) {
           
            // Search results page
            $html .= '<li class="item-current item-current-' . get_search_query() . '"><strong class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</strong></li>';
           
        } elseif ( is_404() ) {
               
            // 404 page
            $html .= '<li>' . 'Error 404' . '</li>';
        }
       
        $html .= '</ul>';
           
    }
    return $html;      
}


function my_custom_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Custom', 'your-theme-domain' ),
            'id' => 'custom-side-bar',
            'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'my_custom_sidebar' );


function my_newsletter_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Newsletter', 'your-theme-domain' ),
            'id' => 'newsletter-side-bar',
            'description' => __( 'Newsletter Sidebar', 'your-theme-domain' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'my_newsletter_sidebar' );

function get_excerpt( $count ) {
$permalink = get_permalink($post->ID);
$excerpt = get_the_content();
$excerpt = strip_tags($excerpt);
$excerpt = substr($excerpt, 0, $count);
$excerpt = substr($excerpt, 0, strripos($excerpt, " "));

return $excerpt;
}

function prefix_category_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'prefix_category_title' );

function rf_remove_cat_titles($title) {
if ( is_archive() ) {

$title = single_cat_title('', false );

} elseif ( is_tag() ) {

$title = single_tag_title('', false );

} elseif ( is_author() ) {

$title = '<span class="vcard">' . get_the_author() . '</span>' ;
}
return $title;
}
add_filter( 'get_the_archive_title', 'rf_remove_cat_titles' );

function change_my_title( $title ){
    if ( $title == "Archives" ) $title = "Blog";
    return $title;
}
add_filter( "get_the_archive_title", "change_my_title" );

function loadDirectory() { 
$upload_dir = wp_upload_dir();
?>
<script>
    var site_directory = "<?php echo get_site_url();?>";
	var theme_directory = "<?php echo get_template_directory_uri() ?>";
	var uploads_directory = "<?php echo $upload_dir['baseurl'] ?>";
</script> 
<?php } 
add_action('wp_head', 'loadDirectory');


/*=== create component function ====*/
/**
 * Get all the components in the [theme]/components/ directory.
 */
function get_components() {
	$dir = get_template_directory() . '/components';
	foreach ( array_filter( glob( $dir . '/*.*' ), 'is_file' ) as $file ) {
		
		component( $file );
	}
}

/**
 * Include template components and set up content data
 */
function component( $file, $c = null ) {
	global $content_component;
	$content = $c;
	require $file;
}

function get_about_components() {
	$dir = get_template_directory() . '/components/about_component';
	foreach ( array_filter( glob( $dir . '/*.*' ), 'is_file' ) as $aboutfile ) {
		about_component( $aboutfile );
	}
}

function about_component( $about_file, $about_c = null ) {
	global $about_component;
	$aboutcontent = $about_c;
	require $about_file;
}

require_once('global_sections_shortcode.php' );

add_filter('acf/load_field/name=cw_pt_select', 'acf_load_post_types');

function acf_load_post_types($field)
{
    foreach ( get_post_types( '', 'names' ) as $post_type ) {
       $field['choices'][$post_type] = $post_type;
    }

    // return the field
    return $field;
}

/*Comment Validation*/
function comment_validation_init() {
    if(is_single() && comments_open() ) { ?>        
      <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
      <script>
       jQuery(document).ready(function($) {
          $('#commentform').validate({
              ignore:'',
              rules: {
                  author: {
                      required: true,
                      minlength: 2
                  },
  
                  email: {
                      required: true,
                      email: true
                  },
                  rating: {
                      required: true
                  },
                  
                  comment: {
                      required: true,
                      minlength: 20
                  },
                  
              },
  
              messages: {
                  author: "Please provide a name",
                  email: "Please enter a valid email address.",
                  comment: "Please fill the required field",
                  rating: "Please provide rating"
              },
  
              errorElement: "div",
              errorPlacement: function(error, element) {
                  element.before(error);
              }
  
          });
      });    
      </script>
      <?php
      }
  }
  add_action('wp_footer', 'comment_validation_init');
  
function cw_display_search_form() {
	$search_form = '<form method="get" id="search-form-alt" action="'. esc_url(home_url('/')) .'">
    <input type="hidden" name="post_type" value="post" />
		<input type="text" name="s" id="s" placeholder="Search Topics">
        <img src="'.site_url().'/wp-content/uploads/2022/04/search.svg">
	</form>';
	return $search_form;
}
add_shortcode('display_search_form', 'cw_display_search_form');

//tooltip shortcode
				function cw_tooltip( $atts, $content = null ) {

    //[tooltip placement="top" data-img="/wp-content/uploads/2020/02/traffic-light-icon.png" title="This is the title"]This is the content[/tooltip]

    //get the attributes
					$atts = shortcode_atts(
						array(
							'placement' => 'top',
							'title' => '',
							'data-img' => ''
						),
						$atts,
						'tooltip'
					);

					$title = ( $atts['title'] == '' ? $content : $atts['title'] );

    //return HTML
					return '<a class="popover-anchor" data-img ="' . $atts['data-img'] . '" data-toggle="popover" data-placement="' . $atts['placement'] . '" title="' . $title . '">' . $content . '</a>';

				}

				add_shortcode( 'tooltip', 'cw_tooltip' );
add_filter('comment_form_default_fields', 'unset_url_field'); 
function unset_url_field($fields){ 
	if(isset($fields['url'])) unset($fields['url']); return $fields; 
}

// Prevent Multi Submit on all WPCF7 forms
// add_action( 'wp_footer', 'prevent_cf7_multiple_emails' );

 function prevent_cf7_multiple_emails() {
?>
<script>
var disableSubmit = false;
jQuery('input.wpcf7-submit[type="submit"]').click(function() {
jQuery(':input[type="submit"]').attr('value',"Sending…");
if (disableSubmit == true) {
return false;
}
disableSubmit = true;
return true;
})

jQuery('button.wpcf7-submit').click(function() {
jQuery('button.wpcf7-submit').innerHTML("Sending…");
if (disableSubmit == true) {
return false;
}
disableSubmit = true;
return true;
})

var wpcf7Elm = document.querySelector( '.wpcf7' );
wpcf7Elm.addEventListener( 'wpcf7_before_send_mail', function( event ) {
jQuery('button.wpcf7-submit').innerHTML("Sent");
disableSubmit = false;
}, false );

wpcf7Elm.addEventListener( 'wpcf7_before_send_mail', function( event ) {
jQuery('.wpcf7 :input[type="submit"]').attr('value',"Sent");
disableSubmit = false;
}, false );

wpcf7Elm.addEventListener( 'wpcf7invalid', function( event ) {
jQuery('button.wpcf7-submit').innerHTML("Submit");
disableSubmit = false;
}, false );

wpcf7Elm.addEventListener( 'wpcf7invalid', function( event ) {
jQuery('.wpcf7 :input[type="submit"]').attr('value',"Submit");
disableSubmit = false;
}, false );

</script>
<?php	
}
//Changing logo onadmin login page
function cw_admin_dashboard() {  ?> 
	<style> 
		body.login div#login h1 a { background-image: url('/wp-content/uploads/2022/03/logo.svg'); background-size: contain; padding-bottom: 0px; height: 50px; width: 100%; }
		body.login div#login #wp-submit{ background-color: #ef4949; font-size: 15px; border: none; }
		body.login div#login #wp-submit:focus{ outline:none; }
	</style>
<?php } add_action( 'login_enqueue_scripts', 'cw_admin_dashboard' );

function theme_name_setup() {

    add_theme_support( 'html5', array( 'script', 'style' ) );

}
add_action( 'after_setup_theme', 'theme_name_setup' );

function display_year() {
    $year = date('Y');
    return $year;
}
add_shortcode('year', 'display_year');

add_filter( 'wp_get_attachment_image_src', 'fix_wp_get_attachment_image_svg', 10, 4 );  /* the hook */

 function fix_wp_get_attachment_image_svg($image, $attachment_id, $size, $icon) {
    if (is_array($image) && preg_match('/\.svg$/i', $image[0]) && $image[1] <= 1) {
        if(is_array($size)) {
            $image[1] = $size[0];
            $image[2] = $size[1];
        } elseif(($xml = simplexml_load_file($image[0])) !== false) {
            $attr = $xml->attributes();
            $viewbox = explode(' ', $attr->viewBox);
            $image[1] = isset($attr->width) && preg_match('/\d+/', $attr->width, $value) ? (int) $value[0] : (count($viewbox) == 4 ? (int) $viewbox[2] : null);
            $image[2] = isset($attr->height) && preg_match('/\d+/', $attr->height, $value) ? (int) $value[0] : (count($viewbox) == 4 ? (int) $viewbox[3] : null);
        } else {
            $image[1] = $image[2] = null;
        }
    }
    return $image;
} 
function rf_loadmore_ajax_handler() {
    // prepare our arguments for the query
    $args = json_decode(stripslashes($_POST['query']), true);
    $args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
    $args['post_status'] = 'publish';
    // it is always better to use WP_Query but not here
    query_posts($args);
    if (have_posts()):
        // run the loop
        while (have_posts()):
            the_post();
            // look into your theme code how the posts are inserted, but you can use your own HTML of course
            // do you remember? - my example is adapted for Twenty Seventeen theme
          //  set_query_var("index", $index);
          if(is_archive() || is_blog()){
			get_template_part('template-parts/content', get_post_type());  
			  }
	elseif(! is_post_type_archive() && ! is_tax() && is_search())
	{
		get_template_part('template-parts/content', 'search');
	}
            // for the test purposes comment the line above and uncomment the below one
            // the_title();
            
        endwhile;
    endif;
    die; // here we exit the script and even no wp_reset_query() required!
    
}
add_action('wp_ajax_loadmore', 'rf_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'rf_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}
function is_blog () {
	if ( (is_archive()) || (is_author()) || (is_category()) || (is_home()) || (is_single()) || (is_tag()) || is_search() ) {
		return true;
	}
	else {
		return false; 
	}
}

function cptui_register_my_cpts_careers() {

	/**
	 * Post Type: Careers.
	 */

	$labels = [
		"name" => __( "Careers", "btg" ),
		"singular_name" => __( "Career", "btg" ),
		"menu_name" => __( "Careers", "btg" ),
		"all_items" => __( "All Careers", "btg" ),
		"add_new" => __( "Add new", "btg" ),
		"add_new_item" => __( "Add new Career", "btg" ),
		"edit_item" => __( "Edit Career", "btg" ),
		"new_item" => __( "New Career", "btg" ),
		"view_item" => __( "View Career", "btg" ),
		"view_items" => __( "View Careers", "btg" ),
		"search_items" => __( "Search Careers", "btg" ),
		"not_found" => __( "No Careers found", "btg" ),
		"not_found_in_trash" => __( "No Careers found in trash", "btg" ),
		"parent" => __( "Parent Career:", "btg" ),
		"featured_image" => __( "Featured image for this Career", "btg" ),
		"set_featured_image" => __( "Set featured image for this Career", "btg" ),
		"remove_featured_image" => __( "Remove featured image for this Career", "btg" ),
		"use_featured_image" => __( "Use as featured image for this Career", "btg" ),
		"archives" => __( "Career archives", "btg" ),
		"insert_into_item" => __( "Insert into Career", "btg" ),
		"uploaded_to_this_item" => __( "Upload to this Career", "btg" ),
		"filter_items_list" => __( "Filter Careers list", "btg" ),
		"items_list_navigation" => __( "Careers list navigation", "btg" ),
		"items_list" => __( "Careers list", "btg" ),
		"attributes" => __( "Careers attributes", "btg" ),
		"name_admin_bar" => __( "Career", "btg" ),
		"item_published" => __( "Career published", "btg" ),
		"item_published_privately" => __( "Career published privately.", "btg" ),
		"item_reverted_to_draft" => __( "Career reverted to draft.", "btg" ),
		"item_scheduled" => __( "Career scheduled", "btg" ),
		"item_updated" => __( "Career updated.", "btg" ),
		"parent_item_colon" => __( "Parent Career:", "btg" ),
	];

	$args = [
		"label" => __( "Careers", "btg" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => true,
		"rewrite" => [ "slug" => "careers", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-text-page",
		"supports" => [ "title", "editor" ],
		"show_in_graphql" => false,
	];

	register_post_type( "careers", $args );
}

add_action( 'init', 'cptui_register_my_cpts_careers' );

function cptui_register_my_cpts_offices() {

	/**
	 * Post Type: Offices.
	 */

	$labels = [
		"name" => __( "Offices", "btg" ),
		"singular_name" => __( "Office", "btg" ),
		"menu_name" => __( "Offices", "btg" ),
		"all_items" => __( "All Offices", "btg" ),
		"add_new" => __( "Add new", "btg" ),
		"add_new_item" => __( "Add new Office", "btg" ),
		"edit_item" => __( "Edit Office", "btg" ),
		"new_item" => __( "New Office", "btg" ),
		"view_item" => __( "View Office", "btg" ),
		"view_items" => __( "View Offices", "btg" ),
		"search_items" => __( "Search Offices", "btg" ),
		"not_found" => __( "No Offices found", "btg" ),
		"not_found_in_trash" => __( "No Offices found in trash", "btg" ),
		"parent" => __( "Parent Office:", "btg" ),
		"featured_image" => __( "Featured image for this Office", "btg" ),
		"set_featured_image" => __( "Set featured image for this Office", "btg" ),
		"remove_featured_image" => __( "Remove featured image for this Office", "btg" ),
		"use_featured_image" => __( "Use as featured image for this Office", "btg" ),
		"archives" => __( "Office archives", "btg" ),
		"insert_into_item" => __( "Insert into Office", "btg" ),
		"uploaded_to_this_item" => __( "Upload to this Office", "btg" ),
		"filter_items_list" => __( "Filter Offices list", "btg" ),
		"items_list_navigation" => __( "Offices list navigation", "btg" ),
		"items_list" => __( "Offices list", "btg" ),
		"attributes" => __( "Offices attributes", "btg" ),
		"name_admin_bar" => __( "Office", "btg" ),
		"item_published" => __( "Office published", "btg" ),
		"item_published_privately" => __( "Office published privately.", "btg" ),
		"item_reverted_to_draft" => __( "Office reverted to draft.", "btg" ),
		"item_scheduled" => __( "Office scheduled", "btg" ),
		"item_updated" => __( "Office updated.", "btg" ),
		"parent_item_colon" => __( "Parent Office:", "btg" ),
	];

	$args = [
		"label" => __( "Offices", "btg" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => false,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => true,
		"rewrite" => [ "slug" => "offices", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-building",
		"supports" => [ "title" ],
		"show_in_graphql" => false,
	];

	register_post_type( "offices", $args );
}

add_action( 'init', 'cptui_register_my_cpts_offices' );

function cptui_register_my_taxes_countries() {

	/**
	 * Taxonomy: Countries.
	 */

	$labels = [
		"name" => __( "Countries", "btg" ),
		"singular_name" => __( "Country", "btg" ),
		"menu_name" => __( "Countries", "btg" ),
		"all_items" => __( "All Countries", "btg" ),
		"edit_item" => __( "Edit Country", "btg" ),
		"view_item" => __( "View Country", "btg" ),
		"update_item" => __( "Update Country name", "btg" ),
		"add_new_item" => __( "Add new Country", "btg" ),
		"new_item_name" => __( "New Country name", "btg" ),
		"parent_item" => __( "Parent Country", "btg" ),
		"parent_item_colon" => __( "Parent Country:", "btg" ),
		"search_items" => __( "Search Countries", "btg" ),
		"popular_items" => __( "Popular Countries", "btg" ),
		"separate_items_with_commas" => __( "Separate Countries with commas", "btg" ),
		"add_or_remove_items" => __( "Add or remove Countries", "btg" ),
		"choose_from_most_used" => __( "Choose from the most used Countries", "btg" ),
		"not_found" => __( "No Countries found", "btg" ),
		"no_terms" => __( "No Countries", "btg" ),
		"items_list_navigation" => __( "Countries list navigation", "btg" ),
		"items_list" => __( "Countries list", "btg" ),
		"back_to_items" => __( "Back to Countries", "btg" ),
		"name_field_description" => __( "The name is how it appears on your site.", "btg" ),
		"parent_field_description" => __( "Assign a parent term to create a hierarchy. The term Jazz, for example, would be the parent of Bebop and Big Band.", "btg" ),
		"slug_field_description" => __( "The slug is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.", "btg" ),
		"desc_field_description" => __( "The description is not prominent by default; however, some themes may show it.", "btg" ),
	];

	
	$args = [
		"label" => __( "Countries", "btg" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => false,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'countries', 'with_front' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "countries",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => true,
		"sort" => true,
		"show_in_graphql" => false,
	];
	register_taxonomy( "countries", [ "offices" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_countries' );

function cptui_register_my_taxes_product_fields() {

	/**
	 * Taxonomy: Product Fields.
	 */

	$labels = [
		"name" => __( "Product Fields", "btg" ),
		"singular_name" => __( "Product Field", "btg" ),
		"menu_name" => __( "Product Fields", "btg" ),
		"all_items" => __( "All Product Fields", "btg" ),
		"edit_item" => __( "Edit Product Field", "btg" ),
		"view_item" => __( "View Product Field", "btg" ),
		"update_item" => __( "Update Product Field name", "btg" ),
		"add_new_item" => __( "Add new Product Field", "btg" ),
		"new_item_name" => __( "New Product Field name", "btg" ),
		"parent_item" => __( "Parent Product Field", "btg" ),
		"parent_item_colon" => __( "Parent Product Field:", "btg" ),
		"search_items" => __( "Search Product Fields", "btg" ),
		"popular_items" => __( "Popular Product Fields", "btg" ),
		"separate_items_with_commas" => __( "Separate Product Fields with commas", "btg" ),
		"add_or_remove_items" => __( "Add or remove Product Fields", "btg" ),
		"choose_from_most_used" => __( "Choose from the most used Product Fields", "btg" ),
		"not_found" => __( "No Product Fields found", "btg" ),
		"no_terms" => __( "No Product Fields", "btg" ),
		"items_list_navigation" => __( "Product Fields list navigation", "btg" ),
		"items_list" => __( "Product Fields list", "btg" ),
		"back_to_items" => __( "Back to Product Fields", "btg" ),
		"name_field_description" => __( "The name is how it appears on your site.", "btg" ),
		"parent_field_description" => __( "Assign a parent term to create a hierarchy. The term Jazz, for example, would be the parent of Bebop and Big Band.", "btg" ),
		"slug_field_description" => __( "The slug is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.", "btg" ),
		"desc_field_description" => __( "The description is not prominent by default; however, some themes may show it.", "btg" ),
	];

	
	$args = [
		"label" => __( "Product Fields", "btg" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => false,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'product_fields', 'with_front' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "product_fields",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => true,
		"sort" => true,
		"show_in_graphql" => false,
	];
	register_taxonomy( "product_fields", [ "offices" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_product_fields' );

function custom_type_archive_display($query) {
    if (is_post_type_archive('event')) {
         $query->set('posts_per_page',6);
         $query->set('orderby', 'date' );
         $query->set('order', 'DESC' );
        return;
    }     
}
add_action('pre_get_posts', 'custom_type_archive_display');
function custom_posts_per_page( $query ) {
if ( is_admin() ) {
    return;
}
if ( $query->is_post_type_archive('events') || $query->is_tax('events_category')) {
    set_query_var('posts_per_page', 4);
}
if ( $query->is_post_type_archive('pressrelease') || $query->is_post_type_archive('careers') || $query->is_tax('pressrelease-category') || $query->is_tax('career_category') || is_search()) {
    set_query_var('posts_per_page', 9);
}
}
add_action( 'pre_get_posts', 'custom_posts_per_page' );
add_filter( 'show_admin_bar', '__return_false' );

add_action( 'wp_ajax_get_contact_details', 'get_contact_details' );
add_action( 'wp_ajax_nopriv_get_contact_details', 'get_contact_details' );

function get_contact_details()
{
$result = '';
if (isset($_POST['country'])) {
    $country = strip_tags($_POST['country']); 
	$country_slug = strtolower(preg_replace('/\s+/', '-', $country));
    }

$args = array(
	'posts_per_page'  => '12',
	'post_type' => 'offices',	   
	'order'        => 'DESC',
	'post_status'  => 'publish',
	'tax_query' => array(
        array(
            'taxonomy' => 'countries',
            'field'    => 'slug',
            'terms'    => $country_slug,
        ),
    ),
);
$myposts = new WP_Query( $args );
if ($myposts->have_posts()) {
    $result .='<h4 class="offices_heading">Offices @ '.$country.'</h4>';
	$result .= '<div class="contact_outer_wrap '.$country_slug.'">';
	while ($myposts->have_posts()) {	  
		$myposts->the_post();
		$product_fields = get_the_terms( get_the_ID(), 'product_fields' );
		$result .= '<div class="contact_item item"><div class="contact_item_inner"><div class="contact_title_wrap">';
		$result .='<div class="country_name">'.$country.'</div>';
		$result .= '<h5>'.get_the_title().'</h5>';
		$result .= '</div>';
		if($product_fields){
		$result .= '<div class="product_fields_wrap">';
		$result .= '<h6>We deal with:</h6>';	
		foreach ( $product_fields as $product_field ) {
		$result .= '<span>'.$product_field->name.'</span>';
		}
			}
		$result .= '</div>';
		if(get_field("address", get_the_ID())){
		$result .= '<div class="address_wrap">';
		$result .= '<h6>Address:</h6>';
		$result .= get_field("address", get_the_ID());
		$result .= '</div>';
		}
		$result .= '<div class="email_phone_wrap">';
		if(get_field("email_address", get_the_ID())){
		$result .= '<p>Email:<a href="mailto:'.get_field("email_address", get_the_ID()).'"> '.get_field("email_address", get_the_ID()).'</a>';
		}
		if(get_field("another_email_address", get_the_ID())){ 
			$result .= ', <a href="mailto:'.get_field("another_email_address", get_the_ID()).'"> '.get_field("another_email_address", get_the_ID()).'</a></p>';
		}
		if(get_field("phone", get_the_ID())){
		$result .= '<p>Phone: <a href="tel:'.get_field("phone", get_the_ID()).'">'.get_field("phone", get_the_ID()).'</a></p>';
	}
		if(get_field("fax", get_the_ID())){
		$result .= '<p>Fax: '.get_field("fax", get_the_ID()).'</p>';	
		}
		$result .= '</div>';
		$result .= '</div></div>';
	}
	wp_reset_postdata();
	$result .= '</div>';
	$result .= '<script>contactdetails_carousel();</script>';
}
echo $result;	
	wp_die();
}

function cptui_register_my_cpts_files() {

	/**
	 * Post Type: Careers.
	 */

	$labels = [
		"name" => __( "My BTG Files", "btg" ),
		"singular_name" => __( "My BTG File", "btg" ),
		"menu_name" => __( "My BTG Files", "btg" ),
		"all_items" => __( "All Files", "btg" ),
		"add_new" => __( "Add file", "btg" ),
		"add_new_item" => __( "Add new File", "btg" ),
		"edit_item" => __( "Edit File", "btg" ),
		"new_item" => __( "New Career", "btg" ),
		"view_item" => __( "View File", "btg" ),
		"view_items" => __( "View Files", "btg" ),
		"search_items" => __( "Search Files", "btg" ),
		"not_found" => __( "No Files found", "btg" ),
		"not_found_in_trash" => __( "No Files found in trash", "btg" ),
		"parent" => __( "Parent Files:", "btg" ),
		"featured_image" => __( "Featured image for this Files", "btg" ),
		"set_featured_image" => __( "Set featured image for this Files", "btg" ),
		"remove_featured_image" => __( "Remove featured image for this Files", "btg" ),
		"use_featured_image" => __( "Use as featured image for this Files", "btg" ),
		"archives" => __( "Files archives", "btg" ),
		"insert_into_item" => __( "Insert into Files", "btg" ),
		"uploaded_to_this_item" => __( "Upload to this Files", "btg" ),
		"filter_items_list" => __( "Filter Files list", "btg" ),
		"items_list_navigation" => __( "Files list navigation", "btg" ),
		"items_list" => __( "Files list", "btg" ),
		"attributes" => __( "Files attributes", "btg" ),
		"name_admin_bar" => __( "Files", "btg" ),
		"item_published" => __( "Files published", "btg" ),
		"item_published_privately" => __( "Files published privately.", "btg" ),
		"item_reverted_to_draft" => __( "Files reverted to draft.", "btg" ),
		"item_scheduled" => __( "Files scheduled", "btg" ),
		"item_updated" => __( "Files updated.", "btg" ),
		"parent_item_colon" => __( "Parent Files:", "btg" ),
	];

	$args = [
		"label" => __( "Files", "btg" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => true,
		"rewrite" => [ "slug" => "files", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-text-page",
		"supports" => [ "title", "editor" ],
		"show_in_graphql" => false,
	];

	register_post_type( "files", $args );
}
add_action( 'init', 'cptui_register_my_cpts_files' );

function cptui_register_my_taxes_files_category() {

	/**
	 * Taxonomy: Categories.
	 */

	$labels = [
		"name" => __( "Categories", "btg" ),
		"singular_name" => __( "Category", "btg" ),
		"menu_name" => __( "Categories", "btg" ),
		"all_items" => __( "All Categories", "btg" ),
		"edit_item" => __( "Edit Category", "btg" ),
		"view_item" => __( "View Category", "btg" ),
		"update_item" => __( "Update Category name", "btg" ),
		"add_new_item" => __( "Add new Category", "btg" ),
		"new_item_name" => __( "New Category name", "btg" ),
		"parent_item" => __( "Parent Category", "btg" ),
		"parent_item_colon" => __( "Parent Category:", "btg" ),
		"search_items" => __( "Search Categories", "btg" ),
		"popular_items" => __( "Popular Categories", "btg" ),
		"separate_items_with_commas" => __( "Separate Categories with commas", "btg" ),
		"add_or_remove_items" => __( "Add or remove Categories", "btg" ),
		"choose_from_most_used" => __( "Choose from the most used Categories", "btg" ),
		"not_found" => __( "No Categories found", "btg" ),
		"no_terms" => __( "No Categories", "btg" ),
		"items_list_navigation" => __( "Categories list navigation", "btg" ),
		"items_list" => __( "Categories list", "btg" ),
		"back_to_items" => __( "Back to Categories", "btg" ),
		"name_field_description" => __( "The name is how it appears on your site.", "btg" ),
		"parent_field_description" => __( "Assign a parent term to create a hierarchy. The term Jazz, for example, would be the parent of Bebop and Big Band.", "btg" ),
		"slug_field_description" => __( "The slug is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.", "btg" ),
		"desc_field_description" => __( "The description is not prominent by default; however, some themes may show it.", "btg" ),
	];

	
	$args = [
		"label" => __( "Categories", "btg" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'files_category', 'with_front' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "files_category",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => true,
		"sort" => true,
		"show_in_graphql" => false,
	];
	register_taxonomy( "files_category", [ "files" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_files_category' );


function gist_acf_upload_dir_prefilter($errors, $file, $field) {
    if( !current_user_can('edit_pages') ) {
        $errors[] = 'Only Editors and Administrators may upload attachments';
    }
    add_filter('upload_dir', 'gist_acf_upload_dir');
}
add_filter('acf/upload_prefilter/key=field_63070245afe11', 'gist_acf_upload_dir_prefilter', 10, 3 );

function gist_acf_upload_dir($param) {
    $custom_dir = '/uploads/mybtgfiles';
    $param['path'] = WP_CONTENT_DIR . $custom_dir;
    $param['url'] = WP_CONTENT_URL . $custom_dir;
    return $param;
}