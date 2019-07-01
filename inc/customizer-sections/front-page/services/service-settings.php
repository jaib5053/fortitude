<?php
    $wp_customize->add_section(
        'service_section',
        array(
            'title' => __( 'Services Settings','fortitude' ),
            'panel'=>'front_page_settings',
            'capability'=>'edit_theme_options',
            'priority'   => 1
        )
    );
        /* blog show */  
    $wp_customize->add_setting( 'service_show',
        array(
            'default' => 1,
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control( 'service_show',
        array(
            'label' => __( 'Show/Hide Section', 'fortitude' ),
            'section' => 'service_section',
            'type' => 'checkbox'    
        ));
        /* Blog title */  
    $wp_customize->add_setting( 'service_title',
        array(
            'default' => __( 'Our Services','fortitude' ),
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field',
        ));
    $wp_customize->add_control( 'service_title',
        array(
            'label' => __( 'Blog Section Title','fortitude' ),
            'section' => 'service_section',
            'type' => 'text',
        ));