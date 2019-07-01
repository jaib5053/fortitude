<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fortitude
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-spy="scroll" >
  
<?php if( get_theme_mod('preloader_show',1) ): ?>
  <div id="preloader"></div>
<?php endif; ?>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only"><?php _e( 'Toggle Navigation', 'fortitude' ) ?></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <?php $custom_logo_id= get_theme_mod( 'custom_logo' );
                  $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                  if( function_exists( 'has_custom_logo' ) ) :
                    if( has_custom_logo() ) : ?>
                  <div class="site_logo">
            			<a class="navbar-brand page-scroll sticky-logo" href="<?php echo esc_url( home_url() ); ?>">
            				<img src=" <?php echo esc_url( $logo[0] ); ?>" style="height: <?php echo esc_attr(get_theme_mod('custom_logo_height','70')); ?>px; width: <?php echo esc_attr(get_theme_mod('custom_logo_width','180')); ?>px !important;" alt="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>"class="img-fluid">
            			</a>
                  </div>
            <?php    
                    else:if (display_header_text()==true) : 
                            echo '<div class="site_logo"><h1 class="site_identity"><a href="'.esc_url( home_url() ) .'" >'. esc_html( get_bloginfo( 'name' ) ) .'</a></h1>';
                            echo '<p class="site_description">'. esc_html( get_bloginfo( 'description' ) ) .'</p></div>';
                         endif;
                    endif;
                  endif;  
            ?>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <?php 
                         wp_nav_menu( array(
                            'theme_location'  => 'primary',
                            'depth'           => 2,
                            'container'       => false,
                            'menu_class'      => 'navbar-nav nav navbar-right',
                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'          => new WP_Bootstrap_Navwalker(),
                        ) ); ?> <!-- primary menu -->
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->