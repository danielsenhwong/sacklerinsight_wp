<div class="recent-content">
    <h2 class="blog-post-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
    <p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>

    <?php if ( has_post_thumbnail() ) { ?>
        <?php the_post_thumbnail('thumbnail');?>
        <?php the_excerpt();?>
    <?php } else {
        the_excerpt();
    } ?>

    <a href="<?php comments_link(); ?>">
        <?php
        printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( 						get_comments_number() ) ); ?>
    </a>
</div><!-- /.recent-content -->