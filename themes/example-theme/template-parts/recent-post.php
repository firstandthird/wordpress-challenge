<div class="container mx-auto pb-20 bg-gray-50">
  <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-14 xl:gap-6">
    <?php
    $args = array(
      'post_type' => 'post',
      'posts_per_page'  => 3
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) :
      while ($the_query->have_posts()) :
        $the_query->the_post();
        $category = get_the_category();
        
    ?>
        <li class="flex flex-col shadow-xl rounded-md">
          <a class="h-full flex flex-col" href="<?= esc_url(get_the_permalink()); ?>">
            <?php if (!empty(has_post_thumbnail())) : ?>
              <div>
                <img class="object-cover w-full aspect-video" src="<?= esc_url(wp_get_attachment_image_url(get_post_thumbnail_id(), 'large')); ?>" loading="lazy" alt="" />
              </div>
            <?php endif; ?>
            <?php if (!empty(get_the_title()) || !empty(get_the_excerpt()) || !empty(get_the_category())) : ?>
              <div class="h-2/4 flex flex-col mt-4 px-4">
                <?php if (!empty($category[0]->name)): ?>
                  <p class=" text-indigo-600"><?= esc_html($category[0]->name) ?></p>
                <? endif; ?>
                <?php if (!empty(get_the_title())) : ?>
                  <p class=" text-xl font-bold text-gray-900">
                    <?= esc_html(get_the_title()); ?>
                  </p>
                <?php endif; ?>
                <?php if (!empty(get_the_excerpt())) : ?>
                  <p class="mt-4 mb-4 pr-5 text-base text-gray-500">
                    <?= esc_html(get_the_excerpt()); ?>
                  </p>
                <?php endif; ?>
                <div class="flex gap-2 mb-3">
              <div class="w-16 h-16">
                <img class="rounded-full w-full h-full object-cover"
                  src="<?= esc_url(get_avatar_url(get_the_author_meta('ID'), ['size' => 126, 'default' => 'blank'])); ?>" alt=""
                  loading="lazy" />
              </div>
                <div class="flex flex-col gap-1">
                  <p class="text-sm font-bold text-gray-900"><?= esc_html(get_the_author_meta('display_name')) ?></p>
                  <time datetime="<?= esc_attr(get_the_date()); ?>"
                    class="hidden lg:block text-sm text-gray-500"><?= esc_html(get_the_date()) ?> - <?= reading_time(); ?> read</time>
                </div>
            </div>
              </div>
            <?php endif; ?>
          </a>
        </li>
    <?php
      endwhile;
    endif;
    ?>
  </ul>
</div>