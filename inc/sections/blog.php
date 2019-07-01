<?php 
/**
 * Travello home-Blog/latest news section
 *
 * @package Travello
 */
$post_data = array( 
    'post_type' => 'post', 
    'posts_per_page' => 3, 
    'post__not_in' => get_option( 'sticky_posts' )
    ); 

$post_data = new WP_Query( $post_data );
?>
  <!-- Start Blog Area -->
  <div id="blog" class="blog-area">
    <div class="blog-inner area-padding">
      <div class="blog-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2><?php echo esc_html( get_theme_mod( 'blog_title','Blog' ) ); ?></h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start Left Blog -->
          <?php if( $post_data->have_posts() ): while ( $post_data->have_posts() ): $post_data->the_post(); ?>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-blog">
              <?php if( has_post_thumbnail() ): ?>
              <div class="single-blog-img">
                <a href="<?php the_permalink();?>">
				          <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
								</a>
              </div>
              <?php endif; ?>
              <div class="blog-meta">
                <span class="comments-type">
										<i class="fa fa-comment-o"></i>
										<?php echo esc_html( get_comments_number() ); ?>
								</span>
                <span class="date-type">
										<i class="fa fa-calendar"></i>
                    <?php the_date(); ?>
								</span>
              </div>
              <div class="blog-text">
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                 <?php the_excerpt(); ?>
              </div>
              <span>
									<a href="<?php the_permalink();?>" class="ready-btn"> <?php _e( 'Read More','fortitude' ); ?> </a>
							</span>
            </div>
            <!-- Start single blog -->
          </div>
          <!-- End Left Blog-->
          <?php endwhile; 
            wp_reset_postdata();
            ?>
            <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog -->