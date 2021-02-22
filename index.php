<?php

get_header('index'); ?>

  <section class="page-content grid">
    <?php
      the_post();
      the_content();
    ?>


  </section>


<?php get_footer(); ?>
