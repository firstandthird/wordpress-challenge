<?php
/**
 * Standard template for Example Theme
 * 
 * This template will be used for standard pages.
 * 
 * php version 7.4.29
 * 
 * @package Example_Theme
 */

get_header();
?>


  <div id="primary" class="content-area mt-16">
    <main id="main" class="site-main">

    <!-- PAGE CONTENT-->
    <article class="prose mx-auto">
      <?php 
        if (have_posts() ) : while ( have_posts() ) : the_post();
        
                the_title("<h1 class='text-center'>", "</h1>");
                the_content();

        endwhile; else: ?>

          <p>Sorry, there seems to have been a mistake. This page has no content.</p>

        <?php endif; ?>

    </article>
    <!-- END PAGE CONTENT-->

    </main><!-- .site-main -->
  </div><!-- .content-area -->


<?php
get_footer();
