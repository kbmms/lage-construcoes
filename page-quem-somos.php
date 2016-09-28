 <?php get_header(); ?>
<div class="container-fluid interna-title-full">
    <div class="container">
        <h2><span class="marcador">&bull; </span>   <?php the_title(); ?></h2>
    </div>
</div>

<div class="container-fluid quem-somos-full">
    <div class="container">
        <div class="row">
               <?php $query = new WP_Query( 'category_name=quemsomos&showposts=2' ); ?>
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
        <br><br><br><br>
        <div class="row">
            <div class="col-md-4">
               <?php $query = new WP_Query( 'category_name=missao&showposts=1' ); ?>
               <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

            <h4><?php the_title() ?></h4>
            <?php the_content() ?>

               <?php endwhile;
               wp_reset_postdata();
               else : ?>
               <p><?php _e( 'Desculpa, nenhuma postagem encontrada.' ); ?></p>
               <?php endif; ?>

            </div>



            <div class="col-md-4">
               <?php $query = new WP_Query( 'category_name=visao&showposts=1' ); ?>
               <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
            <h4><?php the_title() ?></h4>
               <?php the_content() ?>
               <?php endwhile;
               wp_reset_postdata();
               else : ?>
               <p><?php _e( 'Desculpa, nenhuma postagem encontrada.' ); ?></p>
               <?php endif; ?>
            </div>



            <div class="col-md-4">
               <?php $query = new WP_Query( 'category_name=valores&showposts=1' ); ?>
               <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

            <h4>Valores</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime similique, tenetur! Iste fugiat rerum, provident ad! Nobis ipsa obcaecati deserunt quos dolore, ducimus odio sit cupiditate iste vel inventore, architecto maxime voluptatem harum, voluptas laborum assumenda voluptatibus animi blanditiis. Unde placeat eligendi, laborum quae repellendus accusantium odio quod. Hic, porro.</p>
               <?php endwhile;
               wp_reset_postdata();
               else : ?>
               <p><?php _e( 'Desculpa, nenhuma postagem encontrada.' ); ?></p>
               <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>