<?php
/**
* Thene Functions
*
* @package Malin
*/






function my_scripts_enqueue() {
    wp_register_script( 'bootstrap-js', '://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js', array('jquery'), NULL, true );
   
	wp_register_style( 'bootstrap-css', '://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css', false, NULL, 'all' );
    
	
	wp_enqueue_script( 'bootstrap-js' );
    wp_enqueue_style( 'bootstrap-css' );
}
add_action( 'wp_enqueue_scripts', 'my_scripts_enqueue' );

function malin_enqueue_scripts(){
//wp_enqueue_style('main-css',get_template_directory_uri().'/main.css',['style']);
	//wp_enqueue_style('style-css',get_stylesheet_uri(), [], filemtime(get_template_directory() .'/style.css'), 'all');
	//wp_enqueue_script('main-js',get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() .'/assets/main.js'), true );

	//Register Style
	wp_register_style('style-css',get_stylesheet_uri(), [], filemtime(get_template_directory() .'/style.css'), 'all');
	
	
	//Register Script
	wp_register_script('main-js',get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() .'/assets/main.js'), true );
	

	//Enqueue Scripts
	wp_enqueue_style('style-css');
	wp_enqueue_script('main-js');


}
add_action('wp_enqueue_scripts','malin_enqueue_scripts');

?>