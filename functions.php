<?php
/**
 * fortitude functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fortitude
 */

if ( ! function_exists( 'fortitude_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function fortitude_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on fortitude, use a find and replace
		 * to change 'fortitude' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'fortitude', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/* Add editor style. */
		add_theme_support( 'editor-styles' );
		add_theme_support( 'dark-editor-style' );

		/* Load editor style. */
		add_editor_style();
		
		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => __( 'Primary', 'fortitude' ),
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
		$defaults = array(
		    'default-image'          => get_template_directory_uri().'/img/header-bg.jpg',
		    'flex-width'             => true,
			'width'                  => 980,
			'flex-height'            => true,
			'height'                 => 400,
		    'uploads'                => true,
		    'random-default'         => true,
		    'header-text'            => true,
		    'default-text-color'     => '#fff',
		    'wp-head-callback'       => '',
		    'admin-head-callback'    => '',
		    'admin-preview-callback' => '',
		    );
		add_theme_support( 'custom-header', $defaults );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'fortitude_custom_background_args', array(
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
			'height'      => 100,
			'width'       => 50,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'fortitude_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fortitude_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'fortitude_content_width', 640 );
}
add_action( 'after_setup_theme', 'fortitude_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fortitude_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'fortitude' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'fortitude' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
	'name'          => esc_html__( 'Footer Widgets', 'fortitude' ),
	'id'            => 'sidebar-footer',
	'description'   => esc_html__( 'Add Footer widgets here.', 'fortitude' ),
	'before_widget' => '<div id="%1$s" class="col-md-3 col-sm-3 col-xs-12 %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h4 class="widget-title">',
	'after_title'   => '</h4>'
	) );
}
add_action( 'widgets_init', 'fortitude_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function fortitude_scripts() {
	wp_enqueue_style( 'fortitude-style', get_stylesheet_uri() );

	/* Libraries css files */
	wp_enqueue_style('bootstrap', get_stylesheet_directory_uri(). '/lib/bootstrap/css/bootstrap.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('nivoslider', get_stylesheet_directory_uri(). '/lib/nivo-slider/css/nivo-slider.css', array(), '1.0.0', 'all');
	wp_enqueue_style('fontawesome', get_stylesheet_directory_uri(). '/lib/font-awesome/css/font-awesome.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('animate', get_stylesheet_directory_uri(). '/lib/animate/animate.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('nivoslidertheme', get_stylesheet_directory_uri(). '/css/nivo-slider-theme.css', array(), '1.0.0', 'all');
	wp_enqueue_style('responsive', get_stylesheet_directory_uri(). '/css/responsive.css', array(), '1.0.0', 'all');
	wp_enqueue_style('fortitude-main', get_stylesheet_directory_uri(). '/css/main.css', array(), '1.0.0', 'all');

	/* Libraries js files */
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/lib/bootstrap/js/bootstrap.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/lib/wow/wow.min.js', array(), '20151215', true );
	wp_enqueue_script( 'easing-js', get_template_directory_uri() . '/lib/easing/easing.min.js', array(), '20151215', true );
	wp_enqueue_script( 'nivo-slider-js', get_template_directory_uri() . '/lib/nivo-slider/js/jquery.nivo.slider.js', array(), '20151215', true );

	/* Custom js */
	wp_enqueue_script( 'fortitude-custom-js', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fortitude_scripts' );


/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Walker class file for menu.
 */
require_once get_template_directory() . '/inc/nav_walker_bootstrap.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}