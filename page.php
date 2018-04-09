<?php get_header(); ?>

        
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="container custom-container">
            
            <br>

            <h3 class="text-center"> <?php the_title(); ?> </h3>

            <br>

            <p>
                <?php the_content(); ?>
            </p>

            <br><br>
            
        </div>
    <?php endwhile; else : ?>
        <p>Nenhum resultado encontrado</p>
    <?php endif; ?>

<?php get_footer(); ?>
