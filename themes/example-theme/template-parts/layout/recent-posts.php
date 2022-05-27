
<?php
/**
 *  Layout: Recent Posts
 */

    $front_page_id    = get_option('page_on_front');
    $is_post          = is_single() && 'post' == get_post_type() ? true : false;
    $current_post_id  = get_the_ID();
    $featured_post_id = get_field('featured_post_id', $front_page_id);

    $excluded_posts = $is_post == true
        ? array($current_post_id, $featured_post_id)
        : array($featured_post_id);

    $args = array(
        'numberposts' => 3,
        'post_type'   => 'post',
        'exclude'     => $excluded_posts
    );

    $recent_posts = get_posts( $args );
?>

<div class="recent-posts">
    <?php if ( $recent_posts ) :
        foreach ( $recent_posts as $post ) :
            setup_postdata( $post );
            get_template_part('template-parts/post/card/card');
        endforeach;
        wp_reset_postdata();
    endif; ?>
</div>