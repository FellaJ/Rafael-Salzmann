<?php
/**
 * Custom Theme & Module Functions.
 */


function dh_remove_ptags_on_images($content) {
    $content = preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
    return preg_replace('/<p>\s*(<iframe .*>*.<\/iframe>)\s*<\/p>/iU', '\1', $content);
}
add_filter('acf_the_content', 'dh_remove_ptags_on_images', 999);
add_filter('the_content', 'dh_remove_ptags_on_images', 999);



//  Add responsive container to embeds
function dh_responsive_video_embed( $cache, $url, $attr, $post_id ) {

	// Add Youtube Parameter to the Video
	if ( strstr( $cache,'youtube.com/embed/' ) ) {
		$cache = str_replace( '?feature=oembed', '?feature=oembed&showinfo=0&rel=0', $cache );
	}

    return '<div class="embed-responsive embed-responsive-16by9">' . $cache . '</div>';
}

add_filter( 'embed_oembed_html', 'dh_responsive_video_embed', 10, 4 );

