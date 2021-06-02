<?php 

function first_theme(){

	load_theme_textdomain("my first theme");
	add_theme_support("tiyle-tag");

}
add_action( "aftar_setup_theme,first_theme");


function all_link() {
    wp_enqueue_style( 'style-css', get_stylesheet_uri() );
        wp_enqueue_style( "bootstrap", get_theme_file_uri( "mini file/bootstrap.min.css" ), null,time());
    wp_enqueue_style( "main-css", get_theme_file_uri( "mini file/main.css" ), null, time());
    wp_enqueue_script( 'main-js', get_theme_file_uri("js/main.js"), array("jquery"), time(), true );
}
add_action("wp_enqueue_script","all_link");




 ?>