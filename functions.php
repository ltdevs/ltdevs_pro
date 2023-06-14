<?php
/**
 * レナ Devs PRO functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package レナ_Devs_PRO
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', time() );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ltdevs_pro_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on レナ Devs PRO, use a find and replace
		* to change 'ltdevs_pro' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'ltdevs_pro', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary-Left', 'ltdevs_pro' ),
			'menu-2' => esc_html__( 'Primary-Right', 'ltdevs_pro' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'ltdevs_pro_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'ltdevs_pro_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ltdevs_pro_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ltdevs_pro_content_width', 640 );
}
add_action( 'after_setup_theme', 'ltdevs_pro_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ltdevs_pro_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'ltdevs_pro' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'ltdevs_pro' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'ltdevs_pro_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ltdevs_pro_scripts() {
	// wp_enqueue_style( 'ltdevs_pro-style', get_stylesheet_uri(), array(), _S_VERSION );
	// wp_style_add_data( 'ltdevs_pro-style', 'rtl', 'replace' );


	/**
	 * custom styles enques
	 */

	wp_enqueue_style( 'ltdevs_pro-bootstrap',  get_template_directory_uri() . '/assets/css/bootstrap.css', array(), _S_VERSION );
	wp_enqueue_style( 'ltdevs_pro-font-awesome',  get_template_directory_uri() . '/assets/css/font-awesome.css', array(), _S_VERSION );
	wp_enqueue_style( 'ltdevs_pro-flaticon',  get_template_directory_uri() . '/assets/css/flaticon.css', array(), _S_VERSION );
	wp_enqueue_style( 'ltdevs_pro-slick',  get_template_directory_uri() . '/assets/css/slick.css', array(), _S_VERSION );
	wp_enqueue_style( 'ltdevs_pro-slick-theme',  get_template_directory_uri() . '/assets/css/slick-theme.css', array(), _S_VERSION );
	wp_enqueue_style( 'ltdevs_pro-magnific-popup',  get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), _S_VERSION );
	wp_enqueue_style( 'ltdevs_pro-style',  get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION );
	wp_enqueue_style( 'ltdevs_pro-royal-preload',  get_template_directory_uri() . '/assets/css/royal-preload.css', array(), _S_VERSION );

	/**
	 * custom scripts enques
	 */

	wp_enqueue_script( 'ltdevs_pro-jquery.min', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), _S_VERSION, true ); 

	wp_enqueue_script( 'ltdevs_pro-slick.min', get_template_directory_uri() . '/assets/js/slick.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'ltdevs_pro-jquery.magnific-popup.min', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), _S_VERSION, true ); 

	wp_enqueue_script( 'ltdevs_pro-jquery.isotope.min', get_template_directory_uri() . '/assets/js/jquery.isotope.min.js', array(), _S_VERSION, true ); 
	wp_enqueue_script( 'ltdevs_pro-easypiechart', get_template_directory_uri() . '/assets/js/easypiechart.js', array(), _S_VERSION, true ); 
	wp_enqueue_script( 'ltdevs_pro-particles.min', get_template_directory_uri() . '/assets/js/particles.min.js', array(), _S_VERSION, true ); 
	wp_enqueue_script( 'ltdevs_pro-jquery.countdown.min', get_template_directory_uri() . '/assets/js/jquery.countdown.min.js', array(), _S_VERSION, true ); 
	wp_enqueue_script( 'ltdevs_pro-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), _S_VERSION, true ); 
	wp_enqueue_script( 'ltdevs_pro-header-mobile', get_template_directory_uri() . '/assets/js/header-mobile.js', array(), _S_VERSION, true ); 
	wp_enqueue_script( 'ltdevs_pro-royal_preloader.min', get_template_directory_uri() . '/assets/js/royal_preloader.min.js', array(), _S_VERSION, true ); 


	wp_enqueue_script( 'ltdevs_pro-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ltdevs_pro_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

require get_template_directory() . '/inc/custom_includes/custom_functions.php';

require get_template_directory() . '/inc/custom_includes/custom_taxo.php';

require get_template_directory() . '/inc/custom_includes/post-types.php';


