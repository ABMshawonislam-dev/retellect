<?php

function retellect_script_enqueue(){
	wp_enqueue_style( "fontawsome", get_template_directory_uri() . "/assets/css/all.min.css", array(),"1.0.0", "all" );
	wp_enqueue_style( "style", get_template_directory_uri() . "/assets/css/style.css", array(),"1.0.0", "all" );
	wp_enqueue_style( "googlefonts",'https://fonts.googleapis.com/css?family=Abril+Fatface|Ubuntu:300,400,500,600,700', "all" );
	wp_enqueue_style( "bootstrap-css", get_template_directory_uri() . "/assets/css/bootstrap.min.css", array(),"1.0.0", "all" );
	wp_enqueue_script( "bootstrap-js", get_template_directory_uri() . "/assets/js/bootstrap.bundle.min.js", array("jquery"),"1.0.0",true);
	
}

add_action( "wp_enqueue_scripts","retellect_script_enqueue");

function retellect_theme_setup(){
	add_theme_support("menus");
	register_nav_menu( "primary", "Primary Menu" );
}

add_action("init","retellect_theme_setup");

function retellect_custom_logo_setup() {
 $defaults = array(
 "height"      => 100,
 "width"       => 400,
 "flex-height" => true,
 "flex-width"  => true,
 );
 add_theme_support( "custom-logo", $defaults );
 add_theme_support( 'post-thumbnails' ); 
}
add_action( "after_setup_theme", "retellect_custom_logo_setup" );



require get_template_directory() . "/inc/walker.php";
require get_template_directory() . "/inc/customizer.php";
add_action( 'customize_register', 'retellect_customize_register' );