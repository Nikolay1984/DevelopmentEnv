<?php

get_header();

if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
		the_post();
////		echo '<plaintext>';
//		echo( $post->post_title );
//		echo '<br>';
//		the_content();
//		echo '<br>';
////		die();
		the_title( '<h1>', '</h1>' );
		the_content();




	}


}

get_footer();