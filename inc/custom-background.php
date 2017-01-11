<?php
/**
 * Custom Backgrounds is a theme feature that provides for customization of the background color and image.
 */

function ELECTRON_THEME_SLUG_NAME_custom_background_setup() {
	$defaults = array(
		'default-color'          => '',
		'default-image'          => '',
		'default-repeat'         => '',
		'default-position-x'     => '',
		'default-attachment'     => '',
		'wp-head-callback'       => '_custom_background_cb',
		'admin-head-callback'    => '',
		'admin-preview-callback' => ''
	);
	add_theme_support( 'custom-background', $defaults );
}
add_action( 'after_setup_theme', 'ELECTRON_THEME_SLUG_NAME_custom_background_setup' );
