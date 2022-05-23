<div id="related-posts" class="grid grid-cols-3 gap-5 max-w-7xl mx-auto">
    <?php
    //set default query if no args passed
    $args = wp_parse_args($args, array(
        'post_query' => $wp_query
    ));

    $post_query = $args['post_query'];

    if ($post_query->have_posts()) :
        while ($post_query->have_posts()) : $post_query->the_post();
    ?>
            <div class="flex flex-initial flex-col justify-items-stretch rounded-lg shadow-lg">
                <!-- card thumbnail -->
                <a href="<?php the_permalink(); ?>" class="rounded-t-lg w-full">
                    <?php the_post_thumbnail('large', ['class' => 'rounded-t-lg w-full h-64 object-cover']); ?>
                </a>
                <!-- card body -->
                <div class="flex flex-initial flex-col justify-start items-start px-5 py-4 h-full">
                    <!-- category link -->
                    <div id="categories">
                        <?php
                        echo '<a class="text-sm leading-5 font-medium text-indigo-600 mb-2" href="/category/' . esc_attr(get_the_category()[0]->slug) . '">' . esc_html(get_the_category()[0]->name) . '</a>';
                        ?>
                    </div>
                    <!-- post title -->
                    <h3 class="text-xl font-semibold leading-7 mb-2"><a href="<?php the_permalink(); ?>" class="hover:text-slate-700"><?php echo esc_html(get_the_title()); ?></a></h3>
                    <!-- post excerpt -->
                    <p class="text-base font-normal leading-6 text-gray-500 mb-4"><?php echo esc_html(get_the_excerpt()); ?></p>
                    <!-- author & meta -->
                    <div class="flex flex-initial items-center mt-auto">
                        <?php echo get_avatar(esc_attr(get_the_author_meta('ID')), 40, 'retro', esc_html(get_the_author_meta('display_name')) . ' profile image', array('class' => 'mr-3 rounded-full')); ?>
                        <div>
                            <p class="text-sm font-medium leading-5 text-gray-900"><?php echo esc_html(get_the_author_meta('display_name')); ?></p>
                            <p class="text-sm font-normal leading-5 text-gray-500"><?php echo get_the_date(); ?></p>
                        </div>
                    </div>
                </div>
            </div>
    <?php
        endwhile;
    endif;
    //clean query before returning from template
    wp_reset_postdata();
    ?>
</div>