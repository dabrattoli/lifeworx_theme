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
