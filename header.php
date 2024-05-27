<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mailerchi
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="Site">

    <div id="page" class="site">
      <a class="skip-link screen-reader-text" href="#primary">
        <?php esc_html_e('Skip to content', 'mailerchi'); ?>
      </a>

      <header id="header" class="header">
        <nav class="navbar navbar-expand-lg  py-4 flex-column">
          <div class="container-xxl">
            <div>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <i class="bi bi-list" style="font-size:40px;"></i> </button>
            </div>

            <!-- ///////////////////////////////////////////////////////////// -->
            <a class="d-none d-md-block navbar-brand me-lg-5" href="<?php echo site_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt=""  style="width:90px;"></a>


            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
              aria-labelledby="offcanvasNavbarLabel">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                  میلر چی </h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <style>
                .active {
                  color: var(--primary);
                }
              </style>
              <?php
              wp_nav_menu(
                array(
                  'theme_location' => 'header-menu',
                  'menu_class' => 'navbar-nav justify-content-start align-items-lg-center flex-grow-1 ',
                  'container_class' => 'offcanvas-body px-1',
                )
              );
              ?>
            </div>

            <div class="d-none d-md-flex align-items-center">
              <div class=" d-flex position-relative align-items-center">
                <span class="header-icon  me-2 position-relative">
                  <i class="bi bi-telephone-inbound fs-2 "></i>
                </span>
                <div class="d-flex flex-column ms-2">
                  <p class="header-contact-text mb-1">تماس با ما</p>
                  <a class="header-contact-number mb-0" href="tel:+982191017768 ">
                    02191017768
                  </a>
                </div>
              </div>


            </div>
            <a class=" d-md-none navbar-brand me-lg-5" href="<?php echo site_url(); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="" style="width:90px;"></a>
          </div>
        </nav>




      </header><!-- #masthead -->