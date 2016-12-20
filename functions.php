<?php
/**
 * IRLLC Framework functions and definitions
 *
 * @package IRLLC Framework
 */

/**
*Set the content width based on the theme's design and stylesheets.
*/
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'accada_theme_setup' ) ) :
				/**
				* Sets up theme defaults and registers support for various WordPress features.
				*
				* Note that this function is hooked into the after_setup_theme hook, which
				* runs before the init hook. The init hook is too late for some features, such
				* as indicating support for post thumbnails.
				*/
	function accada_theme_setup() {

		/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on IRLLC Framework, use a find and replace
	 * to change 'accada_theme' to the name of your theme in all the template files
	 */
		load_theme_textdomain( 'accada_theme', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
		//add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'accada_theme' ),
        'mobile-primary' => esc_html__( 'Mobile Primary Menu', 'accada_theme' ),    
        'member-menu' => esc_html__( 'Member Menu', 'accada_theme' ),
        'footer-menu' => esc_html__( 'Footer Menu', 'accada_theme' ),     
		) );

		/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
		add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
		) );

		/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
		add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'accada_theme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
		) ) );
}
endif; // accada_theme_setup
add_action( 'after_setup_theme', 'accada_theme_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function accada_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'accada_theme' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
    	register_sidebar( array(
		'name'          => esc_html__( 'Home Events Sidebar', 'accada_theme' ),
		'id'            => 'home-events-sidebar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Slider Sidebar', 'accada_theme' ),
		'id'            => 'sidebar-slider',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
        register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar', 'accada_theme' ),
		'id'            => 'sidebar-footer',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
          register_sidebar( array(
		'name'          => esc_html__( 'Search Sidebar', 'accada_theme' ),
		'id'            => 'sidebar-search',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
            register_sidebar( array(
		'name'          => esc_html__( 'Footer Support Sidebar', 'accada_theme' ),
		'id'            => 'sidebar-support-footer',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
            register_sidebar( array(
		'name'          => esc_html__( 'Request Info Sidebar', 'accada_theme' ),
		'id'            => 'request-info-sidebar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'accada_theme_widgets_init' );

/***
* Google Fonts
*/
function add_google_fonts() {
   
wp_enqueue_style( 'Open Sans Cookie', 'https://fonts.googleapis.com/css?family=Cookie|Open+Sans:400,700,400italic,700italic', false ); 
    
wp_enqueue_style( 'raleway', 'https://fonts.googleapis.com/css?family=Raleway:400,700', false ); 
}

add_action( 'wp_enqueue_scripts', 'add_google_fonts' );

/**
 * Enqueue kardiakosmosscripts and styles.
 */
function kardia_kosmos_foundation_scripts() {
    wp_enqueue_style( 'framework-style', get_template_directory_uri() .'/style.css' );
/* ----- Add Foundation Support From Parent Theme ----- */
/* Add Foundation CSS */
wp_enqueue_style( 'foundation-normalize', get_template_directory_uri()  . '/foundation/css/normalize.css' );
wp_enqueue_style( 'foundation', get_template_directory_uri()  . '/foundation/css/foundation.css' );
/* Add Foundation JS */
wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/foundation/js/foundation.min.js', array( 'jquery' ), '1', true );
wp_enqueue_script( 'foundation-modernizr-js', get_template_directory_uri() . '/foundation/js/vendor/modernizr.js', array( 'jquery' ), '1', true );
/* Foundation Init JS */
wp_enqueue_script( 'foundation-init-js', get_template_directory_uri() . '/foundation.js', array( 'jquery' ), '1', true );
    
}
add_action( 'wp_enqueue_scripts', 'kardia_kosmos_foundation_scripts' );

function accada_theme_scripts() {
	wp_enqueue_style( 'kosmos-style', get_stylesheet_uri() );
	
	wp_enqueue_script( 'accada_theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'accada_theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'accada_theme_scripts' );


add_theme_support( 'post-thumbnails' ); 

// CHANGE EXCERPT LENGTH FOR DIFFERENT POST TYPES
 
function custom_excerpt_length($length) {
    global $post;
    if ($post->post_type == 'events')
    return 30;
    else
    return 200;
}
add_filter('excerpt_length', 'custom_excerpt_length');

add_action( 'after_setup_theme', 'kardiakosmos_image_setup' );
function kardiakosmos_image_setup() {
    add_image_size( 'event-thumb', 360, 180 ); // (cropped)
}

add_filter( 'the_content', 'my_quote_content' );

function my_quote_content( $content ) {

	/* Check if we're displaying a 'quote' post. */
	if ( has_post_format( 'quote' ) ) {

		/* Match any <blockquote> elements. */
		preg_match( '/<blockquote.*?>/', $content, $matches );

		/* If no <blockquote> elements were found, wrap the entire content in one. */
		if ( empty( $matches ) )
			$content = "<blockquote>{$content}</blockquote>";
	}

	return $content;
}

function exclude_category( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'cat', '-11' );
    }
}
add_action( 'pre_get_posts', 'exclude_category' );

// Changing excerpt more
   function new_excerpt_more($more) {
   global $post;
   return '… <a href="'. get_permalink($post->ID) . '">' . 'Read More &raquo;' . '</a>';
   }
   add_filter('excerpt_more', 'new_excerpt_more');

function wpbeginner_numeric_posts_nav() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="navigation"><ul>' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );

	echo '</ul></div>' . "\n";

}

// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Groups', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Group', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Groups', 'text_domain' ),
		'name_admin_bar'        => __( 'Groups', 'text_domain' ),
		'archives'              => __( 'Group Archives', 'text_domain' ),
		'attributes'            => __( 'Group Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Group:', 'text_domain' ),
		'all_items'             => __( 'All Groups', 'text_domain' ),
		'add_new_item'          => __( 'Add New Group', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Group', 'text_domain' ),
		'edit_item'             => __( 'Edit Group', 'text_domain' ),
		'update_item'           => __( 'Update Group', 'text_domain' ),
		'view_item'             => __( 'View Group', 'text_domain' ),
		'view_items'            => __( 'View Groups', 'text_domain' ),
		'search_items'          => __( 'Search Groups', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Group', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Group', 'text_domain' ),
		'items_list'            => __( 'Groups list', 'text_domain' ),
		'items_list_navigation' => __( 'Groups list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Groups list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Group', 'text_domain' ),
		'description'           => __( 'This post type is for the creation and storage of Lifeworx Groups', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
//		'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
		'rest_base'             => 'group',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	);
	register_post_type( 'groups', $args );

}
add_action( 'init', 'custom_post_type', 0 );

function be_register_taxonomies() {
	$taxonomies = array(
		array(
			'slug'         => 'day_of_week',
			'single_name'  => 'Day of the Week',
			'plural_name'  => 'Days of the Week',
			'post_type'    => 'groups',
					'hierarchical' => true,
			'rewrite'      => array( 'slug' => 'day_of_week' ),
		)
	
	);
	foreach( $taxonomies as $taxonomy ) {
		$labels = array(
			'name' => $taxonomy['plural_name'],
			'singular_name' => $taxonomy['single_name'],
			'search_items' =>  'Search ' . $taxonomy['plural_name'],
			'all_items' => 'All ' . $taxonomy['plural_name'],
			'parent_item' => 'Parent ' . $taxonomy['single_name'],
			'parent_item_colon' => 'Parent ' . $taxonomy['single_name'] . ':',
			'edit_item' => 'Edit ' . $taxonomy['single_name'],
			'update_item' => 'Update ' . $taxonomy['single_name'],
			'add_new_item' => 'Add New ' . $taxonomy['single_name'],
			'new_item_name' => 'New ' . $taxonomy['single_name'] . ' Name',
			'menu_name' => $taxonomy['plural_name']
		);
		
		$rewrite = isset( $taxonomy['rewrite'] ) ? $taxonomy['rewrite'] : array( 'slug' => $taxonomy['slug'] );
		$hierarchical = isset( $taxonomy['hierarchical'] ) ? $taxonomy['hierarchical'] : true;
	
		register_taxonomy( $taxonomy['slug'], $taxonomy['post_type'], array(
			'hierarchical' => $hierarchical,
			 'show_tagcloud' => false,
			'labels' => $labels,
			'show_ui' => true,
			'query_var' => true,
			'show_admin_column' => true,
			'rewrite' => $rewrite,
		));
	}
	
}
add_action( 'init', 'be_register_taxonomies' );


/*
 *
 * Add filtering support to Admin list for the LCCC Event Custom Post Type.
 *
 */

function lc_event_cpt_add_taxonomy_filters() {
	global $typenow;
 
	// an array of all the taxonomyies you want to display. Use the taxonomy name or slug
	$taxonomies = array('day_of_week');
 
	// must set this to the post type you want the filter(s) displayed on
	if( $typenow == 'groups' ){
 
		foreach ($taxonomies as $tax_slug) {
			$tax_obj = get_taxonomy($tax_slug);
			$tax_name = $tax_obj->labels->name;
			$terms = get_terms($tax_slug);
			if(count($terms) > 0) {
				echo "<select name='$tax_slug' id='$tax_slug' class='postform'>";
				echo "<option value=''>Show All $tax_name</option>";
				foreach ($terms as $term) { 
					echo '<option value='. $term->slug, $_GET[$tax_slug] == $term->slug ? ' selected="selected"' : '','>' . $term->name .' (' . $term->count .')</option>'; 
				}
				echo "</select>";
			}
		}
	}
}
add_action( 'restrict_manage_posts', 'lc_event_cpt_add_taxonomy_filters' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
//require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
//require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
//require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
//require get_template_directory() . '/inc/jetpack.php';
