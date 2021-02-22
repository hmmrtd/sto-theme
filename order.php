<?php
/*
Template Name: Сторінка запису
*/

get_header(''); ?>

  <header class="order-header">
    <div class="o-overlay">
      <h2 class="o-h2">Записатись до майстра</h2>
    </div>
  </header>

  <section class="page-content grid">
    <?php
      the_post();
      the_content();
    ?>

    <div class="sv-cat-block grid">

      <div class="sv-cat-item grid">
        <div class="sv-cat-overlay">
          <div class="cat-title-block">
            <h4 class="cat-title">Діагностика, ТО та обслуговування кондиціонерів</h4>
            <br>
            <a href="/order-service/services-page-1/" class="btn-order">Записатись</a>
          </div>
        </div>
      </div>

      <div class="sv-cat-item grid">
        <div class="sv-cat-overlay">
          <div class="cat-title-block">
            <h4 class="cat-title">Ремонт та заміна запчастин</h4>
            <br>
            <a href="/order-service/services-page-2/" class="btn-order">Записатись</a>
          </div>
        </div>
      </div>

      <div class="sv-cat-item grid">
        <div class="sv-cat-overlay">
          <div class="cat-title-block">
            <h4 class="cat-title">Малярні та кузовні роботи</h4>
            <br>
            <a href="/order-service/services-page-3/" class="btn-order">Записатись</a>
          </div>
        </div>
      </div>

    </div>

  </section>


<?php get_footer(); ?>
