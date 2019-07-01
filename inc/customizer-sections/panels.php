<?php
	/* Theme options panel */
    $wp_customize->add_panel(
        'theme_options',
        array(
            'title' => __('Theme Options', 'fortitude'),
            'description' => __('fortitude Theme Options', 'fortitude'),
            'priority' => 2,
        )
    );

	/* Front page settings panel */
    $wp_customize->add_panel(
        'front_page_settings',
        array(
            'title' => __('Front Page Settings', 'fortitude'),
            'description' => __('Front Page Settings', 'fortitude'),
            'priority' => 3,
        )
    );