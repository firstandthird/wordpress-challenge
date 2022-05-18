<?php
/**
 * Front page template for Example Theme
 * 
 * This template includes a featured post, blog CTA, and then 3 recent posts.
 * 
 * php version 7.4.29
 * 
 * @package Example_Theme
 */

get_header();
?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main ">

    <!-- Featured post -->
    <?php

      // WP_Query arguments
      /*
       * This query will display a stickied post
       * If there are no sticky posts, the most recent post will be shown
       * If there are multiple sticky posts, 
       * the most recent sticky post will be shown
       * 
       * post_type, post_status, ignore_sticky_posts, and no_found_rows are
       * intended to help with performance
      */
      $args = array(
        'post_type'              => 'post',
        'post_status'            => 'publish',
        'posts_per_page'         => '1',
        'post__in'               => get_option('sticky_posts'),
        'ignore_sticky_posts'    => 1,
        'no_found_rows' => true
      );


      // The Query
      $query = new WP_Query($args);
      
      /* 
       * We're going to store the ID of the featured post so that it can be 
       * easy excluded in the "recent post" section below
       * 
      */
      $featured_post = "";

      // The Loop
      if ($query->have_posts()) {
          while ( $query->have_posts() ) {
              $query->the_post();
              // Save the id
              $featured_post = get_the_ID();
                ?>
    
              <?php get_template_part('template-parts/post/post', 'featured'); ?>

              <?php
          }
      } else {
          // no posts found
      }

      // Restore original Post Data
      wp_reset_postdata();

        ?>

    <!-- End featured post-->
    
    <div class="text-center pt-14 pb-10">
      <h2 class="text-4xl leading-10 font-extrabold mb-3 text-black">
        More from the Blog
      </h2>

      <p class="text-xl leading-7 font-normal mb-3 text-gray-500">
        Check out the most recent three posts.
      </p>

      <a href="<?php echo get_site_url(); ?>/blog" class="text-sm leading-5 font-medium text-indigo-600">
        View all blog posts →
      </a>
    </div>

    <!-- RECENT POSTS -->
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
      $recent_posts = new WP_Query($args);

      // Set the post counter to 0
      $posts = 0;

      // The Loop
      if ($recent_posts->have_posts()) {
          // Check to see that we have fewer than three posts
          while ( $recent_posts->have_posts() && $posts < 3) {
              $recent_posts->the_post();
              $current = get_the_ID();

              // Compare the post ID in the query to ID of the featured article
              if ($current != $featured_post) {
                  $posts++;
                  get_template_part('template-parts/post/post', 'excerpt-card');
              }
                ?>

              <?php
          
          }

      } else {
          // no posts found
      }

      // Restore original Post Data
      wp_reset_postdata();

        ?>

    </div>
    <!-- END RECENT POSTS -->

    </main><!-- .site-main -->
  </div><!-- .content-area -->

<?php
get_footer();
