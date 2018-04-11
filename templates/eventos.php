<div class="col-12 col-md-5 background-event">
    <h4 class="space-h5">Eventos SENE</h4>
    
    <div class="row">
        <span class="primary-bar"></span>
    </div>

    <?php 
        
        $cat = 'eventos';
        $ppp = 3;
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $catID = (int) get_cat_ID($cat);
        $loop = new WP_Query( array( 'cat' => $catID, 'posts_per_page' => $ppp, 'paged' => $paged ) );
        
        if ($loop->have_posts()) {
            
            while ($loop->have_posts()) { 
                $loop->the_post(); ?>

                <a href="<?= the_permalink(); ?>" class="events">
                    <span class="date-event"><?php the_field('data_do_evento'); ?></span>
                    <span class="event-description"> - <?php the_field('local_do_evento'); ?> </span>
                    <span class="event-description"><?php the_excerpt(); ?></span>
                </a>
                <div class="row">
                    <span class="secondary-bar"></span>
                </div>
        <?php
            }
        } else {
            echo "<h4> Nenhum evento encontrado! </h4>";
        }
    
    ?>

    <div class="row">
        <span class="primary-bar"></span>
    </div>
    <h5 class="d-flex justify-content-end learn-more space-h5">
        <a href="<?= home_url('eventos/'); ?>" class="know-more">SAIBA MAIS...</h5></a>
    </div>