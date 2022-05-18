<?php 
/**
 * Displays a featured post
 *
 * This template displays a featured post excerpt and thumbnail 
 * as a two column layout.
 * 
 * 
 * php version 7.4.29
 * 
 * @package Example_Theme
 */

?>

<!-- The container with relative position is used to hold 
the 50% background image with absolute position -->
<div class="relative">

  <!-- Create a two-column grid -->
  <div class="grid grid-cols-2 container mx-auto">
    <div class="w-full bg-white pt-48 pr-14 pb-48 pl-10">
      <h1 class="text-6xl leading-none font-extrabold mb-6 text-gray-900">
        <?php the_title(); ?>
      </h1>

      <p class="text-xl leading-7 font-normal mb-10 text-gray-500">
        <?php echo get_the_excerpt(); ?>
      </p>

      <a href="<?php the_permalink(); ?>">
        <!-- We could use @apply to make a .btn component -->
        <!-- I chose not to since there's only one button here -->
        <button class="rounded-md text-lg leading-7 font-medium px-10 py-4 mb-10 bg-indigo-600 text-white hover:bg-indigo-800 active:bg-indigo-500 ">
          Read Article
        </button>
      </a>
    </div>
  </div>

  <!-- Here's one way to create the responsive, 50% image-->
  <?php if (has_post_thumbnail() ) : ?>
        <?php $feat_image_url = wp_get_attachment_url(get_post_thumbnail_id()); ?>
      <div class="absolute top-0 left-1/2 w-1/2 h-full bg-center bg-cover -z-10" style="background-image: url('<?php echo $feat_image_url; ?>');"></div>
  <?php endif; ?>
</div> 
      

   