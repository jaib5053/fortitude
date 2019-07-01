<?php
/**
 * fortitude Theme Customizer
 *
 * @package fortitude
 */
function fortitude_customize_register( $wp_customize ) {

    /* panels */
    require_once 'customizer-sections/panels.php';

    /* Theme options */
    require_once 'customizer-sections/theme-options/copyright-settings.php';
    require_once 'customizer-sections/theme-options/preloader-settings.php';

    /* Front page settings */
    require_once 'customizer-sections/front-page/slider/slide1.php';
    require_once 'customizer-sections/front-page/slider/slide2.php';
    require_once 'customizer-sections/front-page/slider/slide3.php';
    require_once 'customizer-sections/front-page/about-us-settings.php';
    require_once 'customizer-sections/front-page/blog-settings.php';
    require_once 'customizer-sections/front-page/services/service-settings.php';
    require_once 'customizer-sections/front-page/services/service1.php';
    require_once 'customizer-sections/front-page/services/service2.php';
    require_once 'customizer-sections/front-page/services/service3.php';

    /* Extra settings */    
    require_once 'customizer-sections/extra-settings.php';
    
}
add_action( 'customize_register', 'fortitude_customize_register' );

/* Customizer Scripts */
function fortitude_customizer_scripts() {
     wp_enqueue_script( 'customizer-js', get_template_directory_uri() . '/assets/js/customizer.js', array('jquery'), '1.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'fortitude_customizer_scripts' );