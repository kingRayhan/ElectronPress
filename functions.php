<?php
/**
 * ElectronPress functions and definitions
 * @package ElectronPress
 * @since ElectronPress 1.0.0
 */


/**
 * text domain: ELECTRON_THEME_TEXT_DOMAIN
 * theme slug: ELECTRON_THEME_SLUG_NAME
 */



/** Register all navigation menus */
require_once get_template_directory() . '/inc/navigation.php';

/** Create widget areas in sidebar and footer */
require_once get_template_directory() . '/inc/widget-areas.php';

/** Return entry meta information for posts */
require_once get_template_directory() . '/inc/entry-meta.php';

/** Enqueue scripts */
require_once get_template_directory() . '/inc/enqueue-scripts.php';

/** Add theme support */
require_once get_template_directory() .  '/inc/theme-support.php';

/** Configure responsive image sizes */
require_once get_template_directory() . '/inc/image-sizes.php';

/** Custom Header */
require_once get_template_directory() . '/inc/custom-header.php';

/** Custom Background */
require_once get_template_directory() . '/inc/custom-background.php';

/** Template tags */
require_once get_template_directory() . '/inc/template-tags.php';



/** Libries */
require_once get_template_directory() . '/lib/init.php';



