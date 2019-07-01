<?php
    $wp_customize->add_section(
        'blog_section',
        array(
            'title' => __( 'Blog','fortitude' ),
            'panel'=>'front_page_settings',
            'capability'=>'edit_theme_options',
        )
    );
        /* blog show */  
    $wp_customize->add_setting( 'blog_show',
        array(
            'default' => 1,
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control( 'blog_show',
        array(
            'label' => __( 'Show/Hide Section', 'fortitude' ),
            'section' => 'blog_section',
            'type' => 'checkbox',
            
        ));
        /* Blog title */  
    $wp_customize->add_setting( 'blog_title',
        array(
            'default' => __( 'Blog','fortitude' ),
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field',
        ));
    $wp_customize->add_control( 'blog_title',
        array(
            'label' => __( 'Blog Section Title','fortitude' ),
            'section' => 'blog_section',
            'type' => 'text',
        ));