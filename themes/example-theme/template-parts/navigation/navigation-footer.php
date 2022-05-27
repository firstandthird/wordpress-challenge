<?php
/**
 * Navigation: Footer
 */
?>

<?php
wp_nav_menu(array(
    'theme_location'  => 'footer-menu',
    'menu'            => 'footer',
    'menu_id'         => '',
    'menu_class'      => 'footer-menu',
    'container'       => 'nav',
    'container_class' => 'footer-nav',
    'fallback_cb'     => false
));
?>