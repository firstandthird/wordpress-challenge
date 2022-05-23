<!DOCTYPE html>
<html>
<?php wp_head(); //print meta 
?>

<body>
	<?php
	//get menu in header location and print as <ul>
	wp_nav_menu(
		array(
			'theme_location' => 'header',
			'container' => 'nav',
			'container_class' => 'main-menu bg-gray-800',
			'items_wrap' => '<ul id="%1$s" class="%2$s p-6 flex flex-initial flex-row space-between space-x-8 text-gray-300 ">%3$s</ul>',
			'fallback_cb' => 'fallback_menu'
		)
	);

	//if no menu in location exists, print default w/ formatting
	function fallback_menu()
	{
		echo esc_html(wp_page_menu(array(
			'container' => 'nav',
			'menu_class' => 'menu p-6 bg-gray-800 text-gray-300'
		)));
	}
	?>