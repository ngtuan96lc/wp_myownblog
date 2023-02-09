<?php

add_action( 'customize_register', 'safari_blog_customizer_theme_info' );

function safari_blog_customizer_theme_info( $wp_customize ) {
	
    $wp_customize->add_section( 'safari_blog_theme_info_section' , array(
		'title'       => esc_html__( '❂ Theme Info' , 'safari-blog' ),
		'priority' => 2
	) );
    

	$wp_customize->add_setting( 'theme_info', array(
		'default' => '',
		'sanitize_callback' => 'wp_kses_post',
	) );
    
    $theme_info = '';
	
	$theme_info .= '<span class="sticky_info_row wp-clearfix"><label class="row-element">' . esc_html__( 'Theme Details', 'safari-blog' ) . ': </label><a class="button alignright" href="' . esc_url( 'https://graphthemes.com/safari/' ) . '" target="_blank">' . esc_html__( 'Click Here', 'safari-blog' ) . '</a></span><hr>';

	$theme_info .= '<span class="sticky_info_row wp-clearfix"><label class="row-element">' . esc_html__( 'How to use', 'safari-blog' ) . ': </label><a class="button alignright" href="' . esc_url( 'https://graphthemes.com/theme-docs/safari/' ) . '" target="_blank">' . esc_html__( 'Click Here', 'safari-blog' ) . '</a></span><hr>';
	$theme_info .= '<span class="sticky_info_row wp-clearfix"><label class="row-element">' . esc_html__( 'View Demo', 'safari-blog' ) . ': </label><a class="button alignright" href="' . esc_url( 'https://graphthemes.com/preview/?product_id=safari' ) . '" target="_blank">' . esc_html__( 'Click Here', 'safari-blog' ) . '</a></span><hr>';
	$theme_info .= '<span class="sticky_info_row wp-clearfix"><label class="row-element">' . esc_html__( 'Support Forum', 'safari-blog' ) . ': </label><a class="button alignright" href="' . esc_url( 'https://wordpress.org/support/theme/safari' ) . '" target="_blank">' . esc_html__( 'Click Here', 'safari-blog' ) . '</a></span><hr>';

	$wp_customize->add_control( new Safari_Blog_Custom_Text( $wp_customize ,'theme_info',array(
		'section' => 'safari_blog_theme_info_section',
		'label' => $theme_info
	) ) );

}