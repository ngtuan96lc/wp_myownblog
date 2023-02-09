<?php

add_action( 'customize_register', 'safari_blog_secondary_font_family' );
function safari_blog_secondary_font_family( $wp_customize ) {

    $wp_customize->add_setting( 'secondary_font_family', array(
        'default'     => safari_blog_get_default_secondary_font_family(),
        'transport'   => 'postMessage',
        'sanitize_callback' => 'safari_blog_sanitize_google_fonts'
    ) );

    $wp_customize->add_control( 'secondary_font_family', array(
        'settings'    => 'secondary_font_family',
        'label'       =>  esc_html__( 'Secondary Font', 'safari-blog' ),
        'section'     => 'safari_blog_font_customization_section',
        'type'        => 'select',
        'choices'     => safari_blog_google_fonts( safari_blog_free_pro() ),
    ) );

}


add_action( 'customize_preview_init', 'safari_blog_secondary_font_family_enqueue_scripts' );
function safari_blog_secondary_font_family_enqueue_scripts() {

    $secondary_font_family = esc_attr( get_theme_mod( 'secondary_font_family', safari_blog_get_default_secondary_font_family() ) );


    wp_enqueue_script( 'graphthemes-secondary-font-family-customizer', get_template_directory_uri() . '/inc/blocks/font-family/secondary/customizer-secondary-font-family.js', array('jquery'), '', true );
}


add_action( 'wp_enqueue_scripts', 'safari_blog_secondary_font_family_dynamic_css' );
function safari_blog_secondary_font_family_dynamic_css() {

    $secondary_font_family = esc_attr( get_theme_mod( 'secondary_font_family', safari_blog_get_default_secondary_font_family() ) );


    $dynamic_css = ":root { --secondary-font: $secondary_font_family; }";

    wp_add_inline_style( 'safari-blog', $dynamic_css );
}