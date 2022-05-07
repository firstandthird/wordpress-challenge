<?php

get_header();

wp_reset_query();
$arg = array(
  "post_type" => "post",
  "posts_per_page" => 1
);
$my_query = new WP_Query($arg);
if ( $my_query -> have_posts()):
  while ( $my_query -> have_posts()):
    $my_query -> the_post();
    $feature_image = wp_get_attachment_image_url(get_post_thumbnail_id(), 'large');
    ?>
  <?php if(!empty(get_the_title()) && !empty(get_the_excerpt())): ?>
    <div class="flex w-full">
      <div class="flex flex-col w-1/2 justify-center p-28">
        <?php if (!empty(get_the_title())): ?>
        <p class="text-6xl font-extrabold text-gray-900">
          <?= esc_html(get_the_title()); ?>
        </p>
        <?php endif; ?>
        <?php if (!empty(get_the_excerpt())): ?>
        <p class="my-8 text-xl text-gray-500">
          <?= esc_html(get_the_excerpt()); ?>
        </p>
        <a class="p-4 max-w-btn rounded-md text-center text-white bg-indigo-600" href="<?= esc_url(get_the_permalink()); ?>">Read Article</a>
      </div>
        <?php endif; ?>
      <img class="object-cover w-1/2 aspect-square "
           src="<?= esc_url($feature_image); ?>" loading="lazy"
           alt="" />
      <span class="sr-only">Hero Image</span>
    </div>
  <?php endif; ?>
  <?php
    endwhile;
endif;
  
