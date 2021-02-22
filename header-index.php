<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css">
    <?php wp_head(); ?>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
  </head>
  <body <?php body_class(); ?>>
    <div class="overlay"></div>

      <?php
        if(is_user_logged_in()){}
        else{ ?>

          <div class="login-line flex">
            <div class="login-wrapper">
              <a href="<?php echo wp_login_url(); ?>">увійти в кабінет</a> <span> <pre> | </pre> </span> <a href="<?php echo wp_registration_url();?>">створити обліковий запис з сервісною історією</a>
            </div>
          </div>
        <? } ?>

      <div class="header flex">

        <div class="header-wrapper flex">

          <div class="nav-block flex">

            <div class="logo">
              <?php the_custom_logo( $blog_id ); ?>
            </div>


            <nav>
            <?php  wp_nav_menu( [
                'theme_location'  => '',
                'menu'            => '',
                'container'       => '',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'main-nav',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'           => 0,
                'walker'          => '',
              ] );
            ?>
          </nav>


          </div>


          <div class="info-links flex">
            <div class="location flex">
              <div class="location-icon flex"> <i class="fas fa-map-marked-alt"></i> </div>
              <div class="address-info">
                <span>м.Житомир, <br> вул.Київська </span> <br>
                <a href="#on-map">переглянути на мапі</a>
              </div>
            </div>

            <div class="social-links grid">
              <span>Ми у соц мережах:</span>
              <div class="social-icons flex">
                <i class="fab fa-instagram"></i>
                <i class="fab fa-youtube"></i>
              </div>
            </div>

            <div class="working-hours flex">
              <i class="fas fa-phone"></i>
              <div class="working-info grid">
                <span>пн-нд 10:00-20:00</span>
                <span class="phone-number">067-123-45-67</span>
                <a href="#" class="callmeBtn">передзвоніть мені</a>
              </div>
            </div>

          </div>

        </div>

      </div>

      <!-- ============= POPUP CALL-ME =============== -->


      <div class="popup-callme">

        <?php echo do_shortcode('[contact-form-7 id="42" title="Форма обратного дзвінка"]'); ?>

      </div>


      <header class="index-header">
        <div class="i-overlay">
          <h2 class="i-h2"><?php wp_title(""); ?></h2>
        </div>
      </header>
