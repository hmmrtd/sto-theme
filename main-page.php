<?php

/* Template Name: Головна сторінка */

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <?php wp_head(); ?>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?> <?php wp_title('|');  bloginfo('description') ?></title>
  </head>
  <body <?php body_class(); ?>>
    <div class="overlay"></div>

    <section class="first-screen">

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

            <!-- <nav>
              <ul class="main-nav flex">
                <li><a href="">Головна</a></li>
                <li><a href="">Послуги</a></li>
                <li><a href="">Записатись</a></li>
                <li><a href="">Про нас</a></li>
                <li><a href="">Новини</a></li>
              </ul>
            </nav> -->

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

        <!-- <form class="callme-form grid" action="">
          <input type="text" placeholder="Ім'я">
          <input type="text" placeholder="Ваш телефон">
          <br>
          <input type="submit" value="Відправити" class="btn-submitCall">
        </form> -->
      </div>


      <!-- ===================================== H E A D E R  E N D ======================================= -->

      <div class="USP grid">
        <h1 class="service-name">Автосервіс проСТО</h1>
        <div class="slogan"> Обслуговування авто може бути простим</div>
        <ul>
           <li><i class="fas fa-check"></i> Діагностика</li>
           <li><i class="fas fa-check"></i> ТО(заміна мастил, фільтрів, тощо)</li>
           <li><i class="fas fa-check"></i> Заправка кондиціонерів</li>
           <li><i class="fas fa-check"></i> Ремонт та заміна запчастин</li>
           <li><i class="fas fa-check"></i> Малярні та кузовні роботи</li>
         </ul>
         <br>
         <a href="<?php bloginfo('url') ?>/nashi-poslugy/ " class="btn-main">Деталі</a>
      </div>



      <video poster="<?php bloginfo('template_url');?>/assets/img/poster.jpg"   preload="auto" autoplay loop muted>

        <source src="<?php bloginfo('template_url');?>/assets/video/4.mp4" type="video/mp4">

      </video>

    </section>


    <!-- ===================================== S E C O N D   S C R E E N ======================================= -->

    <section class="second-screen">

      <div class="screen-title">
        <h2>Чому саме наш сервіс?</h2>
      </div>

      <div class="container flex">
        <p class="intro-text">
          Ми пропонуємо <strong> весь комплекс робіт</strong> для найкращого стану Вашого автомобіля. Обслуговування у нас означає вищу якість виконаних робіт по ремонту і догляду
          за автомобілем. Для якісного ремонту сучасних автомобілів необхідні обладнання та цілеспрямовані фахівці. Тому, наш техцентр оснащений усіма необхідними інструментами,
          спец інструментами та апаратурою, у нас працюють <i>тільки досвідчені фахівці.</i> Саме тому ми виконуємо тільки <strong>якісний ремонт.</strong> Ми не боїмося труднощів і беремося за найскладніші і,
           на перший погляд, нездійсненні роботи. Для нас немає нерозв'язних завдань.
        </p>

        <div class="our-advantages flex">

          <div class="advantage-item grid">
            <div class="a-icon"> <i class="fas fa-users"></i> </div>
            <div class="a-title">
               <h3>Професіонали </h3>
             </div>
            <p class="a-description">
              Більше 5 років - досвід <br>
              обслуговування та ремонту <br>
              втомобілів.
            </p>
          </div>

          <div class="advantage-item grid">
            <div class="a-icon"> <i class="fas fa-clock"></i> </div>
            <div class="a-title">
               <h3>Дотримання термінів</h3>
             </div>
            <p class="a-description">
              Дотримання термінів і  вартості
              <br>робіт.
            </p>
          </div>

          <div class="advantage-item grid">
            <div class="a-icon"> <i class="fas fa-thumbs-up"></i> </div>
            <div class="a-title">
               <h3>Гарантія якості</h3>
             </div>
            <p class="a-description">
              Гарантуємо високу якість <br>
              робіт.
            </p>
          </div>

      </div>

      <hr>  <!--_____________________________________________________________________________________________________-->

      <div class="our-statistic flex">

        <div class="stats-item grid">
          <div class="s-icon"> <i class="fas fa-car"></i> </div>
          <div class="s-title"> <h3>Доглянуто автівок</h3> </div>
          <span class="s-number"> 2000 </span>
        </div>

        <div class="stats-item grid">
          <div class="s-icon"> <i class="fas fa-child"></i> </div>
          <div class="s-title"> <h3>Задоволенних кліэнтів</h3> </div>
          <span class="s-number"> 1500 </span>
        </div>

        <div class="stats-item grid">
          <div class="s-icon"> <i class="fas fa-hands-helping"></i> </div>
          <div class="s-title"> <h3>Постійних клієнтівк</h3> </div>
          <span class="s-number"> 1100 </span>
        </div>

    </div>


    </section>

    <!-- ===================================== T H I R D   S C R E E N ======================================= -->

    <section class="third-screen">
      <div class="screen-title">
        <h2>Все проСТО</h2>
      </div>



      <div class="third-screen-overlay grid">
        <div class="td-container grid">

          <div class="left-block grid">

            <div class="step-item grid">
              <div class="step-icon"> <i class="fas fa-sign-in-alt"></i>  </div>
              <p class="step-description">
                Увійдіть у власний <br>
                обліковий запис або <br>
                створіть його.
              </p>
            </div>

            <div class="step-item grid">
              <div class="step-icon"> <i class="fas fa-angle-double-right"></i>  </div>
              <p class="step-description">
                Перейдіть у розділ <br>
                 "Записатись".
              </p>
            </div>

            <div class="step-item grid">
              <div class="step-icon"> <i class="fas fa-clipboard-list"></i>  </div>
              <p class="step-description">
                Перегляньте графік <br>
                майстрів.
              </p>
            </div>

            <div class="step-item grid">
              <div class="step-icon"> <i class="fas fa-calendar-alt"></i>  </div>
              <p class="step-description">
                Оберіть вільний день <br>
                та час зручний для<br>
                вас.
              </p>
            </div>

            <div class="step-item grid">
              <div class="step-icon"> <i class="fas fa-stream"></i>  </div>
              <p class="step-description">
                Оберіть послуги, що <br>
                вам необхідні. <br>
              </p>
            </div>

            <div class="step-item grid">
              <div class="step-icon"> <i class="fas fa-clipboard-check"></i>  </div>
              <p class="step-description">
                Завершіть замовлення.
              </p>
            </div>


            <a href="" class="btn-order">Записатись</a>

          </div>


          <div class="right-block grid">
            <p class="consult-title">
              НЕВПЕВНЕНІ АБО НЕ ЗНАЄТЕ, ЩО САМЕ ВАМ НЕОБХІДНО, ОТРИМАЙТЕ БЕЗКОШТОВНУ КОНСУЛЬТАЦІЮ!
            </p>

            <div class="consult-form-wrapper grid">

              <?php echo do_shortcode('[contact-form-7 id="27" title="Форма консультації"]'); ?>

              <!-- <form class="consult-form grid" action="">
                <input type="text" placeholder="Ім'я">
                <input type="text" placeholder="Ваш телефон">
                <input type="text" placeholder="Ваш авто, наприклад: GOLF IV 2000р">
                <textarea name="name" rows="8" cols="50" placeholder="Опишіть проблему з авто"></textarea>
                <br>
                <input type="submit" value="Відправити">
              </form> -->


            </div>

          </div>

        </div>
      </div>

    </section>

    <!-- ===================================== F O U R T H  S C R E E N ======================================= -->

    <section class="fourth-screen grid">

      <div class="screen-title">
        <h2>Відгуки про нас</h2>
      </div>


      <div class="reviews-block flex">

        <div class="review-item flex">
          <span class="rw-name">Олексій</span>
          <blockquote >
            <p>
              "Затишний компактний сервіс, дуже все сподобалося. Звертався з приводу тонування, зробили швидко і якісно. Якщо що, ще раз звертаюся в цей автосервіс. "
            </p>
          </blockquote>
          <img src="<?php bloginfo('template_url');?>/assets/img/car1.png" alt="190">

        </div>

        <div class="review-item flex">
          <span class="rw-name">Ігнат</span>
          <blockquote >
            <p>
              "На фольцу поміняли підвісний, кермові наконечники, сальник півосі, гальмівні колодки задні. Мені дуже сподобалося, все зробили швидко, якісно. Дякуємо."
            </p>
          </blockquote>
          <img src="<?php bloginfo('template_url');?>/assets/img/car2.png" alt="190">
        </div>

        <div class="review-item flex">
          <span class="rw-name">Ірина</span>
          <blockquote >
            <p>
              "Приємно здивував мене сервіс. Сама я обслуговую свій автомобіль у них з тих самих пір, як закінчилася гарантія. "
            </p>
          </blockquote>
          <img src="<?php bloginfo('template_url');?>/assets/img/car3.png" alt="190">
        </div>

      </div>

</section>

<footer>
  <div class="footer-line grid">

    <div class="footline-left grid">
      <div class="logo"></div>
      <div class="brand-slogan">
        <h3 class="service-name">Автосервіс проСТО</h3>
        <div class="slogan"> Обслуговування авто може бути простим</div>
      </div>
    </div>

    <div class="footline-right grid">

      <div class="location flex">
        <div class="location-icon flex"> <i class="fas fa-map-marked-alt"></i> </div>
        <div class="address-info">
          <span>м.Житомир, <br> вул.Київська </span> <br>
          <a href="">переглянути на мапі</a>
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

  <div class="footer-content grid">
    <div class="footcont-left">

      <nav>
        <ul class="footer-nav grid">
          <li><a href="">Головна</a></li>
          <li><a href="">Послуги</a></li>
          <li><a href="">Записатись</a></li>
          <li><a href="">Про нас</a></li>
        </ul>
      </nav>

      <div class="social-links grid">
        <span>Ми у соц мережах:</span>
        <div class="social-icons flex">
          <i class="fab fa-instagram"></i>
          <i class="fab fa-youtube"></i>
        </div>
      </div>

    </div>
    <div class="footcont-right" id="on-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d637.7487436695776!2d28.658876265724953!3d50.25467814593436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m3!3e6!4m0!4m0!5e0!3m2!1sru!2sua!4v1558744418057!5m2!1sru!2sua" frameborder="0" style="border:0; width:30vw; height:12vw;" allowfullscreen></iframe>
    </div>

  </div>

<?php wp_footer(); ?>

</footer>

</body>
</html>
