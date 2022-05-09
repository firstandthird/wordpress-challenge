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
  <?php endwhile; ?>
  <div class="flex flex-col bg-gray-50 py-10">
    <div class="flex flex-col px-2 mb-4 gap-2 items-center justify-center ">
      <p class="text-4xl font-extrabold"> More from the Blog</p>
      <p class="text-xl text-gray-500">This text can be hardcoded for this test. Articles before should be the most recent three posts.</p>
      <a class="text-indigo-600" href="<?= esc_url(get_post_type_archive_link( 'post' )); ?>">View all blog posts -></a>
    </div>
  </div>  
<?php endif; ?>

<?php
  wp_reset_query();
  get_template_part('template-parts/recent-post');
  
