<?php
$featured_query = new WP_Query(array(
	'category_name' => 'featured-posts',
));
while ($featured_query->have_posts()) : $featured_query->the_post(); ?>
	<div id="featured-post" class="flex flex-initial flex-row items-center w-full min-h-screen">
		<div class="flex flex-initial flex-col justify-center items-start w-2/4">
			<div class="mb-10">
				<h1 class="text-6xl leading-none font-extrabold mb-5"><?php echo get_the_title(); ?></h1>
				<p class="text-xl leading-7 font-normal text-gray-500"><?php echo get_the_excerpt(); ?></p>
			</div>
			<a href="<?php echo get_the_permalink(); ?>" class="px-8 py-4 bg-indigo-600 text-lg leading-7 text-white rounded">Read Article</a>
		</div>
		<img src="https://via.placeholder.com/1280x720" class="w-2/4" />
	</div>
<?php
endwhile;
wp_reset_postdata();
?>