<?php get_header();?>

<div class="content">
    <div class="main">
        <?php
        if (have_posts()): while (have_posts()) : the_post();
            get_template_part('content', get_post_format());
        endwhile; endif;
        ?>
    </div><!-- /.main -->
    <?php # 18 Jan 2017 Ignore sidebar for now. Need better style. ?>
    <?php #get_sidebar();?>
</div><!-- /.content -->
        
<?php get_footer();?>
