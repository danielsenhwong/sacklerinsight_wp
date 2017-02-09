<?php
    $featured_posts = insight_get_featured_posts();
	foreach ( (array) $featured_posts as $order => $post ) :
		setup_postdata( $post );
		// Include the featured content template.
		get_template_part( 'content', 'featured-post' );
	endforeach;
?>
