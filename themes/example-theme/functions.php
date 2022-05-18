<?php
/**
 * Functions
 * 
 * Custom scripts, styles and functions can be found here.
 *
 * php version 7.4.29
 * 
 * @package Example_Theme
 */


  // Adding menus admin ui and featured images for posts.
  add_theme_support('menus');
  add_theme_support('post-thumbnails');

/** 
 * Register required menus
 * 
 * Any menu that we want to be available via admin will need
 * to be registered here first.
 * 
 * php version 7.4.29
 */
function register_menus() 
{
    register_nav_menus(
        array(
        'header-menu' => __('Header Menu'),
        'footer-menu' => __('Footer Menu')
        )
    );
}
add_action('init', 'register_menus');

/**
 * Enqueue compiled Tailwind CSS
 */
function example_theme_scripts() 
{
    wp_enqueue_style('common.css', '/wp-content/themes/example-theme/dist/common.css');
}

add_action('wp_enqueue_scripts', 'example_theme_scripts');


/**
 * Add custom classesto the <li> elements in menus
 * 
 * This function allows us to add Tailwind classes to list item elements
 * within menus.
 */ 
function add_additional_class_on_li($classes, $item, $args) 
{
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


/**
 * Count the number of words in post content
 * 
 * @param string $content The post content
 * 
 * @return string $count The word count
 */
function count_content_words( $content ) 
{
    $decode_content = html_entity_decode($content);
    $filter_shortcode = do_shortcode($decode_content);
    $strip_tags = wp_strip_all_tags($filter_shortcode, true);
    $count = str_word_count($strip_tags);
    return $count;
} 
