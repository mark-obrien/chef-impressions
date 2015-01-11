<?php

function ci_setup() {

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'chefimpressions' ),
		'social'  => __( 'Social Links Menu', 'chefimpressions' ),
	) );

	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

}
add_action( 'after_setup_theme', 'ci_setup' );


// Theme Scripts And Styles

function ci_scripts_styles(){

	wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '1.1.3'); 
	wp_enqueue_style('sans-pro', "http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic", array(), '');
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.2.0');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.1');
	wp_enqueue_style('bootstrap-theme', get_template_directory_uri() . '/css/bootstrap-theme.css', array(), '1.0.1');

	if(!is_admin()){
		wp_deregister_script( 'jquery' ); // remove standard jquery
    	wp_enqueue_script( 'jquery', get_template_directory_uri() .'/js/vendor/jquery-1.10.2.min.js', array(), '1.10.2', true );
	}
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array('jquery'), '3.1.1', true);
	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);

}

add_action( 'wp_enqueue_scripts', 'ci_scripts_styles');