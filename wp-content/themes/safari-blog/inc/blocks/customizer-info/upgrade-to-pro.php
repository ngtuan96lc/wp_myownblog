<?php

function safari_blog_customizer_upgrade_to_pro( $wp_customize ) {

	$wp_customize->add_section( new Safari_Blog_Button_Control( $wp_customize, 'upgrade-to-pro',	array(
		'title'    => esc_html__( '★ Safari Pro ', 'safari-blog' ),
		'type'	=> 'button',
		'pro_text' => esc_html__( 'Upgrade to Pro', 'safari-blog' ),
		'pro_url'  => esc_url( 'https://graphthemes.com/safari/' ),
		'priority' => 1
	) )	);

	
}
add_action( 'customize_register', 'safari_blog_customizer_upgrade_to_pro' );


function safari_blog_enqueue_custom_admin_style() {
        wp_register_style( 'safari-button', get_template_directory_uri() . '/inc/blocks/includes/button/button.css', false );
        wp_enqueue_style( 'safari-button' );

        wp_enqueue_script( 'safari-button', get_template_directory_uri() . '/inc/blocks/includes/button/button.js', array( 'jquery' ), false, true );
}
add_action( 'admin_enqueue_scripts', 'safari_blog_enqueue_custom_admin_style' );