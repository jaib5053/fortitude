  <div class="header-bg page-area" style="background: url(<?php header_image(); ?>);">
    <div class="home-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="slider-content text-center">
            <div class="header-bottom">
              <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                <h1 class="title2">
	                <?php 
	            	if ( is_home() ) {
	            		_e( 'Blog','fortitude' );
	            	}elseif ( is_author() ) {
	            		_e( 'Author: ','fortitude' ); the_author();
	            	}elseif ( is_404() ) {
                  _e( '404','fortitude' );
                }elseif ( is_archive() ) {
	            		the_archive_title();
	            	}elseif( function_exists( 'is_woocommerce' ) ) {
	                    if ( is_woocommerce() || is_cart() || is_checkout() ) {
	                        woocommerce_page_title( true );
	                    }
	                }
	            	else{
	            		the_title();
	            	}
	            	?>
                </h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>