<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */

if ( ! isset( $wp_did_header ) ) {

	$wp_did_header = true;

	// Load the WordPress library.
	require_once __DIR__ . '/wp-load.php';



	// Set up the WordPress query.
	wp();


	function blabla(){
		return 'test_nik';
	}



	add_filter( 'test_nik', 'blabla');


	// Load the theme template.
	require_once ABSPATH . WPINC . '/template-loader.php';

}
