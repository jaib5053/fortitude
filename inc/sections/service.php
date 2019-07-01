
  <!-- Start Service area -->
  <div id="services" class="services-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <h2> <?php echo esc_html( get_theme_mod( 'service_title','Our Services') ); ?> </h2>
          </div>
        </div>
      </div>
      <div class="row text-center">
        <div class="services-contents">
          <!-- Start Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <?php if( get_theme_mod( 'service1_icon','fa fa-code' ) ): ?>
                  <a class="services-icon" href="<?php echo esc_url( get_theme_mod( 'service1_url','#' ) ); ?>">
											<i class="<?php echo esc_attr( get_theme_mod( 'service1_icon','fa fa-code' ) ); ?>"></i>
										</a>
                  <?php endif; ?>
                  <h4><?php echo esc_html( get_theme_mod( 'service1_title','Expert Coder' ) ); ?></h4>
                  <p>
                    <?php echo esc_attr( get_theme_mod( 'service1_desc','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s' ) ); ?>
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <?php if( get_theme_mod( 'service2_icon','fa fa-camera-retro' ) ): ?>
                  <a class="services-icon" href="<?php echo esc_url( get_theme_mod( 'service2_url','#' ) ); ?>">
                      <i class="<?php echo esc_attr( get_theme_mod( 'service2_icon','fa fa-camera-retro' ) ); ?>"></i>
                    </a>
                  <?php endif; ?>
                  <h4><?php echo esc_html( get_theme_mod( 'service2_title','Creative Designer' ) ); ?></h4>
                  <p>
                    <?php echo esc_attr( get_theme_mod( 'service2_desc','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s' ) ); ?>
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
              <div class="single-services">
                  <?php if( get_theme_mod( 'service3_icon','fa fa-wordpress' ) ): ?>
                  <a class="services-icon" href="<?php echo esc_url( get_theme_mod( 'service3_url','#' ) ); ?>">
                      <i class="<?php echo esc_attr( get_theme_mod( 'service3_icon','fa fa-wordpress' ) ); ?>"></i>
                    </a>
                  <?php endif; ?>
                  <h4><?php echo esc_html( get_theme_mod( 'service3_title','WordPress Developer' ) ); ?></h4>
                  <p>
                    <?php echo esc_attr( get_theme_mod( 'service3_desc','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s' ) ); ?>
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- End Service area -->