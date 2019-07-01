<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
        	<?php get_sidebar(); ?>
         </div>
        <!-- End left sidebar -->
        <!-- Start single blog -->
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
           	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
              <!-- single-blog start -->
              <article class="blog-post-wrapper">
              	<?php if( has_post_thumbnail() ) : ?>
              		<div class="post-thumbnail">
                    <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid " alt="<?php the_title(); ?>">
                    </div>
                    <?php endif; ?>
                <div class="post-information">
                  <h2><?php the_title(); ?></h2>
                  <div class="entry-meta">
                    <span class="author-meta"><i class="fa fa-user"></i><a href="<?php  echo esc_url( get_author_posts_url(  get_the_author_meta( 'ID' ) ) ) ?>"> <?php the_author(); ?> </a></span>
                    <span><i class="fa fa-clock-o"></i> <?php the_date(); ?></span>
                    <span class="tag-meta">
						<i class="fa fa-folder-o"></i>
						<?php the_category( ',' ); ?>
					</span>
          	
						<?php if(get_the_tag_list() != '') { ?>
              <span>
							<i class="fa fa-tags"></i>
							<?php the_tags(); 
              ?> </span>
              <?php } ?>
					
                    <span><i class="fa fa-comments-o"></i><?php echo esc_html( get_comments_number() ); ?></span>
                  </div>
                  <div class="entry-content">
                   <?php the_content(); ?>
                  </div>
                    <?php $page_link = array(
                    'before'           => '<p>' . __( 'Pages:', 'fortitude' ),
                    'after'            => '</p>',
                    'link_before'      => '',
                    'link_after'       => '',
                    'next_or_number'   => 'number',
                    'separator'        => ' ',
                    'nextpagelink'     => __( 'Next page', 'fortitude'),
                    'previouspagelink' => __( 'Previous page', 'fortitude' ),
                    'pagelink'         => '%',
                    'echo'             => 1
                  );
                  esc_html( wp_link_pages( $page_link ) ); ?>
                </div>
              </article>
              <?php endwhile; endif; ?>
              <div class="clear"></div>
              <div class="single-post-comments">
                <div class="comments-area">
                  <div class="comments-heading">
					<?php // If comments are open or we have at least one comment, load up the comment template.
                 if ( comments_open() || get_comments_number() ) :
                     comments_template();
                 endif; ?>
                </div>
                
              </div>
              <!-- single-blog end -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog Area -->
  <div class="clearfix"></div>

<?php get_footer();