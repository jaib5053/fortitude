  <!-- Start Slider Area -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">

        <?php if( get_theme_mod( 'slide1_image', get_template_directory_uri().'/img/slider/slide1.jpg' ) ): ?>
        <img src="<?php echo esc_url( get_theme_mod( 'slide1_image', get_template_directory_uri().'/img/slider/slide1.jpg' ) ); ?>" alt="" title="#slider-direction-1" />
       <?php endif; ?>

        <?php if( get_theme_mod( 'slide2_image', get_template_directory_uri().'/img/slider/slide2.jpg' ) ): ?>
        <img src="<?php echo esc_url( get_theme_mod( 'slide2_image',get_template_directory_uri().'/img/slider/slide2.jpg' ) ); ?>" alt="" title="#slider-direction-2" />
        <?php endif; ?>

         <?php if( get_theme_mod( 'slide3_image', get_template_directory_uri().'/img/slider/slide3.jpg' ) ): ?>
        <img src="<?php echo esc_url( get_theme_mod( 'slide3_image', get_template_directory_uri().'/img/slider/slide3.jpg' ) ); ?>" alt="" title="#slider-direction-3" />
        <?php endif; ?>

      </div>

      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">

                <?php if( get_theme_mod( 'slide1_subheading','Slide 1 Subheading' ) ): ?>
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1"><?php echo esc_html( get_theme_mod( 'slide1_subheading', __('Slide 1 Subheading','fortitude') ) ); ?></h2>
                </div>
                <?php endif; ?>

                <?php if( get_theme_mod( 'slide1_heading','Slide 1 Heading' ) ): ?>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2"><?php echo esc_html( get_theme_mod( 'slide1_heading', __('Slide 1 Heading', 'fortitude') ) ); ?></h1>
                </div>
                <?php endif; ?>

                <?php if( get_theme_mod( 'slide1_btn_text','Learn More' ) ): ?>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="<?php echo esc_url( get_theme_mod( 'slide1_btn_url','#' ) ); ?>"><?php echo esc_html( get_theme_mod( 'slide1_btn_text', __('Learn More','fortitude') ) ); ?></a>
                </div>
                <?php endif; ?>

              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 2 -->
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">

                 <?php if( get_theme_mod( 'slide2_subheading','Slide 2 Subheading' ) ): ?>
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1"><?php echo esc_html( get_theme_mod( 'slide2_subheading', __('Slide 2 Subheading','fortitude') ) ); ?></h2>
                </div>
                <?php endif; ?>

                <?php if( get_theme_mod( 'slide2_heading','Slide 2 heading' ) ): ?>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2"><?php echo esc_html( get_theme_mod( 'slide2_heading', __('Slide 2 Heading','fortitude') ) ); ?></h1>
                </div>
                <?php endif; ?>

                <?php if( get_theme_mod( 'slide2_btn_text','Learn More' ) ): ?>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="<?php echo esc_url( get_theme_mod( 'slide2_btn_url','#' ) ); ?>"><?php echo esc_html( get_theme_mod( 'slide2_btn_text',__('Learn More','fortitude') ) ); ?></a>
                </div>
                <?php endif; ?>

              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 3 -->
      <div id="slider-direction-3" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">

               <?php if( get_theme_mod( 'slide3_subheading','Slide 3 Subheading' ) ): ?>
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1"><?php echo esc_html( get_theme_mod( 'slide3_subheading',__('Slide 3 Subheading','fortitude') ) ); ?></h2>
                </div>
                <?php endif; ?>

                <?php if( get_theme_mod( 'slide3_heading','Slide 3 Heading' ) ): ?>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2"><?php echo esc_html( get_theme_mod( 'slide3_heading',__('Slide 3 Heading','fortitude') ) ); ?></h1>
                </div>
                <?php endif; ?>

                <?php if( get_theme_mod( 'slide3_btn_text','Learn More' ) ): ?>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="<?php echo esc_url( get_theme_mod( 'slide3_btn_url','#' ) ); ?>"><?php echo esc_html( get_theme_mod( 'slide3_btn_text',__('Learn More','fortitude') ) ); ?></a>
                </div>
                <?php endif; ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Slider Area -->