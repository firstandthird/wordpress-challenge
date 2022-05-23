<footer class="bg-white flex flex-initial flex-col justify-center items-center py-8 px-5">
	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'footer',
			'items_wrap' => '<ul id="%1$s" class="%2$s flex flex-initial flex-row space-between space-x-8 text-gray-500 ">%3$s</ul>'
		)
	);
	?>
	<p class="text-gray-400 mt-6">&copy;2022 Ben Diamond, First and Third. All rights reserved.</p>
</footer>
<?php wp_footer() ?>
</body>

</html>