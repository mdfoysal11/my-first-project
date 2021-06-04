<?php
if(site_url() == "http://demo.lwhh.com"){
    define("VERSION", time());
}else{
    define("VERSION", wp_get_theme() -> get("Version"));
}

function wpproject_bootstraping()
{
	load_theme_textdomain("wpproject");
	add_theme_support( "title-tag");
    register_nav_menu( "topmenu", __("Top Menu", "wpproject") );
    register_nav_menu( "footermenu", __("Footer Menu", "wpproject") );
}
add_action( "after_setup_theme", "wpproject_bootstraping");

function wpproject_assets() {
    wp_enqueue_style( "bootstrap", get_theme_file_uri( "/assets/css/bootstrap.min.css" ), null,VERSION);
    wp_enqueue_style( "main-css", get_theme_file_uri( "/assets/css/main.css" ), null, VERSION);
    wp_enqueue_style( "style-css", get_stylesheet_uri() );
    
    wp_enqueue_script("main-js", get_theme_file_uri("/assets/js/main.js"), array("jquery"), VERSION, true );
}
add_action("wp_enqueue_scripts","wpproject_assets");
