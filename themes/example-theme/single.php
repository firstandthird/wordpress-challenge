<?php
get_header();

while (have_posts()) : the_post(); ?>
	<!-- set Tailwind prose classes on post body -->
	<article class="prose prose-headings:text-center prose-img:mb-0 prose-img:rounded-md mx-auto py-20 md:px-5">
		<header>
			<span class="block text-pink-600 text-center">INTRODUCING</span>
			<!-- use wp_kses_post over esc_html -->
			<h1><?php echo wp_kses_post(get_the_title()); ?></h1>
		</header>
		<main>
			<?php echo wp_kses_post(get_the_content()); ?>
		</main>
	</article>
<?php
endwhile;
//clear query postdata
wp_reset_postdata(); ?>
<div class="bg-gray-50 px-5 py-20">
	<div class="text-center mb-10 mx-auto max-w-2xl">
		<h2 class="text-4xl leading-10 font-extrabold">Related Posts</h2>
	</div>
	<?php
	//grab all excluding current post, ignore sticky order
	$related_query = new WP_Query(array(
		'post__not_in' => array(get_the_ID()),
		'posts_per_page' => 3,
		'ignore_sticky_posts' => 1
	));

	get_template_part("templates/recent-posts", null, array('post_query' => $related_query));
	?>
</div>
<?php
get_footer();
