<?php 

add_action( 'wp_enqueue_scripts', function(){
	wp_enqueue_style( 'fonts', get_stylesheet_directory_uri() . '/assets/css/fonts.css', array());
	wp_enqueue_style( 'null', get_stylesheet_directory_uri() . '/assets/css/null.css', array());
	wp_enqueue_style( 'base', get_stylesheet_directory_uri() . '/assets/css/base.css', array());
	wp_enqueue_style( 'header', get_stylesheet_directory_uri() . '/assets/css/header.css', array());
	wp_enqueue_style( 'swipre-css', get_stylesheet_directory_uri() . '/assets/css/lib/swiper.css', array());
	wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/assets/css/style.css', array());

	wp_enqueue_script( 'dinemikAdaptive', get_stylesheet_directory_uri() . '/assets/js/lib/dinemikAdaptive.js', array(), null, true);
	wp_enqueue_script( 'swiper-js', get_stylesheet_directory_uri() . '/assets/js/lib/swiper.js', array(), null, true);
	wp_enqueue_script( 'main-js', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery','acf-input'),null,true);


	wp_localize_script('main-js', 'partners_image', array(
		'arr' => get_field("gallery_of_partners")
		)
	);
});