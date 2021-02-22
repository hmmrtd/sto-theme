<?php
/*
Template Name: Сторінка послуг
*/

get_header(''); ?>

  <header class="price-header">
    <div class="p-overlay">
      <h2 class="p-h2">Список наших послуг</h2>
    </div>
  </header>

  <section class="page-content grid">
    <?php
      the_post();
      the_content();

    ?>

    <div class="wrapper-svlist grid">

      <div class="service-item grid">
        <h3 class="sv-h3">Діагностика</h3>
        <div class="sv-wrapper grid">
          <div class="img-side"> <img src="<?php bloginfo('template_url');?>/assets/img/sv1.jpg" alt=""> </div>
          <div class="text-side"> <?php the_field('diagnostics');?> </div>
        </div>
      </div>

      <div class="service-item grid">
        <h3 class="sv-h3">Технічне обслуговування</h3>
        <div class="sv-wrapper grid">
          <div class="text-side"> <?php the_field('TS');?> </div>
          <div class="img-side"> <img src="<?php bloginfo('template_url');?>/assets/img/sv2.jpg" alt=""> </div>
        </div>
      </div>

      <div class="service-item grid">
        <h3 class="sv-h3">Заправка та обслуговування кондиціонерів</h3>
        <div class="sv-wrapper grid">
          <div class="img-side"> <img src="<?php bloginfo('template_url');?>/assets/img/sv3.jpg" alt=""> </div>
        </div>
      </div>

      <div class="service-item grid">
        <h3 class="sv-h3">Ремонт та заміна запчастин</h3>
        <div class="sv-wrapper grid">
          <div class="img-side"> <img src="<?php bloginfo('template_url');?>/assets/img/sv4.jpg" alt=""> </div>
          <div class="text-side"> <?php the_field('Repair');?> </div>
        </div>
      </div>

      <div class="service-item grid">
        <h3 class="sv-h3">Малярні та кузовні роботи</h3>
        <div class="sv-wrapper grid">
          <div class="text-side"> <?php the_field('Body-shop');?> </div>
          <div class="img-side"> <img src="<?php bloginfo('template_url');?>/assets/img/sv5.jpg" alt=""> </div>
        </div>
      </div>

  </div>

  </section>


<?php get_footer(); ?>
