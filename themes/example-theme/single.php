<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package First_And_Third
 */

	get_header();
?>

	<article id="post-<?php the_ID(); ?>" class="post post-single">

		<span class="text-center block uppercase post-pre-heading">Introducing</span>

		<?php the_title('<h1 class="text-center capitalize post-title">', '</h1>'); ?>

		<?php get_template_part('template-parts/post/content'); ?>

	</article>

	<section class="recent-posts-container">

		<div class="section-header">
			<h3 class="section-header-title">Related Posts</h3>
		</div>

		<?php get_template_part('template-parts/layout/recent-posts'); ?>

	</section>


<?php get_footer(); ?>