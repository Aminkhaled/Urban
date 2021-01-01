<?php
function second_slider_theme_customizer( $wp_customize ){

    /*
     * Failsafe is safe
     */
    if ( ! isset( $wp_customize ) ) {
        return;
    }

    /**
     * Add 'Home Top' Section.
     */
    $wp_customize->add_section(
    // $id
        'sk_section_home_top',
        // $args
        array(
            'title'			=> __( 'Slider 2', 'theme-slug' ),
            // 'description'	=> __( 'Some description for the options in the Home Top section', 'theme-slug' ),
            'active_callback' => 'is_front_page',
        )
    );



    $wp_customize->add_setting(
    // $id
        'second_slider_background_image',
        // $args
        array(
            'sanitize_callback'	=> 'esc_url_raw',
            'transport'		=> 'postMessage'
        )
    );

    /**
     * Add 'Home Top Background Image' image upload Control.
     */
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
        // $wp_customize object
            $wp_customize,
            // $id
            'second_slider_background_image',
            // $args
            array(
                'settings'		=> 'second_slider_background_image',
                'section'		=> 'sk_section_home_top',
                'label'			=> __( 'slider Background Image 2', 'shamii' ),
                'description'	=> __( 'Select the image to be in background image of the slider.', 'shamii' )
            )
        )
    );


}

// Settings API options initilization and validation.
add_action( 'customize_register', 'second_slider_theme_customizer' );
