<?php

//define header and footer menu locations
function set_menus()
{
	register_nav_menus(array(
		'header' => __("Header menu"),
		'footer' => __("Footer menu")
	));
}

//register menus
add_action('init', 'set_menus');

//enable featured images
add_theme_support('post-thumbnails');

// enqueue styles
wp_enqueue_style('style', get_stylesheet_uri());
wp_enqueue_style('tailwind', get_template_directory_uri() . '/dist/tailwind.css');
