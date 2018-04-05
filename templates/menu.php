<nav class="navbar navbar-expand-lg navbar-light nav-background-color">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto center">
        <li class="nav-item">
            <a class="nav-link ml-4" href="#">HOME <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link ml-4" href="#">EMPRESA</a>
        </li>
        <li class="nav-item">
            <a class="nav-link ml-4" href="#">CURSOS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link ml-4" href="#">GALERIA</a>
        </li>
        <li class="nav-item">
            <a class="nav-link ml-4" href="#">ATENDIMENTO</a>
        </li>
        <li class="nav-item">
            <a class="nav-link ml-4" href="#">BLOG</a>
        </li>
        </ul>
    </div>
    <div class="date">
        <span class="navbar-text">
        <?php 
            date_default_timezone_set('America/Fortaleza');
            echo strftime('%d de %B de %Y', strtotime('today'));
        ?>
        </span>
    </div>
</nav>

<!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php get_template_part('templates/menu'); ?>
        </div> -->