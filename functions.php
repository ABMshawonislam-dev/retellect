<?php

function retellect_script_enqueue(){
	wp_enqueue_style( "bootstrap-css", get_template_directory_uri() . "/assets/css/bootstrap.min.css", array(),"1.0.0", "all" );
	wp_enqueue_script( "bootstrap-js", get_template_directory_uri() . "/assets/js/bootstrap.bundle.min.js", array("jquery"),"1.0.0",true);
}

add_action( "wp_enqueue_scripts","retellect_script_enqueue");

function retellect_theme_setup(){
	// add_theme_support("menus");
	register_nav_menu( "primary", "Primary Menu" );
}

add_action("init","retellect_theme_setup");

require get_template_directory() . "/inc/walker.php";