  <!-- Start About area -->
  <div id="about" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2><?php echo esc_html( get_theme_mod( 'about_us_title','About Us' ) ); ?></h2>
          </div>
        </div>
      </div>
      <div class="row">
        <?php if( get_theme_mod( 'about_us_image', get_template_directory_uri().'/img/about-us.jpg' ) ): ?>
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
				      <img src="<?php echo esc_url( get_theme_mod( 'about_us_image', get_template_directory_uri().'/img/about-us.jpg' ) ); ?>" alt="<?php echo esc_html( get_theme_mod( 'about_us_title','About Us' ) ); ?>">
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <?php endif; ?>
        <div class="<?php echo ( get_theme_mod( 'about_us_image',get_template_directory_uri().'/img/about-us.jpg' )  ? 'col-md-6 col-sm-6' : 'col-md-12 col-sm-12' ); ?> col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <p>
                <?php echo esc_html( get_theme_mod( 'about_us_desc','Redug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure aspernatur sit adipisci quaerat unde at nequeRedug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure ' ) ); ?>
              </p>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
  <!-- End About area -->