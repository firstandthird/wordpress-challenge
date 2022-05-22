<?php

function set_menus()
{
	register_nav_menus(array(
		'header' => __("Header menu"),
		'footer' => __("Footer menu")
	));
}

add_action('init', 'set_menus');


add_theme_support('post-thumbnails');
wp_enqueue_style('style', get_stylesheet_uri());
wp_enqueue_style('tailwind', get_template_directory_uri() . '/dist/tailwind.css');
