<?php
/**
 * Template Name: Front Page
 *
 * Template for displaying the theme's front page.
 * 
 * Author: Leonardo da Costa
 *
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<?php get_template_part('template-parts/featured-post'); ?>
<?php get_template_part('template-parts/recent-posts'); ?>

<?php get_footer(); ?>