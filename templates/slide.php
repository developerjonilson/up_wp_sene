<section class="section-slide">

    <?php 
        
        $args = array('post_type' => 'slide', 'post_per_page' => 6 );
        $loop = new WP_Query($args);
        $posts = [];
        
        if ($loop->have_posts()) {
            
            while ($loop->have_posts()) { 
                $loop->the_post(); 
                $p = [];

                $p['medium'] = get_the_post_thumbnail_url(null, 'slide-big', '');
                $p['thumbnail'] = get_the_post_thumbnail_url(null, 'slide-small', '');
                $p['title']     = get_the_title();

                array_push($posts, $p);
            }

            ?>
            <div class="slider-for space">
                <?php 
                    foreach ($posts as $p) {
                        ?>
                            <div style="background-image: url('<?= $p['medium'] ?>'); height: 365px; background-size: cover;"></div>
                        <?php
                    }
                ?>
            </div>
            <div class="slider-nav">
                <?php 
                    foreach ($posts as $p) {
                        ?>
                            <div style="background-image: url('<?= $p['thumbnail'] ?>'); height: 75px; background-size: cover; margin: 5px;"></div>
                        <?php
                    }
                ?>
            </div>
            <?php
        } else {
            echo "<h3> Nenhuma imagem encontrado! </h3>";
        }
    ?>

</section>