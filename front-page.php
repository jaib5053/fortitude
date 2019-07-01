<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fortitude
 */

get_header();

if( get_theme_mod( 'slider_show',1 ) ):
get_template_part( 'inc/sections/slider' );
endif;

if( get_theme_mod( 'about_us_show',1 ) ):
get_template_part( 'inc/sections/about' );
endif;

if( get_theme_mod( 'service_show',1 ) ):
get_template_part( 'inc/sections/service' );
endif;

if( get_theme_mod( 'blog_show',1 ) ):
get_template_part( 'inc/sections/blog' );
endif;

get_footer();
