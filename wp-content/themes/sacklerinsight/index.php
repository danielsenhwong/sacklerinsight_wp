<?php get_header();?>

<div class="content">
    <div class="main">
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
