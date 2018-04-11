<?php get_header(); ?>

    <section class="container custom-container">
    <br>

    <div class="blog-list">

        <?php
        $cat = 'blog';
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $catID = (int) get_cat_ID($cat);
        $loop = new WP_Query( array( 'cat' => $catID, 'paged' => $paged ) );

    
        if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="row">
                <div class="col-12 col-md-12">
                    <div><h4 class="text-bold"><a href="<?= the_permalink(); ?>"> <?= the_title(); ?> </a> </h4></div>
                    <div><p class="text-justify"> <?= the_excerpt(); ?> </p></div>
                </div>
            </div>
            <hr class="line-divide-cursos">
            <br>
		<?php endwhile; else : ?>
			<p>Nenhuma postagem encontrada!</p>
		<?php endif; ?>
		<?php wp_pagination($loop); ?>

    </div>

    <br>
    </section>

<?php get_footer(); ?>
