<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
		the_post();
		echo '<br>';
		echo 'bla ';
//		echo( $post->post_title );
//		echo '<br>';
//		the_content();
//		echo '<br>';
////		die();
		the_title( '<h1>', '</h1>' );

	}


}

get_footer();
