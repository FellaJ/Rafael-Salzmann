<?php
/**
 * Custom functions that act independently of the theme templates.
 */

/**
 * Adds custom classes to the array of body classes.
 */
function dh_body_classes( $classes ) {


	global $post;
    $id = $post->ID;

	if ( is_singular()  && !(is_home() || is_front_page())) {
		$classes[] = 'page-' . basename( get_permalink($id) );
	}

	return $classes;
}
add_filter( 'body_class', 'dh_body_classes' );


// Remove  Meta Tags
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
remove_action( 'wp_head', 'wp_generator' );



// remove wp version param from any enqueued scripts
function dh_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'dh_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'dh_remove_wp_ver_css_js', 9999 );


// Add Support for SVG Upload
function dh_svgs_upload_mimes( $mimes = array() ) {


    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';

    return $mimes;

}
add_filter( 'upload_mimes', 'dh_svgs_upload_mimes' );

