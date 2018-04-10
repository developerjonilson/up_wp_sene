<div class="col-12 col-md-5 background-event">
    <h4 class="space-h5">Eventos SENE</h4>
    
    <div class="row">
        <span class="primary-bar"></span>
    </div>

    <?php 
        
        $args = array('cat' => get_cat_ID( 'eventos' ), 'post_per_page' => 3 );
        $loop = new WP_Query($args);
        
        if ($loop->have_posts()) {
            
            while ($loop->have_posts()) { 
                $loop->the_post(); ?>

                <a href="<?= the_permalink(); ?>" class="events">
                    <span class="date-event"><?php the_field('data_do_evento'); ?></span>
                    <span class="event-description"> - <?php the_field('local_do_evento'); ?> </span><br>
                    <span class="event-description"><?php the_excerpt(); ?></span><br>
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