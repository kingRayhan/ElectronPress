<?php
/**
 * Configure responsive images sizes
 *
 * @package WordPress
 * @subpackage ElectronPress
 * @since ElectronPress 1.0.0
 */

add_image_size( 'featured-small', 640, 200, true ); // name, width, height, crop
add_image_size( 'featured-medium', 1280, 400, true );
add_image_size( 'featured-large', 1440, 400, true );
add_image_size( 'featured-xlarge', 1920, 400, true );


add_image_size( 'ep-small', 640 );
add_image_size( 'ep-medium', 1024 );
add_image_size( 'ep-large', 1200 );
add_image_size( 'ep-xlarge', 1920 );
