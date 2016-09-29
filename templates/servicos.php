      <div class="container main-content-container">
           <div class="servicos">
           <h1>Serviços</h1>
                 <?php
      query_posts('post_type=servicos&order=ASC&showposts=1&offset=0');
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
                  <img src="<?php the_field('imagem') ?>" class="img-responsive" alt="<?php the_title() ?> ">
                </div>
                </div>
             </div>
 <?php  endwhile;  endif;   wp_reset_query(); ?>
                 <?php
      query_posts('post_type=servicos&order=ASC&showposts=1&offset=1');
      if (have_posts()) : while (have_posts()): the_post();
      ?>
             <div class="col-md-6">
                <div class="col-md-6 card3 text-left">
                <div class="position col-md-10">
                  <div class="row">
                    <hr class="col-md-2 col-md-offset-1">
                  </div>
                  <h4><?php the_field('titulo_do_serviço') ?></h4>
                 <?php the_content() ?>
                </div>
                </div>
                <div class="col-md-6 card4 hidden-xs">
                <div class="position">
                   <img src="<?php the_field('imagem') ?>" class="img-responsive" alt="<?php the_title() ?> ">
                </div>

                </div>
             </div>
             <?php  endwhile;  endif;   wp_reset_query(); ?>
           </div>

      </div>