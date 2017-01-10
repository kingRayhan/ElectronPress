<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package ElectronPress
 * @since ElectronPress 1.0.0
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses Object get_custom_header() [All imformation about custom header]
 * @uses void   header_image() [<custom header image url>]
 */
function ELECTRON_THEME_SLUG_NAME_custom_header_setup() {
	$defaults = array(
		'default-image'          => '',
		'width'                  => 0,
		'height'                 => 0,
		'flex-height'            => false,
		'flex-width'             => false,
		'uploads'                => true,
		'random-default'         => false,
		'header-text'            => true,
		'default-text-color'     => '',
		'wp-head-callback'       => '',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-header', $defaults );
}
add_action( 'after_setup_theme', 'ELECTRON_THEME_SLUG_NAME_custom_header_setup' );
