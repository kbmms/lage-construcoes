<div class="container-fluid footer text-center">

  <br><br>
        <div class="container-fluid face-line">
      <div class="row facebook-box">
      <div class="col-md-3 col-md-offset-3"> <p>Siga-nos no <span class="face-btn">Facebook</span></p></div>
      <div class="col-md-3">
<center>
<iframe allowtransparency="true" frameborder="0" scrolling="no" src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FCuryConstrutora&amp;width=300&amp;height=258&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color=%23ffffff&amp;header=false&amp;appId=568733679822116" style="border: none; height: 258px; overflow: hidden; width: 300px;"></iframe>
</center>
      </div>


      </div>
        </div>

      <br><br>
        <div class="container">
      <div class="row menu-footer">
                              <?php

            wp_nav_menu(
                $args = array(
                    'menu' => 'rodape',
                    'container' => 'nav',
                    'container_class' => 'text-center collapse navbar-collapse scroll-go-link',
                    'container_id' => 'bs-example-navbar-collapse-1',
                    'menu_class' => '',
                    'menu_id' => '',
                    'echo' => true,
                    'fallback_cb' => 'wp_page_menu',
                    'before' => '',
                    'after' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth' => 0,
                    'walker' => new WPDocs_Walker_Nav_Menu(),
                    'theme_location' => 'rodape'
                )
            );

        ?>
<!--           <nav class="text-center">
            <ul class="">
              <li><a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
              <li><a href="#">&bull; QUEM SOMOS</a></li>
              <li><a href="#">&bull; SERVIÇOS</a></li>
              <li><a href="#">&bull; CLIENTES</a></li>
               <li><a href="#" class="btn-estilizado-footer"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> CONTATO</a></li>
            </ul>
          </nav> -->
      </div>
      <br><br>
      <div class="row text-center">
          <p><img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/logo_03.png" height="166" width="148" alt=""></p>
          <p>©  2016 lage construtora</p>
      </div>
  </div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

  <?php wp_footer(); ?>
  </body>
</html>