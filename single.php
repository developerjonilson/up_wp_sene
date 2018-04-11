<?php get_header(); 

    if (in_category( 'eventos' ) ) {
        get_template_part( 'single-evento-content' );
    } else if (in_category( 'cursos' )) {
        get_template_part( 'single-curso-content' );
    } else {
        get_template_part( 'single-content' );
    }

?>
       

<?php get_footer(); ?>
