<?php
/**
 *  Post Content: Read Time
 */

    $read_time = ft_estimated_reading_time(get_the_ID());
?>

<?php if ($read_time) : ?>
    <span class="post-read-time"><?php echo $read_time; ?></span>
<?php endif; ?>