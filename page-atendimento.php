<?php
    // template name: atendimento

    get_header();
?>
    <section class="container custom-container">
      <br>
      <h3 class="text-center"> <?php the_title(); ?> </h3>
      <br>

      <form action="#" method="post">
          <div class="form-group">
              <label for="name">Nome</label>
              <input type="text" name="name" id="name" class="form-control">
          </div>
          <div class="form-group">
              <label for="name">E-mail</label>
              <input type="text" name="email" id="email" class="form-control">
          </div>
          <div class="form-group">
              <label for="name">Assunto</label>
              <input type="text" name="assunto" id="mensagem" class="form-control">
          </div>
          <div class="form-group">
              <label for="name">Mensagem</label>
              <textarea name="mensagem" id="mensagem" cols="30" rows="5" class="form-control"></textarea>
          </div>
          <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Enviar Mensagem">
          </div>
      </form>

      <br><br>
    </section>

<?php get_footer(); ?>
