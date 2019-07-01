<?php
        $wp_customize->add_section(
        'service2_section',
        array(
            'title' => __( 'Service 2','fortitude' ),
            'panel'=>'front_page_settings',
            'capability'=>'edit_theme_options',
            'priority'   => 2
        )
    );
        /* Title */  
    $wp_customize->add_setting( 'service2_title',
        array(
            'default' => __( 'Creative Designer','fortitude' ),
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field',
        ));
    $wp_customize->add_control( 'service2_title',
        array(
            'label' => __( 'Title', 'fortitude' ),
            'section' => 'service2_section',
            'type' => 'text',
        ));

        /* Description */  
    $wp_customize->add_setting( 'service2_desc',
        array(
            'default' =>  __( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 2500s','fortitude' ),
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field',
        ));
    $wp_customize->add_control( 'service2_desc',
        array(
            'label' => __( 'Description', 'fortitude' ),
            'section' => 'service2_section',
            'type' => 'text',
        ));

        /* Icon */  
    $wp_customize->add_setting( 'service2_icon',
        array(
            'default' =>  'fa fa-camera-retro',
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field',
        ));
    $wp_customize->add_control( 'service2_icon',
        array(
            'label' => __( 'FontAwesome 4.7 Icon', 'fortitude' ),
            'section' => 'service2_section',
            'type' => 'text',
        ));

        /* URL */
    $wp_customize->add_setting( 'service2_url',
        array(
            'default' => '#',
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_url',
        ));
    $wp_customize->add_control( 'service2_url',
        array(
            'label' => __( 'Service Link', 'fortitude' ),
            'section' => 'service2_section',
            'type' => 'url',
        ));