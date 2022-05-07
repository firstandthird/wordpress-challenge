<div class="container mx-auto">
  <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-14 xl:gap-10">
    <?php
    if (have_posts()):
      while (have_posts()):
        the_post();
    ?>
      <li class="flex flex-col">
        <a class="h-full flex flex-col" href="<?= esc_url(get_the_permalink()); ?>">
          <?php if (!empty(has_post_thumbnail())): ?>
          <div>
            <img class="object-cover w-full aspect-video"
              src="<?= esc_url(wp_get_attachment_image_url(get_post_thumbnail_id(), 'large')); ?>" loading="lazy"
              alt="" />
          </div>
          <?php endif; ?>
          <?php if(!empty(get_the_title()) && !empty(get_the_excerpt())): ?>
          <div class="row-span-1 xl:row-span-5">
            <?php if (!empty(get_the_title())): ?>
            <p class="mt-6 lg:mt-8 text-3xl font-bold text-primary">
              <?= esc_html(get_the_title()); ?>
            </p>
            <?php endif; ?>
            <?php if (!empty(get_the_excerpt())): ?>
            <p class="mt-4 pr-5 text-xl text-primary">
              <?= esc_html(get_the_excerpt()); ?>
            </p>
            <?php endif; ?>
          </div>
          <?php endif; ?>
          <p class="text-base font-bold row-span-1 xl:row-span-1 text-orange uppercase mt-5 lg:mt-6">
            Read the article
          </p>
        </a>
      </li>
    <?php
      endwhile;
    endif;
    ?>
  </ul>
</div>
   