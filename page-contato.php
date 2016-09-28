 <?php get_header(); ?>
<div class="container-fluid interna-title-full">
    <div class="container">
        <h2><span class="marcador">&bull; </span>   <?php the_title(); ?></h2>
    </div>
</div>
<div class="container-full interna-content-full">
    <div class="container">
    <div class="col-md-12 texto-interna-cima"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, sequi.</p></div>

<form>
    <div class="col-md-3">
          <div class="form-group">
            <input type="nome" class="form-control" id="exampleInputEmail1" placeholder="Nome">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="tel" class="form-control" id="exampleInputEmail1" placeholder="Telefone">
          </div>
    </div>
    <div class="col-md-9">
          <div class="form-group">
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Assunto">
          </div>
          <div class="form-group">

            <textarea class="form-control" rows="3" placeholder="Mensagem"></textarea>
          </div>
    </div>
    <div class="col-md-12 btn-send-form">
         <button type="submit" class="pull-right btn btn-default">Enviar Mensagem</button>
    </div>

</form>
    </div>
</div>
<?php get_footer(); ?>