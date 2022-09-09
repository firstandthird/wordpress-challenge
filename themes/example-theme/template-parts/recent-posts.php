<?php
/**
 * Template Part: Recent Posts Section
 *
 * Template for displaying recent posts.
 * 
 * Author: Leonardo da Costa
 *
 */

$featured_post_id      = get_field('home_featured_post');
$recent_posts_heading  = get_field('recent_posts_heading');
$recent_posts_subtitle = get_field('recent_posts_subtitle');
$recent_posts_cta      = get_field('recent_posts_cta');

$args = array(
  'post_type' => 'post',
  'posts_per_page' => 3,
  'order' => 'DSC',
  'post__not_in' => array( $featured_post_id )
);

if ( ! $featured_post_id ) {
  $current_post_id = get_the_ID();

  $args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'order' => 'DSC',
    'post__not_in' => array( $current_post_id )
  );
}

$posts_recent = new WP_Query( $args );
?>

<section class="recent-posts py-12 bg-gray-50">

  <div class="recent-posts__header text-center mb-12 mt-5">

    <?php if ( $recent_posts_heading ) : ?>  
      <h2 class="font-bold leading-tight text-3xl mt-0 mb-3 text-gray-900"> <?= $recent_posts_heading ?> </h2> 
    <?php else: ?>
      <h2 class="font-bold leading-tight text-3xl mt-0 mb-3 text-gray-900"> Related Posts </h2> 
    <?php endif; ?>
    <?php if ( $recent_posts_subtitle ) : ?>  <p class="font-light text-gray-500 mb-2 w-1/2 mx-auto"> <?= $recent_posts_subtitle ?> </p> <?php endif; ?>
    <?php if ( $recent_posts_cta ) : ?>  <a href="<?= $recent_posts_cta['url'] ?>" class="text-sm text-indigo-600 hover:text-indigo-700 transition duration-300 ease-in-out mb-4" target="<?= $recent_posts_cta['target'] ?>"> <?= $recent_posts_cta['title'] ?> </a> <?php endif; ?>
  
  </div><!-- .recent-posts__header -->

  <div class="flex justify-center gap-5 px-5 mb-8">

    <?php if ( $posts_recent->have_posts() ) : ?>

      <?php while ( $posts_recent->have_posts() ) : $posts_recent->the_post(); 
      
        $post_thumbnail     = get_the_post_thumbnail_url();
        $post_title         = get_the_title();
        $post_excerpt       = get_the_excerpt();
        $post_permalink     = get_permalink();
        $post_category      = get_the_category();
        $post_author_avatar = get_avatar_url( get_the_ID() );
        $post_author        = get_the_author();
        $post_date          = get_the_date();
        $post_read_time     = estimate_reading_time_in_minutes( get_the_content(), 75 );
      ?>

        <div class="flex justify-center">

          <div class="rounded-lg shadow-lg bg-white max-w-sm">

            <a href="<?= $post_permalink ?>">
              <img class="rounded-t-lg w-full h-48 object-cover" src="<?= $post_thumbnail ?>" alt=""/>
            </a>
            <div class="p-6 relative">
              <span class="block text-indigo-600 mb-2"> <?= $post_category[0]->name ?> </span>
              <a href="<?= $post_permalink ?>">
                <h5 class="text-gray-900 text-xl font-medium mb-2" style="min-height: 60px;"> <?= $post_title ?> </h5>
              </a> 
              <p class="font-light text-gray-500 text-base mb-4" style="min-height: 150px;">
                <?= $post_excerpt ?>
              </p>

              <div class="flex items-center">
                <?php echo get_avatar( get_the_author_email(), '40' ); ?>
                <div class="flex flex-col ml-3">
                  <span class="text-sm"> <?= $post_author ?> </span>
                  <span class="text-sm font-light text-gray-500"> <?= $post_date ?> · <?= $post_read_time ?> min read </span>
                </div>
              </div><!-- .flex -->

            </div><!-- .p-6 -->

          </div><!-- .rounded-lg -->

        </div><!-- .flex -->    

      <?php endwhile; ?>

    <?php endif; ?>  

  </div><!-- .flex -->  

</section><!-- .recent-posts -->