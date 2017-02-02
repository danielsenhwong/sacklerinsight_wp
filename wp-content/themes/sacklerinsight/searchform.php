<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
    <label>
        <input type="text" name="s" id="search" class="search-field"
               placeholder="<?php echo esc_attr_x( 'Search...', 'placeholder' ); ?>"
               value="<?php the_search_query(); ?>" />
    </label>
        <input type="submit" class="search-submit" value="<?php echo esc_attr_x('🔎', 'submit button'); ?>" />
</form>