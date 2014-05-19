<?php

function minti_scripts_basic() {  
	
	/* ------------------------------------------------------------------------ */
	/* Register Scripts */
	/* ------------------------------------------------------------------------ */
	
	//wp_register_script('functions', get_template_directory_uri() . '/framework/js/functions.js', 'jquery', '1.0', TRUE);
	wp_register_script('shortcodes', get_template_directory_uri() . '/framework/js/shortcodes.js', 'jquery', '1.0', TRUE);
	wp_register_script('bootstrap', get_template_directory_uri() . '/framework/js/bootstrap.js', 'jquery', '1.0', TRUE);
	
	/* ------------------------------------------------------------------------ */
	/* Enqueue Scripts */
	/* ------------------------------------------------------------------------ */
	
	wp_enqueue_script('shortcodes');
	wp_enqueue_script('bootstrap');
  	
  	//wp_enqueue_script('functions');

}

add_action( 'wp_enqueue_scripts', 'minti_scripts_basic' );  

function minti_styles_basic()  
{  
	
	/* ------------------------------------------------------------------------ */
	/* Register Stylesheets */
	/* ------------------------------------------------------------------------ */
	wp_register_style( 'bootstrap', get_template_directory_uri() . '/framework/css/bootstrap.css', array(), '1', 'all' );
	wp_register_style( 'shortcodes', get_template_directory_uri() . '/framework/css/shortcodes.css', array(), '1', 'all' );
	

	wp_register_style( 'retina', get_template_directory_uri() . '/framework/css/retina.css', array(), '1', 'only screen and (-webkit-min-device-pixel-ratio: 2)' );
	//wp_register_style( 'skeleton', get_template_directory_uri() . '/framework/css/skeleton.css', array(), '1', 'all' );
	//wp_register_style( 'responsive', get_template_directory_uri() . '/framework/css/responsive.css', array(), '1', 'all' );
	
	/* ------------------------------------------------------------------------ */
	/* Enqueue Stylesheets */
	/* ------------------------------------------------------------------------ */

	//wp_enqueue_style( 'basic' ); 
	wp_enqueue_style( 'bootstrap' ); 
	wp_enqueue_style( 'shortcodes' ); 
	
	//wp_enqueue_style( 'stylesheet', get_stylesheet_uri(), array(), '1', 'all' ); // Main Stylesheet
	
	wp_enqueue_style( 'retina' ); 
	
	
}  
add_action( 'wp_enqueue_scripts', 'minti_styles_basic', 1 ); 

?>