<?php
/**
 * Single Post Template
 * 
 * Author: Leonardo da Costa
 *
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div id="post-<?= the_ID(); ?>" class="container mx-auto single-post max-w-screen-md pt-12 mt-5 pb-5">

  <div class="single-post__header text-center mb-8">
    <span class="block font-medium upperase uppercase text-[#D94AB1] mb-2"> Introducing </span>
    <h1 class="font-bold leading-tight text-3xl mt-0 mb-3 text-gray-900"> <?= the_title(); ?> </h1>
  </div><!-- .single-post__header -->

  <div>
    <?= the_content(); ?>
  </div>

</div><!-- .single-post -->

<?php get_template_part('template-parts/recent-posts'); ?>

<?php get_footer(); ?>