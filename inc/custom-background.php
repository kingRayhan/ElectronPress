<?php


function ELECTRON_THEME_SLUG_NAME_custom_header_setup() {
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
add_action( 'after_setup_theme', 'ELECTRON_THEME_SLUG_NAME_custom_header_setup' );