<form method="get" action="<?php echo esc_url( site_url() ) ?>" role="search">
	<label for='s' class='screen-reader-text'><?php esc_html_e( 'Search for:', 'siteorigin-north' ); ?></label>
	<input type="search" name="s" placeholder="<?php esc_attr_e('Search', 'siteorigin-north') ?>" value="<?php echo get_search_query() ?>" />
	<span class="screen-reader-text"><?php echo esc_html_e( 'Search', 'siteorigin-north' ); ?></span>
	<input type="submit" value="<?php _e('Search', 'siteorigin-north') ?>" />
</form>
