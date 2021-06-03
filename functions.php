<?php
if(site_url() == "http://demo.lwhh.com"){
    define("VERSION", time());
}else{
    define("VERSION", wp_get_theme() -> get("Version"));
}

function first_theme()
{
	load_theme_textdomain("wpproject");
	add_theme_support("tiyle-tag");
}
add_action( "aftar_setup_theme", "first_theme");

function all_link() {
    wp_enqueue_style( "bootstrap", get_theme_file_uri( "/assets/css/bootstrap.min.css" ), null,VERSION);
    wp_enqueue_style( "main-css", get_theme_file_uri( "/assets/css/main.css" ), null, VERSION);
    wp_enqueue_script("main-js", get_theme_file_uri("/assets/js/main.js"), array("jquery"), VERSION, true );
    wp_enqueue_style( "style-css", get_stylesheet_uri() );
}
add_action("wp_enqueue_scripts","all_link");
