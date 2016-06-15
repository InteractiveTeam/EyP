<?php

/**
 * Crear nuestros menús gestionables desde el
 * administrador de Wordpress.
 */

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

/*imagenes destacadas*/
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

add_image_size( 'image-products_thumbs', 170, 207, true );
add_image_size( 'image-stadistics_thumbs', 68, 68, true );

/* Nuevos productos */

register_post_type( 'Nuevos productos', array(
		'labels' => array(
			'name' => __( 'Nuevos productos' ),
			'singular_name' => __( 'Nuevos productos' )
		),
		'public' => true,
		'has_archive' => true,
		'supports' => array(
			'title',
			'editor',
			'author',
			'thumbnail',
			'excerpt',
			'revisions',
		),
        'exclude_from_search' => true
	) );

/* estadisticas */

register_post_type( 'Estadisticas', array(
		'labels' => array(
			'name' => __( 'Estadisticas' ),
			'singular_name' => __( 'Estadisticas' )
		),
		'public' => true,
		'has_archive' => true,
		'supports' => array(
			'title',
			'editor',
			'author',
			'thumbnail',
			'excerpt',
			'revisions',
		),
        'exclude_from_search' => true
	) );

/* Menu Principal */

register_post_type( 'Menu principal', array(
		'labels' => array(
			'name' => __( 'Menu principal' ),
			'singular_name' => __( 'Menu principal' )
		),
		'public' => true,
		'has_archive' => true,
		'supports' => array(
			'title',
			'editor',
			'author',
			'thumbnail',
			'excerpt',
			'revisions',
		),
        'exclude_from_search' => true
	) );

/* creditos */

register_post_type( 'Creditos', array(
		'labels' => array(
			'name' => __( 'Creditos' ),
			'singular_name' => __( 'Creditos' )
		),
		'public' => true,
		'has_archive' => true,
		'supports' => array(
            'title',
			'editor',
		),
        'exclude_from_search' => true
	) );

remove_filter('the_content', 'wpautop');

// Cambiar texto de "read more"
function be_excerpt_more( $more ) {
	return 'Ver más...';
}
add_filter( 'excerpt_more', 'be_excerpt_more' );
// editar el custom theme"
add_theme_support( 'custom-header' );

//function

if ( function_exists('register_sidebar') )
    register_sidebar(array(
    'name' => 'redes sociales',
    'before_widget' => '',
    'after_widget' => '',
));

if ( function_exists('register_sidebar') )
    register_sidebar(array(
    'name' => 'contactenos',
    'before_widget' => '',
    'after_widget' => '',
));

if ( function_exists('register_sidebar') )
    register_sidebar(array(
    'name' => 'menu header',
    'before_widget' => '',
    'after_widget' => '',
));
