<?php
/**
 * Entry meta information for posts
 *
 * @package ElectronPress
 * @since ElectronPress 1.0.0
 */

if ( ! function_exists( 'ELECTRON_THEME_SLUG_NAME_entry_meta' ) ) :
	function ELECTRON_THEME_SLUG_NAME_entry_meta() {
		echo '<time class="updated" datetime="' . get_the_time( 'c' ) . '">' . sprintf( __( 'Posted on %1$s at %2$s.', 'ELECTRON_THEME_TEXT_DOMAIN' ), get_the_date(), get_the_time() ) . '</time>';
		echo '<p class="byline author">' . __( 'Written by', 'ELECTRON_THEME_TEXT_DOMAIN' ) . ' <a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '" rel="author" class="fn">' . get_the_author() . '</a></p>';
	}
endif;
