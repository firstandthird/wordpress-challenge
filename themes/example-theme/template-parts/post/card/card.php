<?php
/**
 *  Card
 */
?>

<article id="post-<?php the_ID(); ?>" class="post post-card">

    <?php get_template_part('template-parts/post/content', 'image'); ?>

    <div class="post-content">
        <?php get_template_part('template-parts/post/content', 'categories'); ?>
        <?php get_template_part('template-parts/post/card/content', 'title'); ?>
        <?php get_template_part('template-parts/post/content', 'excerpt'); ?>

        <a href="<?php the_permalink() ?>" class="post-link" aria-label="<?php echo get_the_title();?>"></a>
    </div>

    <div class="post-meta">
        <div class="post-meta-author">
            <?php get_template_part('template-parts/post/author/content', 'avatar'); ?>
        </div>

        <div class="post-meta-content">
            <?php get_template_part('template-parts/post/author/content', 'name'); ?>
            <?php get_template_part('template-parts/post/content', 'date'); ?>

            <span class="post-sep">·</span>

            <?php get_template_part('template-parts/post/content', 'read-time'); ?>
        </div>
    </div>

</article>