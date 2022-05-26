<?php
/**
 *  Post Content: Content
 */
?>

<?php if (get_the_content()) : ?>
    <div class="post-content prose">
        <?php the_content(); ?>
    </div>
<?php endif; ?>