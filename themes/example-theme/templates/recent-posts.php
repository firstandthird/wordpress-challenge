<div class="grid grid-cols-3 gap-5 max-w-7xl mx-auto">
    <?php
    $related_query = new WP_Query(array(
        'category__not_in' => array(5)
    ));

    if ($related_query->have_posts()) :
        while ($related_query->have_posts()) : $related_query->the_post();
    ?>
            <?php $post_category = get_the_category()[0]; ?>
            <div class="rounded-lg shadow-lg">
                <img src="https://via.placeholder.com/1280x720" alt="Featured image alt tag" class="rounded-t-lg" />
                <div class="flex flex-initial flex-col items-start px-5 py-4">
                    <a href="/category/<?php echo esc_html($post_category->slug) ?>" class="block text-sm font-medium leading-5 text-indigo-600"><?php echo esc_html($post_category->name) ?></a>
                    <h3 class="text-xl font-semibold leading-7 mb-2"><?php the_title(); ?></h3>
                    <p class="text-base font-normal leading-6 text-gray-500"><?php the_excerpt(); ?></p>
                    <div class="flex flex-initial items-center justify-self-end mt-4">
                        <?php echo get_avatar(get_the_author_meta('ID'), 40, 'retro', get_the_author_meta('display_name') . ' profile image', array('class' => 'mr-3 rounded-full')); ?>
                        <div>
                            <p class="text-sm font-medium leading-5 text-gray-900"><?php echo get_the_author_meta('display_name'); ?></p>
                            <p class="text-sm font-normal leading-5 text-gray-500"><?php echo get_the_date(); ?> · 6 min read</p>
                        </div>
                    </div>
                </div>
            </div>
    <?php
        endwhile;
    endif;
    wp_reset_postdata();
    ?>
</div>