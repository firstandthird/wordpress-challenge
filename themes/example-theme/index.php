<?php
get_header();
?>
<main id="content">
	<?php get_template_part("templates/featured-post"); ?>
	<div class="bg-gray-50 px-5 py-20">
		<div id="more-header" class="text-center mb-5 mx-auto max-w-2xl">
			<h2 class="text-4xl leading-10 font-extrabold mb-5">More from the Blog</h2>
			<p class="text-xl leading-7 font-normal text-gray-500 mb-5">You DID say I could hardcode this text!<br>Not sure what to do with that freedom.</p>
			<a href="#" class="text-indigo-600 text-sm leading-5 font-medium">View all blog posts &rarr;</a>
		</div>
		<?php get_template_part("templates/recent-posts"); ?>
	</div>
</main>
<?php
get_footer();
?>