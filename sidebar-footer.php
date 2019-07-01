<?php
/**
 * The sidebar containing the footer widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fortitude
 */

if ( ! is_active_sidebar( 'sidebar-footer' ) ) {
    return;
}
?>
<?php dynamic_sidebar( 'sidebar-footer' );

