<?php

function chata_script_enqueue(){
	wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array() ,'1.0.0', 'all');
	wp_enqueue_style( 'styles', get_template_directory_uri() . '/styles/tiendaschata.css', array('bootstrap-css') ,'1.0.0', 'all');
	wp_enqueue_style( 'fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array() ,'1.0.0', 'all');
	wp_enqueue_style( 'amf', get_template_directory_uri() . '/styles/amf.css', array('bootstrap-css') ,'1.0.0', 'all');
	wp_enqueue_style( 'least', get_template_directory_uri() . '/styles/least.min.css', array('bootstrap-css') ,'1.0.0', 'all');
	wp_enqueue_style( 'recetas.css', get_template_directory_uri() . '/styles/recetas.css', array('bootstrap-css') ,'1.0.0', 'all');
	wp_enqueue_style( 'fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array() ,'1.0.0', 'all');

	//wp_enqueue_script( 'tiendas_chata', get_template_directory_uri() . '/js/chata.js', array('jquery') ,'1.0.0', true);
	//wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.2.1.js', array() ,'1.0.0', true);
	wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery') ,'1.0.0', true);
	//Agregar otros JS
	wp_enqueue_script( 'least-js', get_template_directory_uri() . '/js/least.min.js', array('jquery') ,'1.0.0', true);
	

}

add_action('wp_enqueue_scripts', 'chata_script_enqueue');

function chata_theme_setup(){
	add_theme_support('menus');
	add_theme_support('widgets');
	register_nav_menu( 'primary' , 'Primary header navigation' );
	register_nav_menu( 'secondary' , 'Footer navigation' );

}

add_action('init', 'chata_theme_setup');


if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}