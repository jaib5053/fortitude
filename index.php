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
get_template_part( 'inc/sections/breadcrumb' );
?>
  <div class="blog-page area-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="page-head-blog">
			<?php get_sidebar(); ?>
          </div>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="row">
			<?php get_template_part('template-parts/content', get_post_type()); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
get_sidebar();
get_footer();