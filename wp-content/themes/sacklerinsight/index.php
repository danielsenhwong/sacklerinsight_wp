<?php get_header();?>

<div class="content">
    <div class="main">
        <?php if (insight_has_featured_posts(1)) : ?>
        <div class="featured-content">
            <?php get_template_part( 'template-parts/content-featured' ); ?>
        </div>
        <?php endif; ?>
       
        <?php
        $post_counter = 0;
        if (have_posts()): while (have_posts()) : the_post();
            $post_counter += 1;
            if ($post_counter <= 6):
                get_template_part('template-parts/content-recent', get_post_format());
            else:
                get_template_part('content', get_post_format());
        endwhile;?>
        <div><?php next_posts_link( 'Older posts' ); ?></div>
        <div><?php previous_posts_link( 'Newer posts' ); ?></div>
        <?php endif;
        ?>
    </div><!-- /.main -->
</div><!-- /.content -->
        
<?php get_footer();?>
