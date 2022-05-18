<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and 
 * everything up until <div id="content">
 * 
 * php version 7.4.29
 * 
 * @package Example_Theme
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <title><?php wp_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php if (is_singular() && get_option('thread_comments') ) wp_enqueue_script('comment-reply'); ?>
        <?php wp_head(); ?>
    </head>
    
    <body <?php body_class('bg-gray-50'); ?>>

    <!-- SITE HEADING -->
    <header id="masthead" class="site-header flex items-center h-16 bg-gray-800">
      <?php if (has_nav_menu('header-menu')) : ?>
        <nav class="container mx-auto">
      
          
            <?php wp_nav_menu( 
                array( 

                'theme_location' => 'header-menu',
                'menu_class'     => 'flex',
                // add_li_class is a custom parameter added in functions.php
                'add_li_class'   => 'py-2 px-3 text-gray-300 hover:text-white'

                ) 
            ); ?>

        </nav>
      <?php endif; ?>

    </header> 
    <!-- END SITE HEADING -->

    <div id="content" class="site-content">