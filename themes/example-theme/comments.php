<?php
//Get only the approved comments
$query = new WP_Comment_Query(array(
    'status' => 'approve'
));

// Comment Loop
if ($all_comments) {
    foreach ($all_comments as $single_comment) {
        echo '<p>' . esc_html($single_comment->comment_content) . '</p>';
    }
} else {
    echo 'No comments found.';
}
