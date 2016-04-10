<?php 
remove_action('wp_head', 'wp_generator'); // remove wordpress version
remove_action('wp_head', 'rsd_link'); // remove really simple discovery link
remove_action('wp_head', 'wlwmanifest_link'); // remove wlwmanifest.xml (needed to support windows live writer)

// remove Open Sans font
/*add_action( 'wp_enqueue_scripts', 'my_deregister_styles', 100 );
function my_deregister_styles() {
	wp_deregister_style( 'open-sans' );
}
*/

show_admin_bar(false);

//remove Emoji
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

//LOGO widget
function logo_widget_init() {
	register_sidebar( array(
		'name'          => 'Логотип SVG',
		'id'            => 'logo',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
add_action( 'widgets_init', 'logo_widget_init' );

//+theme option color
require_once(get_stylesheet_directory() . '/theme-options.php');

//+thumbnails
add_theme_support('post-thumbnails');