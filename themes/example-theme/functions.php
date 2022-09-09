<?php
/**
 * Theme Functions
 * 
 * Author: Leonardo da Costa
 *
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
* Estimated reading time in minutes
* 
* @param $content
* @param $words_per_minute
* @param $with_gutenberg
* 
* @return int estimated time in minutes
*/
function estimate_reading_time_in_minutes ( $content = '', $words_per_minute = 300, $with_gutenberg = false ) {
  // In case if content is build with gutenberg parse blocks
  if ( $with_gutenberg ) {
      $blocks = parse_blocks( $content );
      $contentHtml = '';

      foreach ( $blocks as $block ) {
          $contentHtml .= render_block( $block );
      }

      $content = $contentHtml;
  }
          
  // Remove HTML tags from string
  $content = wp_strip_all_tags( $content );
          
  // When content is empty return 0
  if ( !$content ) {
      return 0;
  }
          
  // Count words containing string
  $words_count = str_word_count( $content );
          
  // Calculate time for read all words and round
  $minutes = ceil( $words_count / $words_per_minute );
          
  return $minutes;
}

/**
* Theme Settings
*/
if ( ! function_exists( 'init_theme' ) ) { 

  function init_theme() {

    /**
    * Theme Support
    */
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'menus' );

    /**
    * Enqueue Styles
    */
    wp_register_style('common-css', get_template_directory_uri() . '/dist/common.css', array(), null);
    wp_enqueue_style('common-css');

    /**
    * Register Widgets
    */
    register_nav_menus(
      array(
        'main-menu'   => __( 'Main Menu' ),
        'footer-menu' => __( 'Footer Menu' )
      )
    );
  }  
}

add_action( 'init', 'init_theme' );