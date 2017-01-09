<?php
/**
 * Configure responsive images sizes
 *
 * @package WordPress
 * @subpackage ElectronPress
 * @since ElectronPress 1.0.0
 */


/**
* Register a new image size.
*
* @param string     $name   Image size identifier. Reserved names -> ‘thumb’, ‘thumbnail’, ‘medium’, ‘large’, ‘post-thumbnail’
* @param int        $width  Image width in pixels.
* @param int        $height Image height in pixels.
* @param bool|array $crop   Optional. Whether to crop images to specified width and height or resize.
*                           An array can specify positioning of the crop area. Default false.
*
* add_image_size( string $name, int $width, int $height, bool|array $crop = false )
*
* @url https://developer.wordpress.org/reference/functions/add_image_size/
*/

add_image_size( 'featured-small', 640, 200, true ); // name, width, height, crop
add_image_size( 'featured-medium', 1280, 400, true );
add_image_size( 'featured-large', 1440, 400, true );
add_image_size( 'featured-xlarge', 1920, 400, true );


add_image_size( 'ep-small', 640 );
add_image_size( 'ep-medium', 1024 );
add_image_size( 'ep-large', 1200 );
add_image_size( 'ep-xlarge', 1920 );





/**
 * =====================================
 * USES
 * =====================================
 */


/**
 * Display the post thumbnail.
 * the_post_thumbnail( string|array $size = 'post-thumbnail', string|array $attr = '' )
 *
 * ----------------------------
 * 
 * Gets the direct image URL for the featured image
 * the_post_thumbnail_url( $size );
 *
 * ----------------------------
 *
 * Check if post has an image attached.
 * has_post_thumbnail( int|WP_Post $post = null )
 */



/**
 * =====================================
 * NOTEs
 * =====================================
 */
/*
//Default WordPress image sizes
	the_post_thumbnail( 'thumbnail' );     // Thumbnail (150 x 150 hard cropped)
	the_post_thumbnail( 'medium' );        // Medium resolution (300 x 300 max height 300px)
	the_post_thumbnail( 'medium_large' );  // Medium Large (added in WP 4.4) resolution (768 x 0 infinite height)
	the_post_thumbnail( 'large' );         // Large resolution (1024 x 1024 max height 1024px)
	the_post_thumbnail( 'full' );          // Full resolution (original size uploaded)
	 
	//With WooCommerce
	the_post_thumbnail( 'shop_thumbnail' ); // Shop thumbnail (180 x 180 hard cropped)
	the_post_thumbnail( 'shop_catalog' );   // Shop catalog (300 x 300 hard cropped)
	the_post_thumbnail( 'shop_single' );    // Shop single (600 x 600 hard cropped)
*/

/**
 * Related functions
 * ----------------------------------
 * remove_image_size()
 * has_post_thumbnail()
 * the_post_thumbnail()
 * get_post_thumbnail_id()
 * get_the_post_thumbnail()
 * set_post_thumbnail_size()
*/