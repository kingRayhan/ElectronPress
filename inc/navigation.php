<?php
/**
 * Register Menus
 *
 * @link http://codex.wordpress.org/Function_Reference/register_nav_menus#Examples
 * @package ElectronPress
 * @since ElectronPress 1.0.0
 */



/**
* Registers a navigation menu location for a theme.
*
* @since 3.0.0
*
* @param string $location    Menu location identifier, like a slug.
* @param string $description Menu location descriptive text.
*/
register_nav_menus( array(
	'menu-1' => esc_html__( 'Primary', 'ELECTRON_THEME_TEXT_DOMAIN' ),
) );