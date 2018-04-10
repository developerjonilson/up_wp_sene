<?php
// template name: curso
get_header();
 ?>

<section class="">

    <div class="container custom-container">
        <br>

        <h3 class="text-center"> <?php the_title(); ?> </h3>

            <br>

            <p>
                <?php the_content(); ?>
            </p>

        <br><br>
    </div>
</section>

 <?php
 get_footer();
  ?>
