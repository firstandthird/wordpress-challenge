<?php
/**
 *  Post Content: Image
 */
?>

<?php if (get_the_post_thumbnail()) : ?>
    <div class="post-image">
        <?php the_post_thumbnail('large'); ?>
    </div>
<?php endif; ?>