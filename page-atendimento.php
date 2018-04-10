<?php get_header(); ?>

    <form action="#">
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
            <textarea name="mensagem" id="mensagem" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Enviar">
        </div>
    </form>

<?php get_footer(); ?>
