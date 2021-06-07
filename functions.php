<?php
if(site_url() == "http://demo.themedev.com"){
    define("VERSION", time());
}else{
    define("VERSION", wp_get_theme() -> get("Version"));
}

function wpproject_bootstraping()
{
	load_theme_textdomain("wpproject");
	add_theme_support( "title-tag");
    add_theme_support( 'post-thumbnails' );
    register_nav_menu( "topmenu", __("Top Menu", "wpproject") );
    register_nav_menu( "footermenu", __("Footer Menu", "wpproject") );
}
add_action( "after_setup_theme", "wpproject_bootstraping");

function wpproject_assets() {
    wp_enqueue_style( "google-fonts", "//fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Lobster&display=swap");
    wp_enqueue_style( "fontawesome", "//use.fontawesome.com/releases/v5.15.3/css/all.css");
    wp_enqueue_style( "bootstrap", get_theme_file_uri( "/assets/css/bootstrap.min.css" ), null,VERSION);
    wp_enqueue_style( "slicknav-css", get_theme_file_uri( "/assets/css/slicknav.min.css" ), null, VERSION);
    wp_enqueue_style( "main-css", get_theme_file_uri( "/assets/css/main.css" ), null, VERSION);
    wp_enqueue_style( "style-css", get_stylesheet_uri() );
    
    wp_enqueue_script("slicknav-js", get_theme_file_uri("/assets/js/jquery.slicknav.min.js"), array("jquery"), VERSION, true );
    wp_enqueue_script("main-js", get_theme_file_uri("/assets/js/main.js"), array("jquery"), VERSION, true );
}
add_action("wp_enqueue_scripts","wpproject_assets");

function wpproject_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'wpproject_excerpt_length', 999);

function wpproject_excerpt_more( $more ) {
    return '<a class="read-more" href="'.get_the_permalink().'" rel="nofollow"> More</a>';
}
add_filter( 'excerpt_more', 'wpproject_excerpt_more' );