<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lage Construtora</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <?php wp_head(); ?>
  </head>
  <body>
<nav class="navbar navbar-default visible-xs">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Lage Construtora</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<?php if (is_home()){ ?>
  <div class="container-fluid header">
<?php  }else { ?>
  <div class="container-fluid header-interna">
 <?php } ?>

    <div class="container hidden-xs">
      <div class="col-md-5 menu col-sm-5">
          <nav>
            <ul>
              <li><a href="<?php echo get_site_url(); ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
              <li><a href="<?php echo get_site_url(); ?>/quem-somos">QUEM SOMOS</a></li>
              <li><a href="<?php echo get_site_url(); ?>/servicos">SERVIÇOS</a></li>
              <li><a href="<?php echo get_site_url(); ?>/clientes">CLIENTES</a></li>
            </ul>
          </nav>
      </div>
      <div class="col-md-2 col-sm-2">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/logo_03.png" class="img-responsive" height="166" width="148" alt="">
      </div>
      <div class="col-md-3 col-md-offset-1 menu col-sm-4 col-sm-offset-0">
          <nav>
            <ul>

              <li><a href="<?php echo get_site_url(); ?>/contato" class="menu-estilizado-topo"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> CONTATO</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></a></li>
            </ul>
          </nav>
      </div>
    </div>
  </div>