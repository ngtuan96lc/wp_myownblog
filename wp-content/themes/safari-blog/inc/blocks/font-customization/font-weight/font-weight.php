<?php

add_action( 'customize_register', 'safari_blog_font_weight' );
function safari_blog_font_weight( $wp_customize ) {

    $wp_customize->add_setting( 'font_weight', array(
        'default'     => safari_blog_get_default_font_weight(),
        'transport'   => 'postMessage',
        'sanitize_callback' => 'absint'
    ) );

    $wp_customize->add_control( 'font_weight', array(
        'type'        => 'number',
        'settings'    => 'font_weight',
        'label'       =>  esc_html__( 'Body Font Weight', 'safari-blog' ),
        'section'     => 'safari_blog_font_customization_section',
        'input_attrs' => array(
            'min' => 100,
            'max' => 900,
            'step' => 100
        )
    ) );

}

add_action( 'customize_preview_init', 'safari_blog_font_weight_enqueue_scripts' );
function safari_blog_font_weight_enqueue_scripts() {
    wp_enqueue_script( 'graphthemes-font-weight-customizer', get_template_directory_uri() . '/inc/blocks/font-customization/font-weight/customizer-font-weight.js', array('jquery'), '', true );
}


add_action( 'wp_enqueue_scripts', 'safari_blog_font_weight_dynamic_css' );
function safari_blog_font_weight_dynamic_css() {

    $font_weight = esc_attr( get_theme_mod( 'font_weight', safari_blog_get_default_font_weight() ) );

    $dynamic_css = ":root { --font-weight: $font_weight; }";

    wp_add_inline_style( 'safari-blog', $dynamic_css );
}