<?php 

// template name: lista de eventos

get_header();
?>

<section class="container custom-container">
  <br>

  <div class="eventos-list">

    <?php
        $cat = 'eventos';
        $ppp = 5;
        $catID = (int) get_cat_ID($cat);
        $loop = new WP_Query( array( 'cat' => $catID, 'posts_per_page' => $ppp ) );

    
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
			<p>Nenhum cursos encontrado!</p>
		<?php endif; ?>
		<?php wp_pagination($loop); ?>

  </div>

  <br>
</section>

 <?php
get_footer();
?>