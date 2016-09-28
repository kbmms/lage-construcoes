 <?php get_header(); ?>
<div class="container-fluid interna-title-full">
    <div class="container">
        <h2><span class="marcador">&bull; </span>   <?php the_title(); ?></h2>
    </div>
</div>
      <div class="container servicos-interna-full">
           <div class="servicos">
      <?php
      query_posts('post_type=servicos&order=ASC&showposts=-1');
      if (have_posts()) : while (have_posts()): the_post();
      ?>
             <div class="col-md-6">
                <div class="col-md-6 card1 text-left">
                <div class="position col-md-10">
                  <div class="row">
                    <hr class="col-md-2 col-md-offset-1">
                  </div>
                  <h4><?php the_field('titulo_do_serviço') ?></h4>
                  <?php the_content() ?>
                </div>

                </div>
                <div class="col-md-6 card2 hidden-xs">
                <div class="position">
                  <img src="<?php the_field('imagem') ?>" class="img-responsive" alt="">
                <!--   <?php the_post_thumbnail('thumbnail', array('class' => 'img-responsive')); ?> -->
                </div>
                </div>
             </div>
 <?php  endwhile;  endif;   wp_reset_query(); ?>

<!--              <div class="col-md-6">
                <div class="col-md-6 card1 text-left">
                <div class="position col-md-10">
                  <div class="row">
                    <hr class="col-md-2 col-md-offset-1">
                  </div>
                  <h4>Reformas</h4>
                  <p>Lorem  laboriosam? Natus laudantium sapiente veniam omnis.</p>
                </div>

                </div>
                <div class="col-md-6 card2 hidden-xs">
                <div class="position">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/home-img-1_03.png" class="img-responsive" alt="">
                </div>
                </div>
             </div> -->
           </div>

      </div>
<?php get_footer(); ?>