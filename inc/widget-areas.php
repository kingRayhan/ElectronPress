<?php
/**
 * Register widget areas
 *
 * @package ElectronPress
 * @since ElectronPress 1.0.0
 */

if ( ! function_exists( 'ELECTRON_THEME_SLUG_NAME_sidebar_widgets' ) ) :
function ELECTRON_THEME_SLUG_NAME_sidebar_widgets() {
	register_sidebar(array(
	  'id' => 'sidebar-widgets',
	  'name' => __( 'Sidebar widgets', 'ELECTRON_THEME_TEXT_DOMAIN' ),
	  'description' => __( 'Drag widgets to this sidebar container.', 'ELECTRON_THEME_TEXT_DOMAIN' ),
	  'before_widget' => '<article id="%1$s" class="widget %2$s">',
	  'after_widget' => '</article>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));

	register_sidebar(array(
	  'id' => 'footer-widgets',
	  'name' => __( 'Footer widgets', 'ELECTRON_THEME_TEXT_DOMAIN' ),
	  'description' => __( 'Drag widgets to this footer container', 'ELECTRON_THEME_TEXT_DOMAIN' ),
	  'before_widget' => '<article id="%1$s" class="large-4 columns widget %2$s">',
	  'after_widget' => '</article>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));
}

add_action( 'widgets_init', 'ELECTRON_THEME_SLUG_NAME_sidebar_widgets' );
endif;
