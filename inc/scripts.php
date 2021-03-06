<?php

/**
 * Register Google font.
 */
function reachsupply_font_url() {

	$fonts_url = '';

	/*
	* Translators: If there are characters in your language that are not
	* supported by the following, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$roboto = _x( 'off', 'Roboto font: on or off', 'reachsupply' );
	$open_sans = _x( 'off', 'Open Sans font: on or off', 'reachsupply' );

	if ( 'off' !== $roboto || 'off' !== $open_sans ) {
		$font_families = array();

		if ( 'off' !== $roboto ) {
			$font_families[] = 'Roboto:400,700';
		}

		if ( 'off' !== $open_sans ) {
			$font_families[] = 'Open Sans:400,300,700';
		}

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );
	}

	return $fonts_url;
}


/**
 * Enqueue scripts and styles.
 */
function reachsupply_scripts() {
	/**
	 * If WP is in script debug, or we pass ?script_debug in a URL - set debug to true.
	 */
	$debug = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG == true ) || ( isset( $_GET['script_debug'] ) ) ? true : false;

	/**
	 * If we are debugging the site, use a unique version every page load so as to ensure no cache issues
	 */
	$version = '1.0.0';
	$fa_version = '4.3.0';

	/**
	 * Should we load minified scripts? Also enqueue live reload to allow for extensionless reloading.
	 */
	$suffix = '.min';
	if( true === $debug ) {

		$suffix = '';
		$version = time();
		wp_enqueue_script( 'live-reload', '//localhost:35729/livereload.js', array(), $version, true );

	}

	wp_deregister_style( 'font-awesome' );
	wp_register_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/' . $fa_version . '/css/font-awesome.min.css', array(), $fa_version );

	wp_enqueue_style( 'font-awesome' );
	wp_enqueue_style( 'reachsupply-google-font', reachsupply_font_url(), array(), null );
	wp_enqueue_style( 'reachsupply-style', get_stylesheet_directory_uri() . '/style' . $suffix . '.css', array(), $version );

	wp_enqueue_script( 'reachsupply-project', get_template_directory_uri() . '/js/project' . $suffix . '.js', array( 'jquery' ), $version, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'reachsupply_scripts' );
