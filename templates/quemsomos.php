      <div class="container">
          <div class="row quem-somos">
             <div class="col-md-6">
               <h1>Quem Somos</h1>
             </div>
               <?php $query = new WP_Query( 'category_name=quemsomos&showposts=1' ); ?>
               <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
              <div class="col-md-6">
                <?php the_content() ?>
              </div>
               <?php endwhile;
               wp_reset_postdata();
               else : ?>
               <p><?php _e( 'Desculpa, nenhuma postagem encontrada.' ); ?></p>
               <?php endif; ?>
          </div>
      </div>