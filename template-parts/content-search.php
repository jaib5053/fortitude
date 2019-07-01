<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fortitude
 */
?>
<?php if( have_posts() ): while ( have_posts() ): the_post(); ?>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="single-blog">
              	<?php if( has_post_thumbnail() ): ?>
                <div class="single-blog-img">
                	<a href="<?php the_permalink(); ?>">
						<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
				  	</a>
                </div>
            <?php endif; ?>
                <div class="blog-meta">
                	<span class="comments-type">
						<i class="fa fa-comment-o"></i>
						<?php echo esc_html( get_comments_number() ); _e( ' comments','fortitude' );?>
					</span>
                	<span class="date-type">
						<i class="fa fa-calendar"></i>
						<?php the_date(); ?>
					</span>
                </div>
                <div class="blog-text">
                <h4><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h4>
                <?php the_excerpt(); ?>
                </div>
                <span>
					<a href="<?php the_permalink(); ?>" class="ready-btn"><?php _e('Read More','fortitude'); ?></a>
				</span>
              </div>
            </div>
<?php
endwhile;
wp_reset_postdata(); ?>
			<div class="blog-pagination">
				<ul class="pagination">
			  	<?php echo paginate_links(); ?>
				</ul>
			</div>
<?php
else: ?> 
	<h1>
   	<?php _e( 'No Post Found.', 'fortitude' ); ?>
	</h1>
<?php	
endif;