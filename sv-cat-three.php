<?php
/*
Template Name: Сторінка замовлення 3
*/

get_header(''); ?>

  <header class="cat-three-header">
    <div class="th-overlay">
      <h2 class="th-h2">Малярні та кузовні роботи</h2>
    </div>
  </header>

  <section class="page-content grid" >
    <?php
      the_post();
      the_content();
    ?>



  </section>


<?php get_footer(); ?>
