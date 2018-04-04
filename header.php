<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width">

        <title><?php bloginfo('name'); ?></title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="author" content="UpMarketing Digital - Jonilson / Wacrksson" />
        <meta name="language" content="pt-br" />
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="Abstract" content="" />
        <meta name="url" content="" />
        <meta name="Audience" content="all" />
        <meta name="rating" content="general" />
        <meta name="robots" content="index, follow" />
        <meta name="googlebot" content="index, follow" />
        <meta name="msnbot" content="index,follow,all" />
        <meta name="inktomislurp" content="index,follow,all" />
        <meta name="unknownrobot" content="index,follow,all" />
        <meta name="classification" content="commercial" />
        <meta name="distribution" content="global" />
        <meta property="og:image" content="<?= DIR; ?>/assets/img/site.png" />

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

        <section class="title">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="img/topo.jpg" alt="SENE" class="logotipo"></a>
            </div>
        </section>

        <section class="section-navbar nav-background-color">
            <div class="container">
                <?php get_template_part( 'templates/menu' ); ?>    
            </div>
        </section>

