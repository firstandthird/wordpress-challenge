<?php

function set_primary_menu() {
	register_nav_menu('primary', __("Primary menu"));
}

add_action('init', 'set_primary_menu');

	
add_theme_support( 'post-thumbnails' );
wp_enqueue_style('style', get_stylesheet_uri());
wp_enqueue_style('tailwind', get_template_directory_uri() . '/dist/tailwind.css');