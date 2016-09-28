 <?php get_header(); ?>
<div class="container-fluid interna-title-full">
    <div class="container">
        <h2><span class="marcador">&bull; </span>   <?php the_title(); ?></h2>
    </div>
</div>

<div class="container-fluid clientes-interna-full">
    <div class="container">
        <div class="clientes-interna text-center">
            <ul>
               <?php $query = new WP_Query( 'post_type=clientes&order=ASC&showposts=-1' ); ?>
               <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

            <li><img src="<?php the_field('imagem_cliente') ?>" alt="<?php the_title() ?>"></li>

               <?php endwhile;
               wp_reset_postdata();
               else : ?>
               <p><?php _e( 'Desculpa, nenhuma postagem encontrada.' ); ?></p>
               <?php endif; ?>

            </ul>
        </div>
    </div>
</div>
<?php get_footer(); ?>