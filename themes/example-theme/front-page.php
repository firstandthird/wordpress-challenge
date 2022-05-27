<?php
/**
 * Front Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package First_And_Third
 */

	get_header();

	$blog_title 	= get_the_title( get_option('page_for_posts', true) );
	$section_title 	= $blog_title ? $blog_title : 'Blog';
?>

	<?php get_template_part('template-parts/layout/hero-featured'); ?>

	<section class="recent-posts-container">

		<div class="section-header">
			<h2 class="section-header-title">More from the <?php echo $section_title; ?></h2>
			<p>This text can be hardcoded for this test. Articles before should be the most recent three posts.</p>

			<a href="http://localhost/blog">View all blog posts →</a>
		</div>

		<?php get_template_part('template-parts/layout/recent-posts'); ?>

	</section>


<?php get_footer(); ?>