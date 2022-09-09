<?php
/**
 * Theme Header
 *
 * Author: Leonardo da Costa
 * 
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav class="px-2 sm:px-4 py-2.5 bg-gray-800">

  <div class="container flex flex-wrap justify-between items-center ">

    <div class="hidden w-full md:block md:w-auto" id="navbar-default">

      <?php 
        wp_nav_menu(array(
          'theme_location'  => 'main-menu',
          'menu'            => 'main',
          'menu_class'      => 'main-menu',
          'container'       => 'nav',
          'container_class' => 'main-nav',
        ));
      ?>

    </div>

  </div><!-- .container -->

</nav><!-- nav -->
