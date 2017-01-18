<div class="sidebar">
    <div>
        <h4>About</h4>
        <p><?php the_author_meta('description');?></p>
    </div>
    <div>
        <h4>Archives</h4>
        <ul>
            <?php wp_get_archives('type=monthly');?>
        </ul>
    </div>
</div><!-- /.sidebar -->
