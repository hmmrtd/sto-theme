<?php
/*
Template Name: Сторінка замовлення 2
*/

get_header(''); ?>

  <header class="cat-two-header">
    <div class="tw-overlay">
      <h2 class="tw-h2">Ремонт та заміна запчастин</h2>
    </div>
  </header>

  <section class="page-content grid" >
    <?php
      the_post();
      the_content();
    ?>



  </section>


<?php get_footer(); ?>
