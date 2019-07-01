<?php
        $wp_customize->add_section(
        'service3_section',
        array(
            'title' => __( 'Service 3','fortitude' ),
            'panel'=>'front_page_settings',
            'capability'=>'edit_theme_options',
            'priority'   => 3
        )
    );
        /* Title */  
    $wp_customize->add_setting( 'service3_title',
        array(
            'default' => __( 'WordPress Developer','fortitude' ),
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field',
        ));
    $wp_customize->add_control( 'service3_title',
        array(
            'label' => __( 'Title', 'fortitude' ),
            'section' => 'service3_section',
            'type' => 'text',
        ));

        /* Description */  
    $wp_customize->add_setting( 'service3_desc',
        array(
            'default' =>  __( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 3500s','fortitude' ),
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field',
        ));
    $wp_customize->add_control( 'service3_desc',
        array(
            'label' => __( 'Description', 'fortitude' ),
            'section' => 'service3_section',
            'type' => 'text',
        ));

        /* Icon */  
    $wp_customize->add_setting( 'service3_icon',
        array(
            'default' =>  'fa fa-wordpress',
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field',
        ));
    $wp_customize->add_control( 'service3_icon',
        array(
            'label' => __( 'FontAwesome 4.7 Icon', 'fortitude' ),
            'section' => 'service3_section',
            'type' => 'text',
        ));

        /* URL */
    $wp_customize->add_setting( 'service3_url',
        array(
            'default' => '#',
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_url',
        ));
    $wp_customize->add_control( 'service3_url',
        array(
            'label' => __( 'Service Link', 'fortitude' ),
            'section' => 'service3_section',
            'type' => 'url',
        ));