<?php
/**
 * Standard template for Example Theme
 * 
 * This template will be used for blog posts.
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
    <article class="prose mx-auto mb-24">
      <?php 
        if (have_posts() ) : while ( have_posts() ) : the_post();
        
                // The little heading has been hardcoded into the post template
                // Another option could have been to add a custom field

                echo "<p class='text-base leading-6 font-semibold text-pink-500 text-center uppercase m-0'>Introducing</p>";
                the_title("<h1 class='text-center'>", "</h1>");
                the_content();
        endwhile; else: ?>
          <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>

    </article>
    <!-- END PAGE CONTENT-->

    <!-- RELATED POSTS -->
    <h3 class="text-4xl leading-10 font-extrabold text-center mb-9">
      Related Posts
    </h3>
    <div class="flex gap-4 container mx-auto">
    
    <?php
 
      // WP_Query arguments
      /* 
        I'm querying for 4 posts here, instead of 3
        The idea is to avoid using post__not_in
        Grabbing an extra post and then using a simple loop to
          show only the posts I want makes better use of the
          WordPress cache.
        post_type, post_status, and no_found_rows are also 
          intended to help with performance
      */
      $args = array(
        'post_type'              => 'post',
        'post_status'            => 'publish',
        'posts_per_page'         => '4',
        'ignore_sticky_posts'    => 1,
        'no_found_rows' => true
      );

      // The Query
      $related_posts = new WP_Query($args);

      // Store the ID of the current post
      $current_post = get_the_ID();
      // Set the post counter to 0
      $posts = 0;

      // The Loop
      if ($related_posts->have_posts() ) {
          // Check to see that we have fewer than three posts
          while ( $related_posts->have_posts() && $posts < 3) {
              $related_posts->the_post();
              
              // Compare the post ID in the query to ID of the current article
              if (get_the_ID() != $current_post ) {
                  $posts++;
                  get_template_part('template-parts/post/post', 'excerpt-card');
              }
          }

      } else {
          // no posts found
      }

      // Restore original Post Data
      wp_reset_postdata();

        ?>

    </div>
    <!-- END RELATED POSTS -->

    </main><!-- .site-main -->
  </div><!-- .content-area -->


<?php
get_footer();
