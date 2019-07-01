<?php
        $wp_customize->add_section(
        'slide3_section',
        array(
            'title' => __( 'Slide 3','fortitude' ),
            'panel'=>'front_page_settings',
            'capability'=>'edit_theme_options',
            'priority'   => 1
        )
    );
        /* heading */  
    $wp_customize->add_setting( 'slide3_heading',
        array(
            'default' =>  __( 'Slide 3 Heading','fortitude' ),
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field',
        ));
    $wp_customize->add_control( 'slide3_heading',
        array(
            'label' => __( 'Heading', 'fortitude' ),
            'section' => 'slide3_section',
            'type' => 'text',
        ));

        /*subheading */  
    $wp_customize->add_setting( 'slide3_subheading',
        array(
            'default' =>  __( 'Slide 3 Subheading','fortitude' ),
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field',
        ));
    $wp_customize->add_control( 'slide3_subheading',
        array(
            'label' => __( 'Subheading', 'fortitude' ),
            'section' => 'slide3_section',
            'type' => 'text',
        ));

        /*Button text */  
    $wp_customize->add_setting( 'slide3_btn_text',
        array(
            'default' =>  __( 'Learn More','fortitude' ),
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field',
        ));
    $wp_customize->add_control( 'slide3_btn_text',
        array(
            'label' => __( 'Button Text', 'fortitude' ),
            'section' => 'slide3_section',
            'type' => 'text',
        ));

        /*Button url */  
    $wp_customize->add_setting( 'slide3_btn_url',
        array(
            'default' => '#',
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_url',
        ));
    $wp_customize->add_control( 'slide3_btn_url',
        array(
            'label' => __( 'Button Link', 'fortitude' ),
            'section' => 'slide3_section',
            'type' => 'url',
        ));

        /* Slide image */  
    $wp_customize->add_setting( 'slide3_image',
        array(
            'default' =>  get_template_directory_uri().'/img/slider/slide3.jpg',
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_url',
        ));
    $wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'slide3_image',
        array(
            'label' => __( 'Image', 'fortitude' ),
            'section' => 'slide3_section',
            'settings'   => 'slide3_image',
        )));