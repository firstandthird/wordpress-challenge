<?php
/**
 *  Post Content: Date
 */
?>

<?php if (get_the_date()) : ?>
    <?php echo '<span class="post-date">' . get_the_date('F j, Y') . '</span>'; ?>
<?php endif; ?>