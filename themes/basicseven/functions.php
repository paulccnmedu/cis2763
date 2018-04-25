<?php
//First test if the function is already defined since we cannot have two functions
//with the same name. Functions defined in a theme may be re-defined in a child theme.
//child themes are the upgrade-safe way to extend themes.

if ( ! function_exists( 'intro_enqueue_style_function' ) ) {
	//die('A intro_enqueue_style_function');
	function intro_enqueue_style_function() {
		//die('B intro_enqueue_style_function');
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
/////////////////////////////////////////////////////////////////////
////////////////// Register Menus //////////////////////////////////
// This function will add a menu link in the dashboard. 
// You will need to add code to the template files to display the menu on the front end
// https://codex.wordpress.org/Function_Reference/register_nav_menu
add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'primary-menu',  'Primary Menu' );
}
/////////////////////////////////////////////////////////////////////
////////////////// Register Sidebar //////////////////////////////////
// This function will add a menu link in the dashboard. 
// You will need to add code to the template files to display the sidebar on the front end
//https://codex.wordpress.org/Function_Reference/register_sidebar
add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'theme-slug' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
}

