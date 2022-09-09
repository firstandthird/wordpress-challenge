<?php
/**
 * Template Part: Featured Post Section
 *
 * Template for displaying featured post section.
 * 
 * Author: Leonardo da Costa
 *
 */

$post_id             = get_field( 'home_featured_post' );
$post_title          = get_the_title($post_id);
$post_image          = get_the_post_thumbnail($post_id);
$post_excerpt        = get_the_excerpt($post_id);
$post_content        = get_the_content($post_id);
$post_url            = get_post_permalink($post_id);
$post_featured_image = get_the_post_thumbnail_url( $post_id );
?>

<?php if ( $post_id ) : ?>

<section class="featured-post">

  <div class="grid grid-cols-2">

    <div class="flex justify-center items-center px-10">

      <div class="m-auto">
        <h1 class="font-bold leading-tight text-6xl mt-0 mb-3 text-gray-900"> <?= $post_title ?> </h1>
        <p class="font-light text-gray-500 mb-8"> <?= $post_excerpt ?> </p>
        <a href="<?= $post_url ?>" class="inline-block px-8 py-4 bg-blue-600 text-white font-medium text-sm leading-snug rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"> Read Article </a>
      </div>

    </div><!-- .flex -->
    <div> 
      <img class="w-full" src="<?= $post_featured_image ?>" alt="Featured Image">
    </div>

  </div><!-- .grid -->

</section><!-- .featured-post -->

<?php endif; ?>