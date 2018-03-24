<?php

//First test if the function is already defined since we cannot have two functions
//with the same name. Functions defined in a theme may be re-defined in a child theme.
//child themes are the upgrade-safe way to extend themes.
if ( ! function_exists( 'intro_enqueue_style_function' ) ) {
	function intro_enqueue_style_function() {
		//Theme stylesheet.
		//Two steps to register and then enqueue enable de-registering in a child theme 
		//Excessivley upgrade safe for the main stylesheet but considered a
		//best practice for additional style sheets and espceially for script files
		wp_register_style( 'my-style', get_stylesheet_uri() );
		wp_enqueue_style( 'my-style');
	}
}
//the function will be activated when the WordPress core executes the code for   
//the hook do_action('wp_enqueue_scripts')
//hooks are the coordination between the WordPress core and 
//third party code in themes and functions
add_action( 'wp_enqueue_scripts', 'intro_enqueue_style_function');
