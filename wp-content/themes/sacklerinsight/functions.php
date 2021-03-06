<?php
// Add scripts and stylesheets
function startwordpress_scripts() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), filemtime( get_stylesheet_directory() . '/style.css' ) );
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

// Add Google Fonts
function startwordpress_google_fonts() {
    wp_register_style('Crimson+Text', 'https://fonts.googleapis.com/css?family=Crimson+Text');
    wp_register_style('Montserrat', 'https://fonts.googleapis.com/css?family=Montserrat');
    wp_enqueue_style('Crimson+Text');
    wp_enqueue_style('Montserrat');
}

add_action('wp_print_styles', 'startwordpress_google_fonts');

// WordPress Titles
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
    global $post;
        return ' [...]<br /><br /><a class="moretag" href="'. get_permalink($post->ID) . '">&raquo; Read the full article...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

// WordPress Featured Content
add_theme_support( 'featured-content', array(
    'filter'     => 'insight_get_featured_posts',
    'max_posts'  => 6,
) );

function insight_get_featured_posts() {
    return apply_filters( 'insight_get_featured_psots', array() );
}

function insight_has_featured_posts() {
    if ( is_paged() )
        return false;
    
    $minimum = absint( $minimum );
    $featured_psots = apply_filters( 'insight_get_featured_posts', array() );
    
    if ( ! is_array( $featured_posts ) )
        return false;
    
    if ( $minimum > count( $featured_posts ) )
        return false;
    
    return true;
}
?>
