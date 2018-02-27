<?php
function midterm_scripts() {

	// Theme stylesheet.
	wp_register_style( 'midterm-style', get_stylesheet_uri() );
	wp_enqueue_style( 'midterm-style');
}
add_action( 'wp_enqueue_scripts', 'midterm_scripts' );

