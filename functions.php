<?php

function dh_setup() {

	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'main' =>  'Hauptmenü',
		'footer' => 'Footermenü',
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

	// Adds support for editor color palette.
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => 'Weiß',
			'slug'  => 'white',
			'color'	=> '#ffffff',
		),
		array(
			'name'  => 'Schwarz',
			'slug'  => 'black',
			'color'	=> '#000000',
		),
		array(
			'name'  => 'Grau',
			'slug'  => 'gray',
			'color'	=> '#f5f5f5',
		),
		array(
			'name'  => 'Grün',
			'slug'  => 'green',
			'color'	=> '#93C01F',
		),
	) );

	add_theme_support('disable-custom-font-sizes');
	add_theme_support('editor-styles');

	// Add Theme support for wide align
	add_theme_support( 'align-wide' );

}
add_action( 'after_setup_theme', 'dh_setup' );

// Add backend styles for Gutenberg.
add_action( 'enqueue_block_editor_assets', 'dh_gutenberg_assets' );

// Add Image Size for Category Boxes.
add_image_size( 'categorybox', 570, 320, array( 'center', 'center' ) );

function dh_gutenberg_assets() {
	// Load the theme styles within Gutenberg.
	wp_enqueue_style( 'wci-gutenberg', get_theme_file_uri( '/editor-styles.css' ), false );
}


//Disable Emojis
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 */
function dh_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'dh_content_width', 1140 );
}
add_action( 'after_setup_theme', 'dh_content_width', 0 );

/**
 * Register widget area.
 */
function dh_widgets_init() {
	register_sidebar( array(
		'name'          => 'Footer 1',
		'id'            => 'footer-1',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
	register_sidebar( array(
		'name'          => 'Footer 2',
		'id'            => 'footer-2',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
	register_sidebar( array(
		'name'          => 'Footer 3',
		'id'            => 'footer-3',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
	register_sidebar( array(
		'name'          => 'Footer 4',
		'id'            => 'footer-4',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );

}
add_action( 'widgets_init', 'dh_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function dh_scripts() {

	wp_enqueue_style( 'dh-style', get_template_directory_uri() . '/style.min.css' );

	wp_deregister_script('jquery');
	wp_register_script('jquery',  get_template_directory_uri() . '/_/js/jquery-3.3.1.min.js', array(), '1.0', true);
	wp_enqueue_script('jquery');

	wp_enqueue_script( 'dh-plugins', get_template_directory_uri() . '/_/js/plugins.min.js', array(), '1.0', true );
	wp_enqueue_script( 'dh-functions', get_template_directory_uri() . '/_/js/functions.min.js', array(), '1.0', true );

}

add_action( 'wp_enqueue_scripts', 'dh_scripts' );


/**
 * Add Custom Shortcodes
 */
require get_template_directory() . '/inc/shortcodes.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Custom Theme functions
 */
require get_template_directory() . '/inc/theme.php';

/**
 * Blocks Theme functions
 */
require get_template_directory() . '/inc/gutenberg.php';

/**
 * Disable everything Comment related
 */
require get_template_directory() . '/inc/comments.php';




