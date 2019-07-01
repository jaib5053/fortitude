<?php
    $wp_customize->add_section(
        'about_us_section',
        array(
            'title' => __( 'About us','fortitude' ),
            'panel'=>'front_page_settings',
            'capability'=>'edit_theme_options',
            'priority'   => 1
        )
    );
        /* About us show */  
    $wp_customize->add_setting( 'about_us_show',
        array(
            'default' => 1,
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control( 'about_us_show',
        array(
            'label' => __( 'Show/Hide Section', 'fortitude' ),
            'section' => 'about_us_section',
            'type' => 'checkbox',
            
        ));

        /* About us title */  
    $wp_customize->add_setting( 'about_us_title',
        array(
            'default' => __( 'About Us','fortitude' ),
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field',
        ));
    $wp_customize->add_control( 'about_us_title',
        array(
            'label' => __( 'Title', 'fortitude' ),
            'section' => 'about_us_section',
            'type' => 'text',
        ));

        /* About us description */  
    $wp_customize->add_setting( 'about_us_desc',
        array(
            'default' => __( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum','fortitude' ),
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field',
        ));
    $wp_customize->add_control( 'about_us_desc',
        array(
            'label' => __( 'Description', 'fortitude' ),
            'section' => 'about_us_section',
            'type' => 'textarea',
        ));

    /* About us image */  
    $wp_customize->add_setting( 'about_us_image',
        array(
            'default' =>  get_template_directory_uri().'/img/about-us.jpg',
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_url',
        ));
    $wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'about_us_image',
        array(
            'label' => __( 'Display Image', 'fortitude' ),
            'section' => 'about_us_section',
            'settings'   => 'about_us_image',
        )));