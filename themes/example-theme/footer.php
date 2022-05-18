<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * php version 7.4.29
 * 
 * @package Example_Theme
 */

?>

  </div><!-- #content -->

  <footer id="colophon" class="site-footer py-10 mt-16 bg-white">

    <?php if (has_nav_menu('footer-menu')) : ?>
      <nav class="footer-navigation mb-4">
        <?php wp_nav_menu(
            array(

            'theme_location' => 'footer-menu',
            'menu_class'     => 'flex justify-center',
            'add_li_class'   => 'text-base leading-6 font-normal py-2 px-5 text-gray-500 hover:text-gray-700 hover:underline'

            ) 
        ); ?>
      </nav><!-- .footer-navigation -->
    <?php endif; ?>

      <p class="text-base leading-6 font-normal text-center text-gray-400">&copy; <?php echo date("Y"); ?> Workflow, Inc. All rights reserved.</p>

  </footer><!-- #colophon -->

</div><!-- #page -->

  
<?php wp_footer(); ?>

</body>
</html>