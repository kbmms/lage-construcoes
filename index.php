 <?php get_header(); ?>

<?php get_template_part( 'templates/slider', 'slider' ); ?>


  <div class="container-fluid main-content">
  <?php get_template_part( 'templates/servicos', 'servicos' ); ?>
  <?php get_template_part( 'templates/quemsomos', 'quemsomos' ); ?>
  <?php get_template_part( 'templates/clientes', 'clientes' ); ?>
  </div>
  <?php get_footer(); ?>