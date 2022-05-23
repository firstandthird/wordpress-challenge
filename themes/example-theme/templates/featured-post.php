<?php
$featured_query = new WP_Query(array(
	'posts_per_page' => 1,
	'post__in' => get_option('sticky_posts'),
	'ignore_sticky_posts' => 1
));

while ($featured_query->have_posts()) : $featured_query->the_post(); ?>
	<div id="featured-post" class="flex flex-initial flex-row items-stretch w-full lg:min-h-screen">
		<div class="flex flex-initial flex-col justify-center items-center px-5 lg:px-10 w-2/4">
			<div class="max-w-xl mx-auto">
				<div class="mb-10">
					<h1 class="text-6xl leading-none font-extrabold mb-5"><?php echo get_the_title(); ?></h1>
					<p class="text-xl leading-7 font-normal text-gray-500"><?php echo get_the_excerpt(); ?></p>
				</div>
				<a href="<?php echo get_the_permalink(); ?>" class="px-8 py-4 bg-indigo-600 hover:bg-indigo-500 text-lg leading-7 text-white rounded">Read Article</a>
			</div>
		</div>
		<img src="<?php the_post_thumbnail_url('full') ?>" class="block w-2/4 lg:min-h-screen object-cover" />
	</div>
<?php
endwhile;
wp_reset_postdata();
?>