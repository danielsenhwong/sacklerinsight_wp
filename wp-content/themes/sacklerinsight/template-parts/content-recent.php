<div class="recent-content">
    <?php
    if ( has_post_thumbnail() ) {
        the_post_thumbnail('thumbnail');
    } ?>
    
    <h2 class="blog-post-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
    <p class="blog-post-meta">by <a href="#"><?php the_author(); ?></a></p>
    
</div><!-- /.recent-content -->
