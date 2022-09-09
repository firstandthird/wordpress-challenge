

<?php
/**
 * Theme Footer
 *
 * Author: Leonardo da Costa
 * 
 */

?>

<footer class="footer text-center py-12">

  <?php 
    wp_nav_menu(array(
      'theme_location'  => 'footer-menu',
      'menu'            => 'footer',
      'menu_class'      => 'footer-menu',
      'container'       => 'nav',
      'container_class' => 'footer-nav',
    ));
  ?>

  <div class="footer__copyright mt-3">
    <p class="text-sm text-gray-400">&copy; <? date('Y'); ?> Workflow, Inc. All rights reserved.</p>
  </div><!-- .footer__copyright -->

</footer><!-- .footer -->

<?php wp_footer(); ?>

</body>
</html>