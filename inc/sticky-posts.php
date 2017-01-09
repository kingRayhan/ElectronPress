<?php
/**
 * @package ElectronPress
 * @since FoundationPress 2.2.0
 */

if ( ! function_exists( 'ELECTRON_THEME_SLUG_NAME_sticky_posts' ) ) :
function foundationpress_sticky_posts( $classes ) {
	if ( in_array( 'sticky', $classes, true ) ) {
	    $classes = array_diff($classes, array('sticky'));
	    $classes[] = 'wp-sticky';
	}
	return $classes;
}
add_filter('post_class','ELECTRON_THEME_SLUG_NAME_sticky_posts');

endif;
