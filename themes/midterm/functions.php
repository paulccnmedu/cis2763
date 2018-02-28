<?php
function midterm_scripts() {

	// Theme stylesheet.
	wp_register_style( 'midterm-style', get_stylesheet_uri() );
	wp_enqueue_style( 'midterm-style');
}
add_action( 'wp_enqueue_scripts', 'midterm_scripts' );

/// Register Sidebar
function midterm_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'theme_name' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );
 
    register_sidebar( array(
        'name'          => __( 'Secondary Sidebar', 'theme_name' ),
        'id'            => 'sidebar-2',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'midterm_widgets_init' );
