<?php
    /**
     *
     * Customize logo height and width
     *
     */

    /* Logo Height */   
    $wp_customize->add_setting( 'custom_logo_height',
        array(
            'default' => '70',
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field',
        ));
    $wp_customize->add_control( 'custom_logo_height',
        array(
            'label' => __( 'Logo Height', 'fortitude' ),
            'section' => 'title_tagline',
            'type' => 'range',
            'input_attrs' => array(
                'min' => 10,
                'max' => 500,
                'step' => 2,
              ),
            'priority'=> 8
        ));
        /* Logo Width */   
    $wp_customize->add_setting( 'custom_logo_width',
        array(
            'default' => '180',
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field',
        ));
    $wp_customize->add_control( 'custom_logo_width',
        array(
            'label' => __( 'Logo Width', 'fortitude' ),
            'section' => 'title_tagline',
            'type' => 'range',
            'input_attrs' => array(
                'min' => 10,
                'max' => 500,
                'step' => 2,
              ),
            'priority'=> 9
        ));