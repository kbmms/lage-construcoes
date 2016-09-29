    <div class="container">
        <div class="clientes">
          <h1>Clientes</h1>
        </div>
        <div class="owl">
          <div id="owl-demo" class="owl-carousel owl-theme text-center">
               <?php $query = new WP_Query( 'post_type=clientes&order=ASC&showposts=-1' ); ?>
               <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="item">
                     <img src="<?php the_field('imagem_cliente') ?>" alt="<?php the_title() ?>">
                    </div>
               <?php endwhile;
               wp_reset_postdata();
               else : ?>
               <p><?php _e( 'Desculpa, nenhuma postagem encontrada.' ); ?></p>
               <?php endif; ?>

</div>


        </div>
        <div class="customNavigation">
  <a class="btn prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
  <a class="btn next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
<!--   <a class="btn play">Autoplay</a>
  <a class="btn stop">Stop</a> -->
</div>
    </div>