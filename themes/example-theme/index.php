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
    $feature_image = get_the_post_thumbnail_url(get_the_ID());
    ?>
<div class="flex w-full py-10">
  <div class="flex flex-col justify-center items-center">
    <h2><?= esc_html(get_the_title()); ?></h2>
    <p></p>
  </div>
</div>
<?php
    the_content();
    
  endwhile;
endif;
  
