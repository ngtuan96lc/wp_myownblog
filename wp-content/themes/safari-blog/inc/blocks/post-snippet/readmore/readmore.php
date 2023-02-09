<?php

add_action( 'customize_register', 'safari_blog_post_snippet_readmore' );
function safari_blog_post_snippet_readmore( $wp_customize ) {

	$wp_customize->add_setting( 'post_snippet_hide_show_readmore', array(
        'sanitize_callback'     =>  'safari_blog_sanitize_checkbox',
        'default'               =>  safari_blog_get_default_post_snippet_show_hide_read_more()
    ) );

    $wp_customize->add_control( new Graphthemes_Toggle_Control( $wp_customize, 'post_snippet_hide_show_readmore', array(
        'label' => esc_html__( 'Show/Hide Read More','safari-blog' ),
        'section' => 'safari_blog_post_snippet_customization_section',
        'settings' => 'post_snippet_hide_show_readmore',
        'type'=> 'toggle',
    ) ) );

}


add_action( 'customize_register', 'safari_blog_post_snippet_readmore_text' );
function safari_blog_post_snippet_readmore_text( $wp_customize ) {

    $wp_customize->add_setting( 'post_snippet_readmore_text', array(
        'sanitize_callback'     =>  'sanitize_text_field',
        'default'               =>  safari_blog_get_default_post_snippet_read_more_text()
    ) );

    $wp_customize->add_control( 'post_snippet_readmore_text', array(
        'settings' => 'post_snippet_readmore_text',
        'type' => 'text',
        'section' => 'safari_blog_post_snippet_customization_section',
        'label' => esc_html__( 'Read More Text', 'safari-blog' ),
        'active_callback' => function() {
            return get_theme_mod( 'post_snippet_hide_show_readmore', safari_blog_get_default_post_snippet_show_hide_read_more() );
        }      
    ) );

}