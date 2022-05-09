<?
add_action( 'wp_enqueue_scripts', 'enqueue_function', 10 );
wp_enqueue_style( 'tailwindcss', get_template_directory_uri() . '/dist/common.css');
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );

//estimated reading time https://medium.com/@shaikh.nadeem/how-to-add-reading-time-in-wordpress-without-using-plugin-d2e8af7b1239
function reading_time() {
    $content = get_post_field( 'post_content', $post->ID );
    $word_count = str_word_count( strip_tags( $content ) );
    $readingtime = ceil($word_count / 200);
    
    if ($readingtime == 1) {
    $timer = " min";
    } else {
    $timer = " mins";
    }
    $totalreadingtime = $readingtime . $timer;
    
    return $totalreadingtime;
    }
    