<?php

add_action( 'customize_register', 'safari_blog_sticky_menu' );
function safari_blog_sticky_menu( $wp_customize ) {

	$wp_customize->add_setting('safari_blog_sticky_menu_option', array(
        'sanitize_callback'     =>  'safari_blog_sanitize_checkbox',
        'default'               =>  safari_blog_get_default_sticky_menu(),
    ));

    $wp_customize->add_control(new Graphthemes_Toggle_Control($wp_customize, 'safari_blog_sticky_menu_option', array(
        'label' => esc_html__('Enable Sticky Menu', 'safari-blog'),
        'section' => 'safari_blog_general_customization_section',
        'settings' => 'safari_blog_sticky_menu_option',
        'type' => 'toggle',
    )));

}