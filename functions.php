<?php

add_theme_support( 'post-thumbnails' );
show_admin_bar( false );

register_sidebar(array('name' => 'Sidebar'));


define("THEME_DIR", get_template_directory_uri());

/*--- REMOVE GENERATOR META TAG ---*/
remove_action('wp_head', 'wp_generator');

// ENQUEUE STYLES

function enqueue_styles() {
	wp_register_style( 'screen-style', THEME_DIR . '/style.css', array(), '1', 'all' );
	wp_enqueue_style( 'screen-style' );

}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );

// ENQUEUE SCRIPTS

function enqueue_scripts() {

	/** REGISTER HTML5 Shim
	 wp_register_script( 'html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js', array( 'jquery' ), '1', false );
	 wp_enqueue_script( 'html5-shim' ); **/

	/** REGISTER HTML5 OtherScript.js
	 wp_register_script( 'custom-script', THEME_DIR . '/js_path/customscript.js', array( 'jquery' ), '1', false );
	 wp_enqueue_script( 'custom-script' ); **/

}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

function register_my_menu() {
	register_nav_menu('header',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

?>