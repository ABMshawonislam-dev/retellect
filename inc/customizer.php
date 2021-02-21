<?php 
function retellect_customize_register( $wp_customize ) {
  $wp_customize->add_section( 'retellect_footer_section', array(
  'title' => __( 'Footer' ),
  'description' => __( 'Add custom CSS here' ),
  'priority' => 160,
) );
  $wp_customize->add_setting( 'retellect_footer_color_setting', array(
  'default' => '#f72525',
  'sanitize_callback' => 'sanitize_hex_color',
) );

 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
	'label'      => __( 'Footer Background', 'retellect' ),
	'section'    => 'retellect_footer_section',
	'settings'   => 'retellect_footer_color_setting',
) ) );


 $wp_customize->add_setting( 'retellect_footer_text_setting', array(
  'default' => 'Copyright 2019. All rights reserved by DESIGNER.',
  'sanitize_callback' => 'wp_filter_nohtml_kses',
) );

$wp_customize->add_control( 'retellect_footer_text', array(
	'label'      => __( 'Copy Right Text', 'retellect' ),
	'section'    => 'retellect_footer_section',
	'settings'   => 'retellect_footer_text_setting',
	'type' => "text",
) );

 $wp_customize->add_section( 'retellect_breadcrumb_section', array(
  'title' => __( 'Breadcrumb' ),
  'description' => __( 'Add Bradcrumb background here' ),
  'priority' => 140,
) );

 $wp_customize->add_setting( 'retellect_breadcrumb_setting', array(
  'default' => '#2d3e50',
  'sanitize_callback' => 'sanitize_hex_color',
) );

 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'breadcrumb_bg', array(
	'label'      => __( 'Breadcrumb Background', 'retellect' ),
	'section'    => 'retellect_breadcrumb_section',
	'settings'   => 'retellect_breadcrumb_setting',
) ) );

}