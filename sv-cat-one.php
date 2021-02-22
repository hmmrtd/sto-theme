<?php
/*
Template Name: Сторінка замовлення 1
*/

get_header(''); ?>

  <header class="cat-one-header">
    <div class="co-overlay">
      <h2 class="co-h2">Діагностика, ТО та обслуговування кондиціонерів</h2>
    </div>
  </header>

  <section class="page-content grid" >
    <?php
      the_post();
      the_content();

       //$current_user_id = get_current_user_id();

       $current_user = wp_get_current_user();

       $user_data = array(
			      'user_id' => $current_user->ID,
            'user_log' => $current_user->user_login
		   );

		   echo "<script>window.wpud = " . json_encode($user_data) . "</script>";

       echo do_shortcode('[mso_system_shortcode]');


    ?>






  </section>


<?php get_footer(); ?>
