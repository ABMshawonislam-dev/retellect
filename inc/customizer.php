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

}