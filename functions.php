<?php

define("DIR", get_template_directory_uri());
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

function add_theme_scripts() {
	wp_enqueue_style( 'bootstrap', DIR . '/assets/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style( 'slick', DIR . '/assets/slick/slick.css');
	wp_enqueue_style( 'slick-theme', DIR . '/assets/slick/slick-theme.css');
	wp_enqueue_style( 'simple-calendar', DIR . '/assets/css/jsCalendar.min.css');
	wp_enqueue_script( 'font-awesome5', 'https://use.fontawesome.com/releases/v5.0.8/js/all.js');

	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_script( 'bootstrap-js', DIR . '/assets/bootstrap/js/bootstrap.min.js', array ( 'jquery' ));
	wp_enqueue_script( 'slick-js', DIR . '/assets/slick/slick.min.js', array ( 'jquery' ));
	wp_enqueue_script( 'simple-calendar-js', DIR . '/assets/js/jsCalendar.min.js', array ( 'jquery' ));
	wp_enqueue_script( 'simple-calendar-pt-js', DIR . '/assets/js/jsCalendar.lang.pt.js', array ( 'jquery' ));

	wp_enqueue_script( 'theme-js', DIR . '/assets/js/theme.js', array ( 'jquery', 'simple-calendar-js' ));
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
add_theme_support( 'post-thumbnails' );

require_once('wp_bootstrap_navwalker.php');

add_image_size('slide-small', 200, 75, true);
add_image_size('slide-big', 960, 360, true);

/**
 *
 * Paginação utilizando a função paginate_links
 * @param  WP_Query $query Contém uma $query customizada
 *
 */
function wp_pagination( $query=null, $wpcpn_posts=null )
{
    global $wp_query;
    $query = $query ? $query : $wp_query;
    $big = 999999999;
    $max_num_pages = $query->max_num_pages;
    $paginate = paginate_links(
        array(
            'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'type'      => 'array',
            'total'     => $max_num_pages,
            'format'    => '?paged=%#%',
            'current'   => max( 1, get_query_var('paged') ),
            'prev_text' => __('&laquo;'),
            'next_text' => __('&raquo;'),
        )
    );
    if ( $max_num_pages > 1 && $paginate ) {
        echo '<nav aria-label="Page navigation example">';
        echo '<ul class="pagination justify-content-center">';
        foreach ( $paginate as $page ) {
		$active = strpos($page, 'current') !== false ? 'active' : '';
		$page = str_replace('span', 'a', $page);
		$page = str_replace('page-numbers', 'page-link', $page);
		$page = str_replace('current', '', $page);
		echo '<li class="page-item '. $active .'">' . $page . '</li>';
        }
        echo '</ul>';
        echo '</nav>';
    }
}

function the_title_max_charlength($charlength, $end_str = '[...]') {
	$title = get_the_title();
	$charlength++;

	if ( mb_strlen( $title ) > $charlength ) {
		$subex = mb_substr( $title, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			echo mb_substr( $subex, 0, $excut );
		} else {
			echo $subex;
		}
		echo $end_str;
	} else {
		echo $title;
	}
}

function the_excerpt_max_charlength($charlength, $end_str = '[...]') {
	$excerpt = get_the_excerpt();
	$charlength++;

	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			echo mb_substr( $subex, 0, $excut );
		} else {
			echo $subex;
		}
		echo $end_str;
	} else {
		echo $excerpt;
	}
}

function limit_words($string, $word_limit) {
    $words = explode(" ", $string);
    return implode(" ", array_splice($words, 0, $word_limit));
}


// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Slides', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Slide', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Slides', 'text_domain' ),
		'name_admin_bar'        => __( 'Slides', 'text_domain' ),
		'archives'              => __( '', 'text_domain' ),
		'attributes'            => __( '', 'text_domain' ),
		'parent_item_colon'     => __( '', 'text_domain' ),
		'all_items'             => __( 'Todos', 'text_domain' ),
		'add_new_item'          => __( 'Adicionar Novo Slide', 'text_domain' ),
		'add_new'               => __( 'Adicionar Novo', 'text_domain' ),
		'new_item'              => __( 'Novo Slide', 'text_domain' ),
		'edit_item'             => __( 'Editar Slide', 'text_domain' ),
		'update_item'           => __( 'Atualizar Slide', 'text_domain' ),
		'view_item'             => __( 'Visualizar Slide', 'text_domain' ),
		'view_items'            => __( 'Visualizar Slides', 'text_domain' ),
		'search_items'          => __( '', 'text_domain' ),
		'not_found'             => __( 'Não encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( '', 'text_domain' ),
		'featured_image'        => __( 'Imagem do Slide', 'text_domain' ),
		'set_featured_image'    => __( 'Selecionar Imagem do Slide', 'text_domain' ),
		'remove_featured_image' => __( 'Remover Imagem do Slide', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como Imagem do Slide', 'text_domain' ),
		'insert_into_item'      => __( '', 'text_domain' ),
		'uploaded_to_this_item' => __( '', 'text_domain' ),
		'items_list'            => __( '', 'text_domain' ),
		'items_list_navigation' => __( '', 'text_domain' ),
		'filter_items_list'     => __( '', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Slide', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-image',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'slide', $args );

}
add_action( 'init', 'custom_post_type', 0 );
