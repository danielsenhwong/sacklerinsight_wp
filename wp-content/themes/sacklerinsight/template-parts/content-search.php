<?php
/*
* Template Name: Search Page
* @package Wordpress
* @subpackage sacklerinsight
*/
?>
<?php get_header();?>

<div class="content">
    <div class="main">
        <?php get_search_form(); ?>
    </div>
</div>

<?php if ( have_posts() ) : ?>

    <?php
    while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/content', 'search');
    endwhile;
    ?>

<?php endif; ?>

<div>
    <?php
    global $wp_query;
    $total_results = $wp_query->found_posts
</div>

<?php get_footer();?>