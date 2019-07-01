<?php
    $wp_customize->add_section(
        'copyright_section',
        array(
            'title' => __( 'Copyright','fortitude' ),
            'panel'=>'theme_options',
            'capability'=>'edit_theme_options',
        )
    );
        /* copyright text  */  
    $wp_customize->add_setting( 'copyright',
        array(
            'default' => __( 'Powered by WordPress', 'fortitude' ),
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field',
        ));
    $wp_customize->add_control( 'copyright',
        array(
            'label' => __( 'copyright text', 'fortitude' ),
            'section' => 'copyright_section',
            'type' => 'text',
        ));