<?php
/**
 * Enqueue all styles and scripts
 *
 * Learn more about enqueue_script: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_script}
 * Learn more about enqueue_style: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_style }
 *
 * @package ElectronPress
 * @since ElectronPress 1.0.0
 */

if ( ! function_exists( 'ELECTRON_THEME_SLUG_NAME_scripts' ) ) :
	function ELECTRON_THEME_SLUG_NAME_scripts() {


	// Load our main stylesheet.
	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
		
	
	wp_enqueue_style( 'twentyfifteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentyfifteen-style' ), '20141010' );
	wp_style_add_data( 'twentyfifteen-ie', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'twentyfifteen-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'twentyfifteen-style' ), '20141010' );
	wp_style_add_data( 'twentyfifteen-ie7', 'conditional', 'lt IE 8' );
		
		
	
	// Deregister the jquery version bundled with WordPress.
	wp_deregister_script( 'jquery' );

	// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
	wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js', array(), '2.1.0', false );


	// Add the comment-reply library on pages where it is necessary
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	}


	/**
	 * Load our IE-only stylesheet for all versions of IE:
	 * <!--[if IE]> ... <![endif]-->
	 */
	//wp_enqueue_style( 'my-theme-ie', get_stylesheet_directory_uri() . "/css/ie.css" );
	//wp_style_add_data( 'my-theme-ie', 'conditional', 'IE' );
	/**
	 * Load our IE version-specific stylesheet:
	 * <!--[if IE 7]> ... <![endif]-->
	 */
	//wp_enqueue_style( 'my-theme-ie7', get_stylesheet_directory_uri() . "/css/ie7.css" );
	//wp_style_add_data( 'my-theme-ie7', 'conditional', 'IE 7' );
	/**
	 * Load our IE specific stylesheet for a range of older versions:
	 * <!--[if lt IE 9]> ... <![endif]-->
	 * <!--[if lte IE 8]> ... <![endif]-->
	 * NOTE: You can use the 'less than' or the 'less than or equal to' syntax here interchangeably.
	 */
	//wp_enqueue_style( 'my-theme-old-ie', get_stylesheet_directory_uri() . "/css/old-ie.css" );
	//wp_style_add_data( 'my-theme-old-ie', 'conditional', 'lt IE 9' );
	/**
	 * Load our IE specific stylesheet for a range of newer versions:
	 * <!--[if gt IE 8]> ... <![endif]-->
	 * <!--[if gte IE 9]> ... <![endif]-->
	 * NOTE: You can use the 'greater than' or the 'greater than or equal to' syntax here interchangeably.
	 */
	//wp_enqueue_style( 'my-theme-new-ie', get_stylesheet_directory_uri() . "/css/new-ie.css" );
	//wp_style_add_data( 'my-theme-ie', 'conditional', 'gt IE 8' );





	add_action( 'wp_enqueue_scripts', 'ELECTRON_THEME_SLUG_NAME_scripts' );
endif;
