<?php
    $wp_customize->add_section(
        'preloader_section',
        array(
            'title' => __( 'Preloader','fortitude' ),
            'panel'=>'theme_options',
            'capability'=>'edit_theme_options',
            'priority'   => 1
        )
    );
        /* About us show */  
    $wp_customize->add_setting( 'preloader_show',
        array(
            'default' => 1,
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control( 'preloader_show',
        array(
            'label' => __( 'Enable Preloader', 'fortitude' ),
            'section' => 'preloader_section',
            'type' => 'checkbox',
            
        ));