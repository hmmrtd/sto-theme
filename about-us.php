<?php
/*
Template Name: Про нас
*/

get_header(''); ?>

  <header class="au-header">
    <div class="au-overlay">
      <h2 class="au-h2">Про нас</h2>
    </div>
  </header>

  <section class="page-content grid">
    <?php
      the_post();
      the_content();

    ?>

        <br>
        <span>Понеділок-неділя 10:00-20:00.</span> <span>067-123-45-67 <a href="#" class="callmeBtn">передзвоніть мені</a> </span>
        <br>

    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d601.9428091195703!2d28.65988982731611!3d50.25561655842197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1559744501755!5m2!1sru!2sua"  frameborder="0" style="border:0; width:80vw; height:45vh;" allowfullscreen></iframe>

  </section>


<?php get_footer('au'); ?>
