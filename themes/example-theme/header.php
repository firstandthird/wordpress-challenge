<!DOCTYPE html>
<html>
<?php wp_head() ?>

<body>
	<header>
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'header',
				'container_class' => 'bg-gray-800',
				'items_wrap' => '<ul id="%1$s" class="%2$s p-6 flex flex-initial flex-row space-between space-x-8 text-gray-300 ">%3$s</ul>'
			)
		);
		?>
	</header>