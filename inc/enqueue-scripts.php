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


	/**
	 * ===================================================================================
	 * 	*****	Stylesheets assets  *****
	 * ===================================================================================
	 */
	

	/**
	* Enqueue a CSS stylesheet.
	*
	* Registers the style if source provided (does NOT overwrite) and enqueues.
	*
	*
	* @param string           $handle Name of the stylesheet. Should be unique.
	* @param string           $src    Full URL of the stylesheet, or path of the stylesheet relative to the WordPress root directory.
	*                                 Default empty.
	* @param array            $deps   Optional. An array of registered stylesheet handles this stylesheet depends on. Default empty array.
	* @param string|bool|null $ver    Optional. String specifying stylesheet version number, if it has one, which is added to the URL
	*                                 as a query string for cache busting purposes. If version is set to false, a version
	*                                 number is automatically added equal to current installed WordPress version.
	*                                 If set to null, no version is added.
	* @param string           $media  Optional. The media for which this stylesheet has been defined.
	*                                 Default 'all'. Accepts media types like 'all', 'print' and 'screen', or media queries like
	*                                 '(orientation: portrait)' and '(max-width: 640px)'
	*                                 
	* @link https://codex.wordpress.org/Function_Reference/wp_enqueue_style
	* 
	* wp_enqueue_style( $handle, $src = '', $deps = array(), $ver = false, $media = 'all' )
	*/ 



	// Load our main stylesheet.
	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );

	


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
		
	

	/**
	 * ===================================================================================
	 * 			Javascripts assets
	 * ===================================================================================
	 */

    /**
	 * Enqueue scripts
	 * 
	 * @param     string        $handle      Script name
	 * @param     string        $src         Script url
	 * @param     array         $deps        (optional) Array of script names on which this script depends
	 * @param     string|bool   $ver         (optional) Script version (used for cache busting), set to null to disable
	 * @param     bool          $in_footer   (optional) Whether to enqueue the script before </head> or before </body>
	 *
	 * @link https://codex.wordpress.org/Function_Reference/wp_enqueue_script
	 *
	 * wp_enqueue_script( string $handle, string $src = '', array $deps = array(), string|bool|null $ver = false, bool $in_footer = false )
	 * 
	 */
	
	// Deregister the jquery version bundled with WordPress.
	wp_deregister_script( 'jquery' );

	// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
	wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js', array(), '2.1.0', false );


	// Add the comment-reply library on pages where it is necessary
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	}
	add_action( 'wp_enqueue_scripts', 'ELECTRON_THEME_SLUG_NAME_scripts' );
endif;