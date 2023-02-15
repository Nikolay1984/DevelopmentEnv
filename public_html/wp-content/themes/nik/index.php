<?php

get_header();

if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
		the_post();
//		echo '<br>';
//		echo 'лфд ';
//////		echo '<plaintext>';
////		echo( $post->post_title );
////		echo '<br>';
////		the_content();
////		echo '<br>';
//////		die();
//		the_title( '<h1>', '</h1>' );
//		the_shortlink("да ну нах");
////		the_content();

		if ( is_home() ) {
			echo 'is home';
		} elseif ( is_front_page() ) {
			echo 'front page';
		} elseif ( is_single() ) {
			echo 'is single';
		}


	}


}
//get_sidebar();
//get_search_form();
get_template_part( 'bla');
get_footer();