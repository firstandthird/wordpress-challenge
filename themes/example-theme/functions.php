<?
add_action( 'wp_enqueue_scripts', 'enqueue_function', 10 );
wp_enqueue_style( 'tailwindcss', get_template_directory_uri() . '/dist/common.css');
add_theme_support( 'post-thumbnails' );