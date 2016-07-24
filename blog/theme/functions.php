<?php

// Remove all archive pages (category, tag, date, author).
// This removes access to WordPress pages like /blog/author/{name}
// Because this is a simple blog, these types of pages are duplicative and don't add any value.
add_action('template_redirect', 'remove_archive_pages');
function remove_archive_pages() {
	if ( is_category() || is_tag() || is_date() || is_author() ) {
		global $wp_query;
		$wp_query->set_404();
	}
}

// I have a category named "Unlisted" (ID of "10").
// I want to exclude posts from this category on the home page.
// Inspired by: http://www.wpexplorer.com/hide-posts-wordpress-homepage/
add_filter('pre_get_posts', 'exclude_category');
function exclude_category($query) {
	if ( $query->is_home() ) {
		$query->set ( 'cat', '-10' );
	}
	return $query;
}

?>