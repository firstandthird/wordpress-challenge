<?php
/**
 * Navigation: Header
 */
?>

<?php
wp_nav_menu(array(
    'theme_location'  => 'main-menu',
    'menu'            => 'main',
    'menu_id'         => '',
    'menu_class'      => 'main-menu',
    'container'       => 'nav',
    'container_class' => 'main-nav js-main-nav',
));
?>