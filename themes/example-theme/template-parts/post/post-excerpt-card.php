<?php 
/**
 * Displays a post excerpt as a card
 *
 * This template includes a category, linked post title
 * thumbnail, exceprt, author, post date, and estimated read time
 * 
 * php version 7.4.29
 * 
 * @package Example_Theme
 */

?>

<!-- CARD -->
<div class="rounded-lg drop-shadow-lg overflow-hidden flex flex-col flex-1 relative bg-white">

  <?php if (has_post_thumbnail() ) : ?>
        <?php 
          // Saving the featured image URL to be used as a background image
          $feat_image_url = wp_get_attachment_url(get_post_thumbnail_id()); 
        ?>
    <a href="<?php echo get_permalink(); ?>" class="peer">
      <div class="h-48 bg-cover bg-center" style="background-image: url('<?php echo $feat_image_url; ?>');"></div>
    </a>
  <?php endif; ?>

  <!-- Setting the card contents up as a flex column allows me to 
      easily stick the author to the bottom, regardless of card height -->
  <div class="p-6 flex flex-col justify-between flex-1">

    <!-- CARD CONTENT -->
    <div>
      <p class="text-sm leading-5 font-medium mb-2 text-indigo-600">
        <?php 
          $categories = get_the_category();

          echo esc_html($categories[0]->name); 
        ?>
      </p>
      <a href="<?php echo get_permalink(); ?>">
        <h3 class="text-xl leading-7 font-semibold mb-3 text-gray-900 hover:text-indigo-600 peer-hover:text-indigo-600">
          <?php the_title(); ?>
        </h3>
      </a>
      <p class="text-base leading-6 font-normal text-gray-500">
        <?php echo get_the_excerpt(); ?>
      </p>
    </div>
    <!-- END CARD CONTENT -->

    <!-- AVATAR CARD FOOTER -->
    <div class="flex pt-5">
      <div>
        <?php 
          $avatar_args = array(
            // Put the avatar in a circle
            'class'              => 'rounded-full',
          );

          echo get_avatar(get_the_author_meta('ID'), 40, '', '', $avatar_args); ?>
      </div>
      <div class="flex flex-col pl-2">
        <p class="text-sm leading-5 font-medium text-gray-900">
          <?php echo get_the_author_meta('first_name') . " " . get_the_author_meta('last_name'); ?>
        </p>
        <p class="text-sm leading-5 font-normal text-gray-500">
          <?php echo get_the_date(); ?> &bull;
        
        <?php 
          // Calculate reading time
          $words_per_min = 200;
          // This custom function lives in functions.php
          $post_word_count = count_content_words(get_the_content());

          $min = round($post_word_count / $words_per_min);
          echo " " . $min . " min read"; 
        ?>
        </p>
      </div>
    </div>
    <!-- END AVATAR CARD FOOTER -->
  </div>

</div>  
<!-- END CARD -->
  