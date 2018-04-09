<?php get_header(); ?>

 <?php get_template_part('templates/slide'); ?>

<section class="conteudo">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-7" style="padding-bottom: 5px; padding-left: 0;">
            <iframe width="100%" height="100%"
              src="https://www.youtube.com/embed/auStIUBKncM">
            </iframe>
          </div>
          
         <?php get_template_part('templates/eventos'); ?>

        </div>
        <div class="video-description">
          <div class="row groups-text-video">
            <h4>AÇÃO JOVEM</h4>
          </div>
          <div class="row text-secundario-video">
            <span>Conheça mais sobre o nosso projeto</span>
          </div>
        </div>

      </div>
    </section>

<?php get_footer(); ?>
