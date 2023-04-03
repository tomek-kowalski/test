<?php
/**
 * zadanie testowe functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package zadanie_testowe
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function zadanie_testowe_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on zadanie testowe, use a find and replace
		* to change 'zadanie-testowe' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'zadanie-testowe', get_template_directory() . '/languages' );

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
add_action( 'after_setup_theme', 'zadanie_testowe_setup' );


/**
 * Enqueue scripts and styles.
 */
function zadanie_testowe_css() {

	wp_register_style('zadanie-testowe-style', get_template_directory_uri() . '/style/css/style.css','1.0.0','all');

	wp_enqueue_style( 'zadanie-testowe-style');
	wp_enqueue_style('Mulish','https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700&display=swap');

}
add_action( 'wp_enqueue_scripts', 'zadanie_testowe_css' );

function zadanie_testowe_js() {


	wp_enqueue_script('script',get_template_directory_uri() . '/script/js/script.js',array( 'jquery' ), false, true);

}
add_action( 'wp_enqueue_scripts', 'zadanie_testowe_js' );

function register_my_menus() {
	register_nav_menus(
	  array(
		'menu-1' => esc_html__( 'Primary', 'zadanie-testowe' ),
		'header-menu' => esc_html__( 'Header Menu','zadanie-testowe' ),
		'footer-menu' => esc_html__( 'Footer Menu','zadanie-testowe' )
	  )
	);
  }
  add_action( 'init', 'register_my_menus' );

  add_filter('xmlrpc_enabled', '__return_false');





