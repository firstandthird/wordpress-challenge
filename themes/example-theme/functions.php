<?php
/**
 * First and Third functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package First_And_Third
 *
 *
 ** Table of Contents **
 * 1.0 - Theme Supports
 * 2.0 - Include Files
 * 3.0 - Styles & Scripts
 * 4.0 - Menus & Navigation
 * 5.0 - Images & Headers
 * 6.0 - Sidebars
 * 7.0 - Search Functions
 * 8.0 - Additional Functions
*/

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'ft_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */

	function ft_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on WordPress Challenge, use a find and replace
		 * to change 'first-and-third' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'first-and-third', get_template_directory() . '/languages' );


		/************************************
		 * 1.0 - THEME SUPPORTS
		 * Adds support for menus, WordPress title tags, post thumbnails, and default posts/comments RSS feed links
		 ************************************/
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'menus' );

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


		/************************************
		 * 2.0 - INCLUDE FILES
		 ************************************/
		// Utils
		require_once('utils/read-time.php');


		/************************************
		 * 3.0 - STYLES & SCRIPTS
		 ************************************/
		// Styles
		function ft_styles() {
			wp_enqueue_style( 'tailwind_css', get_template_directory_uri() . '/dist/common.css' );
			wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
		}
		add_action( 'wp_enqueue_scripts', 'ft_styles' );


		/************************************
		 * 4.0 - MENUS & NAVIGATION
		 ************************************/
		function register_theme_menus() {

			register_nav_menus(
				array(
					'main-menu'   => __( 'Main Menu' ),
					'footer-menu' => __( 'Footer Menu' )
				)
			);
		}
		add_action( 'init', 'register_theme_menus' );


		/************************************
		 * 5.0 - IMAGES & HEADERS
		 ************************************/


		/************************************
		 * 6.0 - SIDEBARS and WIDGETIZED AREAS
		 ************************************/


		/************************************
		 * 7.0 - SEARCH FUNCTIONS
		 ************************************/


		/************************************
		 * 8.0 - ADDITIONAL FUNCTIONS
		 ************************************/

		/**
		 * 	Blog Excerpt
		 */
		function ft_end_with_sentence( $excerpt ) {

			if ( ( $pos = mb_strrpos( $excerpt, '.' ) ) !== false ) {
			  $excerpt = substr( $excerpt, 0, $pos + 1 );
			}

			return $excerpt;
		  }
		  add_filter( 'get_the_excerpt', 'ft_end_with_sentence' );

	}

endif;

add_action( 'after_setup_theme', 'ft_setup' );