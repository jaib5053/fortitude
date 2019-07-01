<?php 
/**
 * Template for displaying search forms in Theme
 *
 * @package fortitude
 */
 ?>
             <div class="single-blog-page">
              <!-- search option start -->
              <form role="search" method="get" id="searchform" class="searchform " action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <div class="search-option">
                  <input name="s" id="s" type="text" placeholder="<?php _e( 'Search...','fortitude' ); ?>">
                  <button class="button" type="submit">
                    <i class="fa fa-search"></i>
                  </button>
                </div>
              </form>
              <!-- search option end -->
            </div>
