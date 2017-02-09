<?php get_header();?>

<div class="content">
    <div class="main">
        <?php if (insight_has_featured_posts(1)) : ?>
        <div class="featured-content">
            <?php get_template_part( 'template-parts/content-featured' ); ?>
        </div>
        <?php endif; ?>
        <?php $recent_posts = wp_get_recent_posts( array('numberposts' => 6, 'post_type' => 'post', 'post_status' => 'publish') );
        foreach ( $recent_posts as $recent ) { ?>
            <div class="recent-content">
                <?php echo $recent["post_title"] ?> 
            </div>
        <?php } ?>
        
        <?php
        if (have_posts()): while (have_posts()) : the_post();
            get_template_part('content', get_post_format());
        endwhile;?>
        <div><?php next_posts_link( 'Older posts' ); ?></div>
        <div><?php previous_posts_link( 'Newer posts' ); ?></div>
        <?php endif;
        ?>
    </div><!-- /.main -->
</div><!-- /.content -->
        
<?php get_footer();?>
