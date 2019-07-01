<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
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
			<h1> <?php _e('404 Page Not Found!','fortitude'); ?> </h1>
            <h2> <?php _e('You are lost...','fortitude'); ?> </h2>    
            <div class="text-center">
                <a class="btn main-btn" href="<?php echo esc_url( home_url() ); ?>"> <i class="fa fa-angle-double-left"> </i> <?php _e('Back to Home','fortitude'); ?>
                </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
get_sidebar();
get_footer();
