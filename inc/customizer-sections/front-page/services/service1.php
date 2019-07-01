<?php
        $wp_customize->add_section(
        'service1_section',
        array(
            'title' => __( 'Service 1','fortitude' ),
            'panel'=>'front_page_settings',
            'capability'=>'edit_theme_options',
            'priority'   => 1
        )
    );
        /* Title */  
    $wp_customize->add_setting( 'service1_title',
        array(
            'default' => __( 'Expert Coder','fortitude' ),
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field',
        ));
    $wp_customize->add_control( 'service1_title',
        array(
            'label' => __( 'Title', 'fortitude' ),
            'section' => 'service1_section',
            'type' => 'text',
        ));

        /* Description */  
    $wp_customize->add_setting( 'service1_desc',
        array(
            'default' =>  __( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s','fortitude' ),
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field',
        ));
    $wp_customize->add_control( 'service1_desc',
        array(
            'label' => __( 'Description', 'fortitude' ),
            'section' => 'service1_section',
            'type' => 'text',
        ));

        /* Icon */  
    $wp_customize->add_setting( 'service1_icon',
        array(
            'default' =>  'fa fa-code',
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field',
        ));
    $wp_customize->add_control( 'service1_icon',
        array(
            'label' => __( 'FontAwesome 4.7 Icon', 'fortitude' ),
            'section' => 'service1_section',
            'type' => 'text',
        ));

        /* URL */
    $wp_customize->add_setting( 'service1_url',
        array(
            'default' => '#',
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_url',
        ));
    $wp_customize->add_control( 'service1_url',
        array(
            'label' => __( 'Service Link', 'fortitude' ),
            'section' => 'service1_section',
            'type' => 'url',
        ));