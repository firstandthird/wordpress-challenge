<?php
/**
 *  Layout: Hero Featured
 */

    $featured_id      = get_field('featured_post_id');
    $featured_title   = get_the_title($featured_id);
    $featured_image   = get_the_post_thumbnail($featured_id);
    $featured_excerpt = get_the_excerpt($featured_id);
    $featured_content = get_the_content($featured_id);
    $featured_url     = get_post_permalink($featured_id);
?>

<?php if ($featured_id) : ?>

    <section class="hero hero--featured">
        <div class="hero-content">
            <h1><?php echo $featured_title; ?></h1>

            <?php if ($featured_excerpt) {
                echo "<p>$featured_excerpt</p>";
            } ?>

            <div class="button-container">
                <a href="<?php echo $featured_url; ?>" class="button button--blue">Read Article</a>
            </div>
        </div>

        <div class="hero-image">
            <?php echo $featured_image; ?>
        </div>
    </section>

<?php endif; ?>