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
    add_theme_support( 'post-thumbnails' );
    add_theme_support( "post-formats", array("aside","gallery","link","image","quote","status","video","audio","chat") );
    register_nav_menu( "topmenu", __("Top Menu", "wpproject") );
    register_nav_menu( "footermenu", __("Footer Menu", "wpproject") );
}
add_action( "after_setup_theme", "wpproject_bootstraping");

function wpproject_assets() {
    
    if(is_page() || is_front_page() || is_single( )){
        $template_name = basename(get_page_template());
        if($template_name == "launcher.php"){
            wp_enqueue_style( "launcher-google-fonts", "//fonts.googleapis.com/css?family=Open+Sans:400,700,800");
            wp_enqueue_style( "animate-css", get_theme_file_uri( "/assets/css/animate.css" ), null,VERSION);
            wp_enqueue_style( "icomoon-css", get_theme_file_uri( "/assets/css/icomoon.css" ), null,VERSION);
            wp_enqueue_style( "bootstrap", get_theme_file_uri( "/assets/css/bootstrap.min.css" ), null,VERSION);
            wp_enqueue_style( "launcher-style", get_theme_file_uri( "/assets/css/style.css" ), null,VERSION);
            wp_enqueue_style( "style-css", get_stylesheet_uri() );
            
            wp_enqueue_script("jquery-easing", get_theme_file_uri("/assets/js/jquery.easing.1.3.js"), array("jquery"), VERSION, true );
            wp_enqueue_script("jquery-bootstrap", get_theme_file_uri("/assets/js/bootstrap.min.js"), array("jquery"), VERSION, true );
            wp_enqueue_script("jquery-waypoints", get_theme_file_uri("/assets/js/jquery.waypoints.min.js"), array("jquery"), VERSION, true );
            wp_enqueue_script("jquery-simplyCountdown", get_theme_file_uri("/assets/js/simplyCountdown.js"), array("jquery"), VERSION, true );
            wp_enqueue_script("launcher-main", get_theme_file_uri("/assets/js/template-main.js"), array("jquery"), VERSION, true );

            $wpproject_year = get_post_meta( get_the_ID(), "year", true );
            $wpproject_month = get_post_meta( get_the_ID(), "month", true );
            $wpproject_day = get_post_meta( get_the_ID(), "day", true );

            wp_localize_script( "launcher-main", "datedata", array(
                "year" => $wpproject_year,
                "month" => $wpproject_month,
                "day" => $wpproject_day,
            ) );
            
        }else{
            wp_enqueue_style( "google-fonts", "//fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Lobster&display=swap");
            wp_enqueue_style( "fontawesome", "//use.fontawesome.com/releases/v5.15.3/css/all.css");
            wp_enqueue_style( "bootstrap", get_theme_file_uri( "/assets/css/bootstrap.min.css" ), null,VERSION);
            wp_enqueue_style( "slicknav-css", get_theme_file_uri( "/assets/css/slicknav.min.css" ), null, VERSION);
            wp_enqueue_style( "dashicons");
            wp_enqueue_style( "main-css", get_theme_file_uri( "/assets/css/main.css" ), null, VERSION);
            wp_enqueue_style( "style-css", get_stylesheet_uri() );
        
            wp_enqueue_script("slicknav-js", get_theme_file_uri("/assets/js/jquery.slicknav.min.js"), array("jquery"), VERSION, true );
            wp_enqueue_script("main-js", get_theme_file_uri("/assets/js/main.js"), array("jquery"), VERSION, true );
        }

    }

    

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
function wpproject_temp_widget(){
        register_sidebar( array(
            'name'          => __( 'Main Sidebar', 'wpproject' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'wpproject' ),
            'before_widget' => '<div id="%1s" class="widget %2s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widgettitle">',
            'after_title'   => '</h4>',
        ) ); 
        register_sidebar( array(
            'name'          => __( 'Footer One', 'wpproject' ),
            'id'            => 'footer-1',
            'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'wpproject' ),
            'before_widget' => '<div id="%1s" class="widget %2s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widgettitle">',
            'after_title'   => '</h4>',
        ) );        
        register_sidebar( array(
            'name'          => __( 'Footer Two', 'wpproject' ),
            'id'            => 'footer-2',
            'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'wpproject' ),
            'before_widget' => '<div id="%1s" class="widget %2s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widgettitle">',
            'after_title'   => '</h4>',
        ) );        
        register_sidebar( array(
            'name'          => __( 'Footer Three', 'wpproject' ),
            'id'            => 'footer-3',
            'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'wpproject' ),
            'before_widget' => '<div id="%1s" class="widget %2s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widgettitle">',
            'after_title'   => '</h4>',
        ) );        
        register_sidebar( array(
            'name'          => __( 'Footer Four', 'wpproject' ),
            'id'            => 'footer-4',
            'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'wpproject' ),
            'before_widget' => '<div id="%1s" class="widget %2s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widgettitle">',
            'after_title'   => '</h4>',
        ) );
}
add_action( "widgets_init", "wpproject_temp_widget");