<nav class="navbar navbar-expand-lg navbar-light nav-background-color">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto center">
        <li class="nav-item">
            <a class="nav-link ml-4" href="<?= home_url(); ?>">HOME <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link ml-4" href="<?= home_url('empresa/'); ?>">EMPRESA</a>
        </li>
        <li class="nav-item">
            <a class="nav-link ml-4" href="<?= home_url('cursos/'); ?>">CURSOS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link ml-4" href="<?= home_url('galeria/'); ?>">GALERIA</a>
        </li>
        <li class="nav-item">
            <a class="nav-link ml-4" href="<?= home_url('atendimento/'); ?>">ATENDIMENTO</a>
        </li>
        <li class="nav-item">
            <a class="nav-link ml-4" href="<?= home_url('blog/'); ?>">BLOG</a>
        </li>
        </ul>
    </div>
    <div class="date">
        <span class="navbar-text">
        <?php 
            the_time('d \d\e F \d\e Y')
        ?>
        </span>
    </div>
</nav>